<template>
    <div>
        <h2>Guardar Post</h2>
        <form @submit.prevent="submitForm">
            <o-field label="Título">
                <o-input v-model="form.title" placeholder="Título del post"></o-input>
            </o-field>

            <o-field label="Categoría">
                <o-select v-model="form.category_id" placeholder="Selecciona una categoría" expanded>
                    <option
                        v-for="category in categories"
                        :key="category.id"
                        :value="category.id">
                        {{ category.title }}
                    </option>
                </o-select>
            </o-field>

            <o-field label="Contenido">
                <o-input type="textarea" v-model="form.content" placeholder="Contenido del post"></o-input>
            </o-field>

            <o-button variant="primary" native-type="submit">Guardar</o-button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            form: {
                title: '',
                category_id: '',
                content: ''
            },
            categories: []
        }
    },
    mounted() {
        this.getCategories();
    },
    methods: {
        getCategories() {
            axios.get('/api/category')
                .then(response => {
                    this.categories = response.data;
                })
                .catch(error => {
                    console.error("Error al cargar categorías:", error);
                });
        },
        submitForm() {
            axios.post('/api/posts', this.form)
                .then(response => {
                    this.$router.push({ name: 'list' });
                })
                .catch(error => {
                    console.error("Error al crear el post:", error);
                });
        }
    }
}
</script>
