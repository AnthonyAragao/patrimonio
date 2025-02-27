<script setup>
    import Layout from '@/Layouts/Layout.vue';
    import { Swiper, SwiperSlide } from "swiper/vue";
    import { Autoplay, Navigation  } from "swiper/modules";
    import "swiper/css";
    import "swiper/css/navigation";

    const banners = [
        '/images/sergipe.jpg',
        '/images/sergipe.jpg',
        '/images/sergipe.jpg',
        '/images/sergipe.jpg',
        '/images/sergipe.jpg',
    ];
</script>

<template>
    <Layout>
        <div class="w-full h-[900px] overflow-hidden -mt-36 rounded-b-[30%] relative">
            <div class="before:content-[''] before:absolute before:rounded-b-[30%] before:w-full before:h-full before:bg-gray-900 before:opacity-[.70]"></div>
            <img src="/images/sergipe.jpg" alt="Sergipe" class="w-full object-cover">

            <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center">
                <h1 class="text-4xl font-bold">Patrimônio Cultural de Sergipe</h1>
                <p class="text-lg mt-2 font-medium">Conheça o acervo de bens tombados do estado</p>
            </div>
        </div>


        <div class="max-w-[1200px] mx-auto space-x-6 relative -top-60">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-4 mb-4">
                    <img src="/images/casa.png" alt="casa" class="size-20">

                    <div>
                        <h2 class="uppercase text-white text-2xl font-bold">Minuto Patrimônio</h2>
                        <p class="text-white mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique est.
                        </p>
                    </div>
                </div>

                <a
                    href=""
                    class="text-white font-bold rounded-full px-10 py-4 bg-transparent border-2 uppercase text-sm border-white flex items-center gap-2 hover:bg-blue-600 hover:border-blue-600 transition-all duration-300 ease-in-out"
                >
                    visualizar todos
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <Swiper
                :modules="[Autoplay, Navigation]"
                :slides-per-view="3"
                :space-between="30"
                :loop="true"
                :autoplay="{ delay: 10000, disableOnInteraction: false }"
                navigation
                class="w-full h-fit mb-10 relative"
            >
                <SwiperSlide v-for="(banner, index) in banners" :key="index">
                    <a href="">
                        <img
                            :src="banner"
                            :alt="'Banner ' + (index + 1)"
                            class="w-full object-cover rounded-md"
                        />

                        <p class="text-center text-black mt-2 font-bold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique est, consequatur animi ad dignissimos excepturi.
                        </p>
                    </a>
                </SwiperSlide>
            </Swiper>
        </div>

    </Layout>
</template>


