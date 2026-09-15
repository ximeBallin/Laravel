<template>
    <div>
        <h2>Guardar Post</h2>

        <!-- Bloque opcional para mostrar los mensajes generales o de validación -->
        <div v-if="errors" class="notification is-danger">
            <ul>
                <template v-for="(fieldErrors, field) in errors">
                    <li v-for="error in fieldErrors" :key="error">
                        {{ error }}
                    </li>
                </template>
            </ul>
        </div>

        <form @submit.prevent="submitForm">
            <o-field label="Título" :type="errors.title ? 'danger' : ''" :message="errors.title ? errors.title[0] : ''">
                <o-input v-model="form.title" placeholder="Título del post"></o-input>
            </o-field>

            <o-field label="Categoría" :type="errors.category_id ? 'danger' : ''" :message="errors.category_id ? errors.category_id[0] : ''">
                <o-select v-model="form.category_id" placeholder="Selecciona una categoría" expanded>
                    <option
                        v-for="category in categories"
                        :key="category.id"
                        :value="category.id">
                        {{ category.title }}
                    </option>
                </o-select>
            </o-field>

            <o-field label="Contenido" :type="errors.content ? 'danger' : ''" :message="errors.content ? errors.content[0] : ''">
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
            categories: [],
            errors: {}
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
            this.errors = {}; // Limpiamos errores previos
            axios.post('/api/posts', this.form)
                .then(response => {
                    this.$router.push({ name: 'list' });
                })
                .catch(error => {
                    if (error.response && error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    }
                });
        }
    }
}
</script>
