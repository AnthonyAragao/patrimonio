<script setup>
    const { bemCultural } = defineProps(['bemCultural']);
</script>

<template>
    <a
        href="#"
        class= "cursor-pointer min-h-[540px] rounded-md bg-white border-[1.5px] border-gray-200 relative"
    >
        <div class="h-[200px] overflow-hidden rounded-md">
            <img
                src="/images/sergipe.jpg"
                alt="Bem Cultural"
                class="w-full object-cover"
            />
        </div>

        <div class="mx-4">
            <div class="py-4">
                <h1 class="text-xl font-bold line-clamp-2">{{ bemCultural.nome }}</h1>
                <p class="text-sm mt-2 text-gray-500 line-clamp-4">{{ bemCultural.descricao }}</p>

                <div class="flex gap-2 mt-2">
                    <span class="inline-block bg-blue-100 text-blue-800 font-semibold text-xs px-4 py-1 rounded-full">
                        {{ bemCultural.categoria.nome }}
                    </span>

                    <!-- ativo -->
                    <span
                        :class="bemCultural.ativo
                            ? 'bg-green-100 text-green-800'
                            : 'bg-red-100 text-red-800'"
                        class="inline-block font-semibold text-xs px-4 py-1 rounded-full"
                    >
                        {{ bemCultural.ativo ? 'Ativo' : 'Inativo' }}
                    </span>
                </div>

                <div class="mt-4">
                    <p class="text-sm font-bold">Localização:</p>
                    <p class="text-sm text-gray-500">
                        {{ bemCultural.localizacao.endereco }}, {{ bemCultural.localizacao.cidade }}, {{ bemCultural.localizacao.estado }} - {{ bemCultural.localizacao.cep }}
                    </p>
                </div>

            </div>

            <div class="flex items-center gap-2 absolute bottom-0 left-0 right-0 p-4">
                <!-- <button class="bg-blue-300 text-blue-800 w-full py-1 rounded-md font-bold text-sm border border-blue-500">
                    <i class="fas fa-eye"></i> Visualizar
                </button> -->

                <button class="bg-yellow-400 text-yellow-700 w-full py-1 rounded-md font-bold text-sm border border-yellow-500">
                    <i class="fas fa-edit"></i> Editar
                </button>

                <button
                    v-if="bemCultural.ativo"
                    class="bg-red-300 text-red-800 w-full py-1 rounded-md font-bold text-sm border border-red-400/60"
                >
                    <i class="fas fa-times"></i> Inativar
                </button>

                <button
                    v-else
                    class="bg-green-300 text-green-800 w-full py-1 rounded-md font-bold text-sm border border-green-500/60"
                >
                    <i class="fas fa-check"></i> Ativar
                </button>
            </div>
        </div>
    </a>
</template>
