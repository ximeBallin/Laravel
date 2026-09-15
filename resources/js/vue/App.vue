<template>
    <div class="container mx-auto px-4 py-8">
        <h1>Principal</h1>
        <!-- Aquí se renderizan las vistas de Vue Router (List, Save, etc.) -->
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: 'App'
}
</script>
