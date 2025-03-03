<script setup>
    import MinutoPatrimonio from '@/Components/Patrimonio/MinutoPatrimonio.vue';
</script>

<template>
    <section class="relative mb-60">
        <div class="w-full h-[900px] overflow-hidden -mt-36 rounded-b-[30%] relative">
            <div class="before:content-[''] before:absolute before:rounded-b-[30%] before:w-full before:h-full before:bg-gray-900 before:opacity-[.70]"></div>

            <img src="/images/sergipe.jpg" alt="Sergipe" class="w-full object-cover">

            <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center">
                <h1 class="text-4xl font-bold">Patrimônio Cultural de Sergipe</h1>
                <p class="text-lg mt-2 font-medium">Explore a riqueza cultural, história e tradições que moldam nossa identidade.</p>
            </div>
        </div>

        <MinutoPatrimonio />
    </section>
</template>
