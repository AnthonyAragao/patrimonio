<script setup>
    const { pagination } = defineProps(["pagination" ]);
</script>

<template>
    <nav class="space-x-1">
        <template v-for="(link, index) in pagination.links" :key="index">
            <!-- Previous Button -->
            <Link
                v-if="link.label.includes('Previous')"
                :href="link.url"
                preserve-scroll
                class="px-4 py-2 text-sm font-bold rounded-lg text-gray-500 border border-gray-300 cursor-default transition duration-150"
                :class="{
                    'hover:bg-blue-600 hover:text-white hover:border-blue-600 cursor-pointer': link.url !== null,
                }"
            >
                Anterior
            </Link>

            <!-- Next Button -->
            <Link
                v-if="link.label.includes('Next')"
                :href="link.url"
                preserve-scroll
                class="px-4 py-2 text-sm font-bold rounded-lg text-gray-500 border border-gray-300 cursor-default transition duration-150"
                :class="{
                    [`hover:bg-blue-600 hover:text-white hover:border-blue-bg-blue-600 cursor-pointer`]: link.url !== null,
                }"
            >
                Próximo
            </Link>

            <!-- Numbered Links -->
            <Link
                v-if="!link.label.includes('Previous') && !link.label.includes('Next')"
                :href="link.url"
                preserve-scroll
                class="px-4 py-2 text-sm font-bold rounded-lg text-gray-700"
                :class="{
                    [`hover:bg-blue-600 hover:text-white`]: !link.active,
                    [`bg-blue-600 text-white`]: link.active,
                }"
            >
                {{ link.label }}
            </Link>
        </template>
    </nav>
</template>
