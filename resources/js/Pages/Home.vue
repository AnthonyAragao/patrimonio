<script setup>
    import Layout from '@/Layouts/Layout.vue';
    import CarrosselPatrimonio from '@/Components/Patrimonio/CarroselPatrimonio.vue';
</script>

<template>
    <Layout>
        <section class="relative mb-60">
            <div class="w-full h-[900px] overflow-hidden -mt-36 rounded-b-[30%] relative">
                <div class="before:content-[''] before:absolute before:rounded-b-[30%] before:w-full before:h-full before:bg-gray-900 before:opacity-[.70]"></div>

                <img src="/images/sergipe.jpg" alt="Sergipe" class="w-full object-cover">

                <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center">
                    <h1 class="text-4xl font-bold">Patrimônio Cultural de Sergipe</h1>
                    <p class="text-lg mt-2 font-medium">Conheça o acervo de bens tombados do estado</p>
                </div>
            </div>

            <CarrosselPatrimonio />
        </section>
    </Layout>
</template>


