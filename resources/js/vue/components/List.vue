<template>
    <div>
        <h2>Listado de Post</h2>

        <!-- Tabla usando Oruga UI o HTML estándar -->
        <o-table :data="posts">
            <o-table-column field="id" label="ID" numérica v-slot="props">
                {{ props.row.id }}
            </o-table-column>

            <o-table-column field="title" label="Título" v-slot="props">
                {{ props.row.title }}
            </o-table-column>

            <o-table-column field="posted" label="Posteado" v-slot="props">
                {{ props.row.posted }}
            </o-table-column>

            <o-table-column field="created_at" label="Fecha" v-slot="props">
                {{ props.row.created_at }}
            </o-table-column>

            <o-table-column field="category" label="Categoría" v-slot="props">
                {{ props.row.category?.title }}
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
        async getPosts() {
            try {
                const response = await axios.get('/api/post'); // Ajusta la ruta según tu API
                this.posts = response.data;
            } catch (error) {
                console.error("Error al cargar los posts:", error);
            }
        }
    }
}
</script>
