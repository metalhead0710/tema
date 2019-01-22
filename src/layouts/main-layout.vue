<template>
    <main>
        <main-header></main-header>
        <slot></slot>
        <main-footer></main-footer>
        <back-to-top>
            <button class="btn btn-to-top"></button>
        </back-to-top>
    </main>
</template>

<script>
import MainHeader from '@/components/main-header'
import MainFooter from '@/components/main-footer'

export default {
    name: 'MainLayout',
    components: {
        MainHeader,
        MainFooter
    }
}
</script>
