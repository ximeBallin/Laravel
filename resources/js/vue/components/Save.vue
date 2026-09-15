<template>
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">{{ postId ? 'Editar Post' : 'Guardar Post' }}</h2>

        <!-- Bloque para mostrar errores de validación generales o del servidor -->
        <div v-if="Object.keys(errors).length > 0" class="notification bg-red-100 text-red-700 p-4 mb-4 rounded">
            <ul>
                <template v-for="(fieldErrors, field) in errors" :key="field">
                    <li v-for="error in fieldErrors" :key="error">
                        {{ error }}
                    </li>
                </template>
            </ul>
        </div>

        <form @submit.prevent="submitForm">
            <!-- Campo Título -->
            <o-field label="Título" :type="errors.title ? 'danger' : ''" :message="errors.title ? errors.title[0] : ''">
                <o-input v-model="form.title" placeholder="Título del post"></o-input>
            </o-field>

            <!-- Campo Categoría -->
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

            <!-- Campo Contenido -->
            <o-field label="Contenido" :type="errors.content ? 'danger' : ''" :message="errors.content ? errors.content[0] : ''">
                <o-input type="textarea" v-model="form.content" placeholder="Contenido del post"></o-input>
            </o-field>

            <!-- Campo Archivo / Imagen con Oruga UI -->
            <o-field label="Selecciona una imagen" :type="errors.image ? 'danger' : ''" :message="errors.image ? errors.image[0] : ''">
                <o-upload v-model="file" accept="image/*">
                    <button class="button bg-blue-500 text-white px-4 py-2 rounded flex items-center space-x-2" type="button">
                        <o-icon icon="upload"></o-icon>
                        <span>Click para subir</span>
                    </button>
                </o-upload>
            </o-field>

            <!-- Botón de Envío -->
            <o-button variant="primary" native-type="submit" class="mt-4">Guardar</o-button>
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
            file: null, // Variable reactiva para almacenar el archivo seleccionado
            categories: [],
            errors: {},
            postId: null
        }
    },
    mounted() {
        this.getCategories();

        // Verificamos si recibimos un ID por la ruta (modo edición)
        if (this.$route.params.id) {
            this.postId = this.$route.params.id;
            this.getPost(this.postId);
        }
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
        getPost(id) {
            axios.get(`/api/posts/${id}`)
                .then(response => {
                    this.form = response.data;
                })
                .catch(error => {
                    console.error("Error al cargar el post:", error);
                });
        },
        submitForm() {
            this.errors = {}; // Limpiamos errores previos

            // Creamos el FormData para soportar campos de texto y archivos binarios
            const formData = new FormData();
            formData.append('title', this.form.title);
            formData.append('category_id', this.form.category_id);
            formData.append('content', this.form.content);

            if (this.file) {
                formData.append('image', this.file);
            }

            // Si es edición y Laravel requiere _method PUT para FormData
            if (this.postId) {
                formData.append('_method', 'PUT');
            }

            const url = this.postId ? `/api/posts/${this.postId}` : '/api/posts';

            // Usamos post (incluso en actualización con _method para evitar problemas con binarios en put)
            axios.post(url, formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
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
