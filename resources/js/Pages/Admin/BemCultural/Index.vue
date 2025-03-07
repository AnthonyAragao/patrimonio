<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import BemCulturalCard from '@/Components/Ui/Cards/BemCulturalCard.vue';

    const { bensCulturais, categorias } = defineProps(['bensCulturais', 'categorias']);
</script>

<template>
    <AdminLayout>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold">
                    Bens Culturais
                </h1>
            </div>

            <a
                href="/admin/products/create"
                class="text-sm bg-blue-600 text-white px-4 py-2 rounded-md shadow-md font-bold hover:bg-blue-700 transition duration-300"
            >
                <i class="fas fa-plus"></i> Adicionar Bem Cultural
            </a>
        </div>

        <!-- filtros -->
        <div class="flex items-center justify-between mt-10">
            <div class="flex gap-2">
                <select
                    class="border border-gray-200 rounded-md px-4 py-2 w-72 focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent transition duration-150 ease-in-out"
                >
                    <option value="">Todos</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>

                <select
                    class="border border-gray-200 rounded-md px-4 py-2 w-72 focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent transition duration-150 ease-in-out"
                >
                    <option value="">Todas as Categorias</option>
                    <option
                        v-for="categoria in categorias"
                        :key="categoria.id"
                        :value="categoria.id"
                    >
                        {{ categoria.nome }}
                    </option>
                </select>

                <button
                    class="bg-blue-600 text-white px-4 py-2 rounded-md shadow-md font-bold hover:bg-blue-700 transition duration-300"
                >
                    <i class="fas fa-filter"></i> Filtrar
                </button>
            </div>

            <input
                type="text"
                placeholder="Pesquisar..."
                class="border border-gray-200 rounded-md px-4 py-2 w-72 focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent transition duration-150 ease-in-out"
            >
        </div>

        <div class="grid grid-cols-[repeat(auto-fit,_minmax(280px,_400px))] gap-6 mt-6">
            <BemCulturalCard
                v-for="bemCultural in bensCulturais"
                :key="bemCultural.id"
                :bemCultural="bemCultural"
            />
        </div>
    </AdminLayout>
</template>
