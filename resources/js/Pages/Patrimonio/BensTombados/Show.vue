<script setup>
    import Layout from '@/Layouts/Layout.vue';
    import Breadcrumb from '@/Components/Navigation/Breadcrumb.vue';
</script>

<template>
    <Layout>
        <section class="relative mb-16">
            <div class="w-full h-[150px] overflow-hidden -mt-36 rounded-b-[30%] relative">
                <div class="before:content-[''] before:absolute before:rounded-b-[30%] before:w-full before:h-full before:bg-gray-900 before:opacity-[.70]"></div>
                <img src="/images/sergipe.jpg" alt="Sergipe" class="w-full object-cover">
            </div>

            <div class="max-w-[1200px] mx-auto absolute -bottom-4 left-0 right-0">
                <Breadcrumb :breadcrumbs="[
                    { name: 'Início', href: '/' },
                    { name: 'Bens Tombados', href: '/bens-tombados' },
                    { name: 'Imóvel sito à Rua Barão do Rio Branco esquina com Rua Barão dos Campos Gerais - Lapa' }
                ]" />
            </div>
        </section>

        <section class="max-w-[1200px] mx-auto">
            <div class="flex items-center gap-4 my-4 relative before:content-[''] before:absolute before:w-4 before:top-0 before:bottom-0 before:bg-[#2570e9]">
                <h1 class="text-4xl font-bold ml-8 text-gray-800">Imóvel sito à Rua Barão do Rio Branco esquina com Rua Barão dos Campos Gerais - Lapa</h1>
            </div>

            <p class="mt-6 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse et earum nemo mollitia. Dolorem, assumenda quae iure ipsa dolore eligendi laborum eius excepturi dolores, nulla nostrum suscipit minima officia doloremque nihil ipsum placeat tempora. Laborum, natus laudantium hic voluptate sunt molestiae aperiam id veritatis eos?</p>

            <div class="grid grid-cols-2 items-center gap-4 mt-10">
                <img src="/images/sergipe.jpg" alt="Sergipe" class="w-full object-cover rounded-md">

                <div class="space-y-2">
                    <p>
                        <strong>Inscrição:</strong>
                        <span class="text-gray-700 ml-2">123456</span>
                    </p>

                    <p>
                        <strong>Processo:</strong>
                        <span class="text-gray-700 ml-2">123456</span>
                    </p>

                    <p>
                        <strong>Data da Inscrição:</strong>
                        <span class="text-gray-700 ml-2">
                            29 de setembro de 2021
                        </span>
                    </p>

                    <p>
                        <strong>Localização</strong>
                        <span class="text-gray-700 ml-2">
                            Rua Barão do Rio Branco esquina com Rua Barão dos Campos Gerais - Lapa
                        </span>
                    </p>

                    <p>
                        <strong>Proprietário:</strong>
                        <span class="text-gray-700 ml-2">
                            Fulano de Tal
                        </span>
                    </p>

                    <p>
                        <strong>Outras denominações:</strong>
                        <span class="text-gray-700 ml-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique est.
                        </span>
                    </p>
                </div>
            </div>

            <!-- Histórico -->
            <div class="flex items-center gap-4 mt-16 relative before:content-[''] before:absolute before:w-4 before:top-0 before:bottom-0 before:bg-[#2570e9]">
                <img src="/images/historico.png" alt="historico" class="size-14 ml-8">
                <div class="flex flex-col">
                    <h2 class="text-3xl font-bold">Histórico</h2>
                    <p class="text-gray-700"> Descritivo do histórico do imóvel </p>
                </div>
            </div>

            <p class="mt-8 text-gray-950">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, dicta natus. Facere inventore itaque iusto nulla reprehenderit sapiente, officia obcaecati, illum commodi atque quia, nesciunt totam fugit asperiores alias unde cum eveniet natus odit! Soluta quis nihil facilis voluptatem neque labore, eligendi expedita sunt reiciendis architecto nemo laboriosam, dolores aspernatur saepe iste assumenda optio aperiam autem asperiores dolorem delectus officiis facere. Porro, vero praesentium libero voluptas vel laboriosam rem quia provident natus ea optio, dolore est sunt accusamus enim et tenetur eligendi ut sequi. Soluta possimus ducimus maiores laudantium consectetur totam excepturi commodi illum quisquam id facere, necessitatibus inventore consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis accusantium consequuntur fugit exercitationem magnam maxime sed omnis, ipsam sint commodi obcaecati nihil? Maxime ratione error nobis omnis, cupiditate consectetur. Minima accusantium hic, aliquam exercitationem nisi cumque culpa delectus ipsum illum placeat nostrum totam numquam consectetur debitis asperiores aspernatur similique magnam fugiat deserunt blanditiis dolorem quos doloribus? Vero, expedita quo delectus sed repellendus harum inventore magni esse ut cupiditate omnis ex quidem amet architecto nam, fuga saepe tempora in ratione quibusdam fugit. Similique, explicabo. Voluptatum aliquid repudiandae totam voluptatibus hic nemo vero provident distinctio quis possimus neque voluptas, dignissimos culpa unde.</p>


            <!-- Imagens -->
            <div class="flex items-center gap-4 mt-16 relative before:content-[''] before:absolute before:w-4 before:top-0 before:bottom-0 before:bg-[#2570e9]">
                <img src="/images/imagens.png" alt="imagens" class="size-14 ml-8">
                <div class="flex flex-col">
                    <h2 class="text-3xl font-bold">Galeria de imagens</h2>
                    <p class="text-gray-700"> Imagens do imóvel </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mt-8">
                <img src="/images/sergipe.jpg" alt="Sergipe" class="w-full object-cover rounded-md">
                <img src="/images/sergipe.jpg" alt="Sergipe" class="w-full object-cover rounded-md">
                <img src="/images/sergipe.jpg" alt="Sergipe" class="w-full object-cover rounded-md">
                <img src="/images/sergipe.jpg" alt="Sergipe" class="w-full object-cover rounded-md">
                <img src="/images/sergipe.jpg" alt="Sergipe" class="w-full object-cover rounded-md">
                <img src="/images/sergipe.jpg" alt="Sergipe" class="w-full object-cover rounded-md">
            </div>


            <!-- Localização -->
            <div class="flex items-center gap-4 mt-16 relative before:content-[''] before:absolute before:w-4 before:top-0 before:bottom-0 before:bg-[#2570e9]">
                <img src="/images/mapa.png" alt="localizacao" class="size-14 ml-8">
                <div class="flex flex-col">
                    <h2 class="text-3xl font-bold">Localização</h2>
                    <p class="text-gray-700"> Localização do imóvel </p>
                </div>
            </div>

            <div class="mt-4 mb-20">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13177.44938397573!2d-37.14887063068724!3d-10.911971291659704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71aad1ef9bb31b7%3A0x1e98a071ffee543b!2sSupermercado%20Britense!5e0!3m2!1spt-BR!2sbr!4v1740764146592!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    width="100%"
                    height="450"
                ></iframe>
            </div>
        </section>

    </Layout>
</template>
