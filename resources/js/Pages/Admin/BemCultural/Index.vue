<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import BemCulturalCard from '@/Components/Ui/Cards/BemCulturalCard.vue';
    import Pagination from '@/Components/Navigation/Pagination.vue';
    import { ref } from 'vue';

    const { bensCulturais, categorias } = defineProps(['bensCulturais', 'categorias']);
    const showModal = ref(true);
    const closeModal = () => showModal.value = false;
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
                v-for="bemCultural in bensCulturais.data"
                :key="bemCultural.id"
                :bemCultural="bemCultural"
            />
        </div>

        <div class="mt-10">
            <Pagination :pagination="bensCulturais" />
        </div>
    </AdminLayout>


    <!-- modal -->
    <div
        v-if="showModal"
        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm z-50 left-0 top-0 flex justify-center items-center"
        @click="closeModal"
    >
        <div
            class="w-[1000px] max-w-[90%] max-h-[90vh] overflow-y-auto bg-white h-fit p-8 rounded-lg relative"
            onclick="event.stopPropagation()"
        >
            <button
                class="absolute top-6 right-6 py-1 px-3 bg-red-500 text-white rounded-md shadow-md hover:bg-red-600 transition duration-300"
                @click="closeModal"
            >
                <i class="fas fa-times  text-2xl"></i>
            </button>

            <h2 class="text-3xl font-bold">Cristo Redentor</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, vitae?</p>

            <div
                class="grid grid-cols-1 md:grid-cols-2 items-center gap-4 mt-4 bg-gray-200 p-4 rounded-lg shadow-md border border-gray-400/20"
            >
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

            <div class="flex items-center gap-4 mt-4">
                <span class="inline-block bg-blue-100 text-blue-800 font-semibold text-xs px-4 py-1 rounded-full">
                    Patrimônio Material
                </span>

                <span
                    class='bg-green-100 text-green-800 inline-block font-semibold text-xs px-4 py-1 rounded-full'
                >
                    Ativo
                </span>
            </div>

            <div class="flex items-center gap-6 mt-4">
                <button class="bg-yellow-400 text-yellow-700 w-1/2 py-1 rounded-md font-bold text-sm border border-yellow-500">
                    <i class="fas fa-edit"></i> Editar
                </button>

                <button
                    class="bg-red-300 text-red-800 w-1/2 py-1 rounded-md font-bold text-sm border border-red-400/60"
                >
                    <i class="fas fa-times"></i> Inativar
                </button>
            </div>
        </div>
    </div>
</template>
