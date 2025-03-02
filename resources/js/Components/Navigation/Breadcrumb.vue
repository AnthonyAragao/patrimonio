<script setup>
    const {breadcrumbs} = defineProps(["breadcrumbs"]);
</script>

<template>
    <div class="space-x-2 text-blue-600 font-semibold text-sm bg-blue-100 p-2 rounded-md w-fit">
        <Link
            v-for="(breadcrumb, index) in breadcrumbs"
            :key="index"
            :href="breadcrumb.href"
            class="space-x-2"
        >
            <i v-if="index === 0" class="fas fa-home"></i>

            <span v-if="breadcrumb.href" class="cursor-pointer hover:text-blue-900">
                {{ breadcrumb.name }}
            </span>

            <span v-if="index < breadcrumbs.length - 1">></span>

            <span
                v-if="!breadcrumb.href"
                class="text-blue-900 font-bold cursor-default"
            >
                {{ breadcrumb.name }}
            </span>
        </Link>
    </div>
</template>

