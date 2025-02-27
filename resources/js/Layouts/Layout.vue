<script setup>
    import Header from '@/Components/Navigation/Header.vue';
    import Footer from '@/Components/Navigation/Footer.vue';
</script>

<template>
    <Header />

    <main>
        <slot></slot>
    </main>

    <Footer />
</template>

