<template>
    <div>
        <h2>Listado de Posts</h2>
        <!-- Botón para ir a crear -->
        <o-button variant="primary" tag="router-link" :to="{ name: 'save' }">Crear Post</o-button>

        <o-table :data="posts" :paginated="true" :per-page="5">
            <o-table-column field="id" label="ID" numeric></o-table-column>
            <o-table-column field="title" label="Título"></o-table-column>
            <o-table-column field="category.title" label="Categoría"></o-table-column>

            <!-- Columna de Acciones -->
            <o-table-column label="Acciones" v-slot="props">
                <o-button
                    size="small"
                    variant="info"
                    tag="router-link"
                    :to="{ name: 'save', params: { id: props.row.id } }">
                    Editar
                </o-button>
                <o-button
                    size="small"
                    variant="danger"
                    @click="deletePost(props.row.id)">
                    Eliminar
                </o-button>
            </o-table-column>
        </o-table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            posts: []
        }
    },
    mounted() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            axios.get('/api/posts')
                .then(response => {
                    this.posts = response.data;
                })
                .catch(error => {
                    console.error("Error al cargar los posts:", error);
                });
        },
        deletePost(id) {
            if (confirm('¿Estás seguro de que deseas eliminar este post?')) {
                axios.delete(`/api/posts/${id}`)
                    .then(response => {
                        // Filtramos el array localmente para remover el post eliminado
                        this.posts = this.posts.filter(post => post.id !== id);
                    })
                    .catch(error => {
                        console.error("Error al eliminar el post:", error);
                    });
            }
        }
    }
}
</script>
