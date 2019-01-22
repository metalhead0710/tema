<template>
    <div id="app">
        <main-layout>
            <router-view/>
        </main-layout>
    </div>
</template>

<script>
import MainLayout from '@/layouts/main-layout.vue'
export default {
    name: 'App',
    components: {
        MainLayout
    }
}
</script>
