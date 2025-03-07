<script setup>
    import Layout from '@/Layouts/Layout.vue';
    import Hero from '@/Components/Patrimonio/Hero.vue';
</script>

<template>
    <Head title="Patrimônio Cultural de Sergipe" />

    <Layout>
        <Hero />

        <!-- <div class="w-full h-[2px] bg-gray-100"></div> -->

        <section class="max-w-[1200px] mx-auto my-28">
            <h2 class="text-center text-[2.5rem] font-bold text-black">O Que é Patrimônio Cultural?</h2>
            <p class="text-gray-800 mt-4 text-center">O patrimônio cultural protegido abrange bens materiais e imateriais que possuem relevância histórica, artística, estética, simbólica ou afetiva. Esses bens são resguardados pelo poder público por meio de tombamento, registro imaterial, inventário ou outras formas de proteção previstas na legislação.</p>

            <div class="mt-10 grid md:grid-cols-3 gap-6">
                <div class="bg-white p-8 shadow-md rounded-3xl border border-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out">
                    <img src="/images/igreja.png" alt="igreja" class="size-36">

                    <h3 class="text-2xl font-semibold text-gray-950 mt-6">Patrimônio Material</h3>
                    <p class="text-gray-600 mt-2">Conjunto de bens físicos e construções históricas como igrejas, museus e monumentos.</p>

                    <a href="" class="text-blue-400 font-semibold mt-6 uppercase text-sm tracking-[3px] flex items-center gap-2">
                        Saiba Mais
                        <img src="/images/seta-direita.png" alt="seta-direita-azul" class="size-6 inline-block ml-2">
                    </a>
                </div>

                <div class="bg-white p-8 shadow-md rounded-3xl border border-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out">
                    <img src="/images/tradicao.png" alt="tradicao" class="size-36">

                    <h3 class="text-2xl font-semibold text-gray-950 mt-6">Patrimônio Imaterial</h3>
                    <p class="text-gray-600 mt-2">Tradições, festas, danças, músicas e expressões culturais transmitidas entre gerações.</p>

                    <a href="" class="text-blue-400 font-semibold mt-6 uppercase text-sm tracking-[3px] flex items-center gap-2">
                        Saiba Mais
                        <img src="/images/seta-direita.png" alt="seta-direita-azul" class="size-6 inline-block ml-2">
                    </a>
                </div>

                <div class="bg-white p-8 shadow-md rounded-3xl border border-gray-100 hover:shadow-lg transition-all duration-300 ease-in-out">
                    <img src="/images/natureza.png" alt="natureza" class="size-36">

                    <h3 class="text-2xl font-semibold text-gray-950 mt-6">Patrimônio Natural</h3>
                    <p class="text-gray-600 mt-2">Paisagens, ecossistemas e áreas protegidas que possuem valor cultural e ambiental.</p>

                    <a href="" class="text-blue-400 font-semibold mt-6 uppercase text-sm tracking-[3px] flex items-center gap-2">
                        Saiba Mais
                        <img src="/images/seta-direita.png" alt="seta-direita-azul" class="size-6 inline-block ml-2">
                    </a>
                </div>

                <!-- <div class="bg-white p-6 shadow-md rounded-lg hover:shadow-lg transition-all duration-300 ease-in-out">
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
                </div> -->
            </div>
        </section>


        <section class="max-w-[1200px] mx-auto my-20">
            <div class="grid grid-cols-2 px-10 py-20 rounded-3xl bg-blue-400">
                <div class="flex items-center justify-center">
                    <img src="/images/protecao.png" alt="protecao" class="size-48">
                </div>

                <div>
                    <h2 class="text-[2.5rem] font-bold text-white leading-[1.2]">
                        <span class="text-blue-950">Como Preservar</span> o Patrimônio Cultural?
                    </h2>
                    <p class="text-gray-100 mt-8 text-start text-lg">A preservação do patrimônio cultural é uma responsabilidade compartilhada entre o poder público, a sociedade civil e os proprietários dos bens tombados. Ações de conservação, restauro, educação patrimonial e valorização da cultura são essenciais para garantir a perpetuação da memória e identidade de um povo.</p>
                </div>
            </div>
        </section>

        <!-- <section class="max-w-[1200px] mx-auto my-20">
            <div class="flex items-center justify-center gap-4 relative after:content-[''] after:absolute after:w-1/4 after:h-[2px] after:bg-blue-300 after:-bottom-1">
                <img src="/images/protecao.png" alt="protecao" class="size-14">
                <h2 class="text-3xl font-bold text-gray-950">Como Preservar o Patrimônio Cultural</h2>
            </div>

            <p class="text-gray-800 mt-8 text-center">A preservação do patrimônio cultural é uma responsabilidade compartilhada entre o poder público, a sociedade civil e os proprietários dos bens tombados. Ações de conservação, restauro, educação patrimonial e valorização da cultura são essenciais para garantir a perpetuação da memória e identidade de um povo.</p>
        </section> -->

        <!-- <section class="max-w-[1200px] mx-auto my-20">
            <div class="flex items-center justify-center gap-4 relative after:content-[''] after:absolute after:w-1/4 after:h-[2px] after:bg-blue-300 after:-bottom-1">
                <img src="/images/seta-direita.png" alt="seta-direita" class="size-14">
                <h2 class="text-3xl font-bold text-gray-800">
                    Saiba Mais Sobre o Patrimônio Cultural de Sergipe
                </h2>
            </div>

            <div class="flex justify-center space-x-8 mt-10">
                <a
                    href=""
                    class=" font-bold text-xl px-10 py-4 rounded-full text-blue-500 border border-blue-500"
                >
                    Bens Tombados
                </a>

                <a
                    href=""
                    class=" font-bold text-xl px-10 py-4 rounded-full text-blue-500 border border-blue-500"
                >
                    Bens Registrados
                </a>

                <a
                    href=""
                    class=" font-bold text-xl px-10 py-4 rounded-full text-blue-500 border border-blue-500"
                >
                    Bens Inventariados
                </a>

                <a
                    href=""
                    class=" font-bold text-xl px-10 py-4 rounded-full text-blue-500 border border-blue-500"
                >
                    Bens Inventariados
                </a>
            </div>
        </section> -->
    </Layout>
</template>


