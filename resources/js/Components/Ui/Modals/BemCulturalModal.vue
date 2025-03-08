<script setup>
    const { bemCultural } = defineProps(['bemCultural']);
</script>

<template>
    <div
        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm z-50 left-0 top-0 flex justify-center items-center"
        @click="$emit('close')"
    >
        <div
            class="w-[1000px] max-w-[90%] max-h-[90vh] overflow-y-auto bg-white h-fit p-8 rounded-lg relative"
            @click.stop
        >
            <button
                class="absolute top-6 right-6 py-1 px-3 bg-red-500 text-white rounded-md shadow-md hover:bg-red-600 transition duration-300"
                @click="$emit('close')"
            >
                <i class="fas fa-times text-2xl"></i>
            </button>

            <h2 class="text-3xl font-bold">{{ bemCultural.nome }}</h2>
            <p class="text-gray-700 mt-2">{{ bemCultural.descricao }}</p>

            <div
                class="grid grid-cols-1 md:grid-cols-2 items-center gap-4 mt-4 bg-gray-200 p-4 rounded-lg shadow-md border border-gray-400/20"
            >
                <img src="/images/sergipe.jpg" alt="Imagem" class="w-full object-cover rounded-md">
                <div class="space-y-2">
                    <p>
                        <strong>Inscrição:</strong>
                        <span class="text-gray-700 ml-2">{{ bemCultural.processo }}</span>
                    </p>
                    <p>
                        <strong>Processo:</strong>
                        <span class="text-gray-700 ml-2">{{ bemCultural.processo }}</span>
                    </p>
                    <p>
                        <strong>Data da Inscrição:</strong>
                        <span class="text-gray-700 ml-2">{{ bemCultural.data_inscricao }}</span>
                    </p>
                    <p>
                        <strong>Localização:</strong>
                        <span class="text-gray-700 ml-2">{{ bemCultural.localizacao.endereco }}, {{ bemCultural.localizacao.cidade }}</span>
                    </p>
                    <p>
                        <strong>Proprietário:</strong>
                        <span class="text-gray-700 ml-2">{{ bemCultural.proprietario }}</span>
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
                    {{ bemCultural.categoria.nome }}
                </span>

                <span
                    :class="bemCultural.ativo ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'"
                    class="inline-block font-semibold text-xs px-4 py-1 rounded-full"
                >
                    {{ bemCultural.ativo ? 'Ativo' : 'Inativo' }}
                </span>
            </div>

            <div class="flex items-center gap-6 mt-4">
                <button class="bg-yellow-400 text-yellow-700 w-1/2 py-1 rounded-md font-bold text-sm border border-yellow-500">
                    <i class="fas fa-edit"></i> Editar
                </button>
                <button class="bg-red-300 text-red-800 w-1/2 py-1 rounded-md font-bold text-sm border border-red-400">
                    <i class="fas fa-times"></i> Inativar
                </button>
            </div>
        </div>
    </div>
</template>

