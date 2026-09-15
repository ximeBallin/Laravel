<template>
    <div>
        <h1>Principal</h1>
        <!-- Renderizamos el componente List importado -->
        <List />
    </div>
</template>

<script>
import List from './components/List.vue'

export default {
    components: {
        List
    }
}
</script>
