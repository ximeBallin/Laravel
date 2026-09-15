<template>
    <div>
        <h2>Crear Post</h2>
        <form @submit.prevent="submitForm">
            <o-field label="Título">
                <o-input v-model="form.title" placeholder="Título del post"></o-input>
            </o-field>

            <o-field label="Contenido">
                <o-input type="textarea" v-model="form.content" placeholder="Contenido del post"></o-input>
            </o-field>

            <o-button variant="primary" native-type="submit">Guardar</o-button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                title: '',
                content: ''
            }
        }
    },
    methods: {
        submitForm() {
            // Lógica inicial de guardado
            console.log(this.form);
        }
    }
}
</script>
