<script setup>
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
    <div class="max-w-[1200px] mx-auto absolute -bottom-48 left-0 right-0">
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
                class="text-white font-bold rounded-full px-10 py-4 border-2 uppercase text-sm border-white transition-all duration-300 ease-in-out overflow-hidden btn has-before"
            >
                <span class="flex items-center gap-2">
                    visualizar todos
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
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
            <SwiperSlide
                v-for="(banner, index) in banners"
                :key="index"
            >
                <Link href="/bens-tombados/teste">
                    <img
                        :src="banner"
                        :alt="'Banner ' + (index + 1)"
                        class="w-full object-cover rounded-md"
                    />

                    <p class="text-center text-black mt-2 font-bold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique est, consequatur animi ad dignissimos excepturi.
                    </p>
                </Link>
            </SwiperSlide>
        </Swiper>
    </div>
</template>


<style>
    .swiper-button-next,
    .swiper-button-prev {
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 50%;
        width: 60px;
        height: 60px;
        opacity: 0;
    }

    .swiper:hover .swiper-button-next,
    .swiper:hover .swiper-button-prev {
        opacity: 1!important;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: rgba(0, 0, 0, 1);
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 24px;
        color: white;
    }

    .has-before,
    .has-after {
        position: relative;
        z-index: 1;
    }

    .has-before::before,
    .has-after::after {
        position: absolute;
        content: "";
    }

    .btn::before{
        background-color: #2570e9;
        inset: 0;
        z-index: -1;
        transform: skewY(-15deg) scaleY(0);
        transition: 0.5s;
    }

    .btn:hover::before,
    .btn:focus::before{
        transform: skewY(-15deg) scaleY(3);
    }

    .btn:hover{
        border-color: #2570e9;
    }
</style>

