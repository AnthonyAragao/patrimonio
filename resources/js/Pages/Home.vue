<script setup>
    import Layout from '@/Layouts/Layout.vue';
    import CarrosselPatrimonio from '@/Components/Patrimonio/CarroselPatrimonio.vue';
</script>

<template>
    <Head title="Patrimônio Cultural de Sergipe" />

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

        <section class="max-w-[1200px] mx-auto my-16">
            <div class="mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800">O Que é Patrimônio Cultural?</h2>
                <p class="text-gray-600 mt-2">Patrimônio cultural é o conjunto de bens, materiais e imateriais, que representam a identidade e a memória de um povo.</p>
            </div>

            <div class="mt-10 grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-700">🏛 Patrimônio Material</h3>
                    <p class="text-gray-600 mt-2">Conjunto de bens físicos e construções históricas como igrejas, museus e monumentos.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-700">🎭 Patrimônio Imaterial</h3>
                    <p class="text-gray-600 mt-2">Tradições, festas, danças, músicas e expressões culturais transmitidas entre gerações.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-700">🌿 Patrimônio Natural</h3>
                    <p class="text-gray-600 mt-2">Paisagens, ecossistemas e áreas protegidas que possuem valor cultural e ambiental.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-700">🏡 Patrimônio Arquitetônico</h3>
                    <p class="text-gray-600 mt-2">Edificações e conjuntos urbanos que representam um período histórico.</p>
                </div>
            </div>
        </section>



    </Layout>
</template>


