<script setup>
    import Layout from '@/Layouts/Layout.vue';
    import Hero from '@/Components/Patrimonio/Hero.vue';
</script>

<template>
    <Head title="Patrimônio Cultural de Sergipe" />

    <Layout>
        <Hero />

        <div class="w-full h-[2px] bg-gray-100"></div>

        <section class="max-w-[1200px] mx-auto my-20">
            <div class="flex items-center justify-center gap-1">
                <img src="/images/monumento.png" alt="monumento" class="size-14">
                <h2 class="text-3xl font-bold text-gray-800">O Que é Patrimônio Cultural?</h2>
            </div>

            <p class="text-gray-600 mt-2 text-center">O patrimônio cultural protegido abrange bens materiais e imateriais que possuem relevância histórica, artística, estética, simbólica ou afetiva. Esses bens são resguardados pelo poder público por meio de tombamento, registro imaterial, inventário ou outras formas de proteção previstas na legislação.</p>

            <div class="mt-10 grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 shadow-md rounded-lg hover:shadow-lg transition-all duration-300 ease-in-out">
                    <h3 class="text-xl font-semibold text-gray-700">🏰 Patrimônio Material</h3>
                    <p class="text-gray-600 mt-2">Conjunto de bens físicos e construções históricas como igrejas, museus e monumentos.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg hover:shadow-lg transition-all duration-300 ease-in-out">
                    <h3 class="text-xl font-semibold text-gray-700">🎭 Patrimônio Imaterial</h3>
                    <p class="text-gray-600 mt-2">Tradições, festas, danças, músicas e expressões culturais transmitidas entre gerações.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg hover:shadow-lg transition-all duration-300 ease-in-out">
                    <h3 class="text-xl font-semibold text-gray-700">🌿 Patrimônio Natural</h3>
                    <p class="text-gray-600 mt-2">Paisagens, ecossistemas e áreas protegidas que possuem valor cultural e ambiental.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg hover:shadow-lg transition-all duration-300 ease-in-out">
                    <h3 class="text-xl font-semibold text-gray-700">🏡 Patrimônio Arquitetônico</h3>
                    <p class="text-gray-600 mt-2">Edificações e conjuntos urbanos que representam um período histórico.</p>
                </div>
            </div>
        </section>

    </Layout>
</template>


