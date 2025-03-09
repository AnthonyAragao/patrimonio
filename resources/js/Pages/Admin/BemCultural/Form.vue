<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import L from 'leaflet';
    import 'leaflet/dist/leaflet.css';
    import { ref, onMounted } from 'vue';

    const { categorias } = defineProps(['categorias']);
    const imagens        = ref([]);
    const map            = ref(null);
    let marker           = null;

    const patrimonio = ref({
        nome: '',
        descricao: '',
        processo: '',
        proprietario: '',
        historico: '',
        categoria_id: null,
        ativo: true,
    });

    const localizacao = ref({
        logradouro: '',
        numero: '',
        bairro: '',
        cidade: '',
        estado: '',
        cep: '',
        referencia_geografica: '',
        latitude: null,
        longitude: null,
    });

    const initMap = () => {
        map.value = L.map('map').setView([-10.9472, -37.0731], 8);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map.value);

        // Captura a localização ao clicar no mapa
        map.value.on('click', (event) => {
            const { lat, lng } = event.latlng;
            localizacao.value.latitude = lat;
            localizacao.value.longitude = lng;

            // Adiciona um marcador no mapa
            if (marker) {
                marker.setLatLng(event.latlng);
            } else {
                marker = L.marker(event.latlng).addTo(map.value);
            }
        });
    };

    // Busca endereço por CEP (usando ViaCEP)
    const buscarCoordenadas = async () => {
        const endereco = `${localizacao.value.logradouro}, ${localizacao.value.numero}, ${localizacao.value.bairro}, ${localizacao.value.cidade}, ${localizacao.value.estado}`;
        try {
            const response = await fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(endereco)}`);
            const data = await response.json();
            if (data.length > 0) {
                const { lat, lon } = data[0];
                localizacao.value.latitude = parseFloat(lat);
                localizacao.value.longitude = parseFloat(lon);

                // Atualiza o mapa
                map.value.setView([lat, lon], 15);
                if (marker) {
                    marker.setLatLng([lat, lon]);
                } else {
                    marker = L.marker([lat, lon]).addTo(map.value);
                }
            } else {
                alert('Endereço não encontrado.');
            }
        } catch (error) {
            console.error('Erro ao buscar coordenadas:', error);
        }
    };

    // Salva o patrimônio
    const salvarPatrimonio = async () => {
        const formData = new FormData();

        // Adiciona os dados do patrimônio
        for (const key in patrimonio.value) {
            formData.append(key, patrimonio.value[key]);
        }

        // Adiciona os dados da localização
        for (const key in localizacao.value) {
            formData.append(`localizacao[${key}]`, localizacao.value[key]);
        }

        // Adiciona as imagens
        imagens.value.forEach((imagem, index) => {
            formData.append(`imagens[${index}]`, imagem);
        });

        // Envia os dados para o backend
        try {
            const response = await fetch('/api/patrimonios', {
                method: 'POST',
                body: formData,
            });

            if (response.ok) {
                alert('Patrimônio salvo com sucesso!');
            } else {
                alert('Erro ao salvar o patrimônio.');
            }
        } catch (error) {
            console.error('Erro:', error);
        }
    };

    // Inicializa o mapa ao montar o componente
    onMounted(() => {
        initMap();
    });
</script>

<template>
    <AdminLayout>
        <div class="flex items-center gap-4">
            <i class="fas fa-arrow-left text-2xl text-blue-500 cursor-pointer" @click="$router.back()"></i>
            <h2 class="text-3xl font-bold ">Cadastrar Patrimônio Cultural</h2>
        </div>

        <form @submit.prevent="salvarPatrimonio">
            <!-- Seção: Dados do Patrimônio -->
            <div class="my-8 bg-gray-100 px-6 py-10 rounded-xl shadow-lg border border-gray-200">
                <div class="text-center space-y-8 mb-8">
                    <h3 class="text-lg font-bold uppercase">Dados do Patrimônio</h3>
                    <div class="w-full h-[2px] bg-gray-200"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="nome" class="block text-base font-bold text-gray-800">Nome:</label>
                        <input type="text" id="nome" v-model="patrimonio.nome" required placeholder="Nome do patrimônio"
                            class="px-4 py-3 w-full rounded-md border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400" />
                    </div>

                    <div>
                        <label for="processo" class="block text-base font-bold text-gray-800">Processo:</label>
                        <input type="text" id="processo" v-model="patrimonio.processo" required placeholder="Número do processo"
                            class="px-4 py-3 w-full rounded-md border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400" />
                    </div>
                    <div>
                        <label for="proprietario" class="block text-base font-bold text-gray-800">Proprietário:</label>
                        <input type="text" id="proprietario" v-model="patrimonio.proprietario" required placeholder="Nome do proprietário"
                            class="px-4 py-3 w-full rounded-md border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400" />
                    </div>
                    <div>
                        <label for="categoria" class="block text-base font-bold text-gray-800">Categoria:</label>

                        <select id="categoria" v-model="patrimonio.categoria_id" required
                            class="px-4 py-3 w-full rounded-md border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400">
                            <option value="" disabled>Selecione a categoria</option>
                            <option v-for="categoria in categorias" :key="categoria.id" :value="categoria.id">
                                {{ categoria.nome }}
                            </option>
                        </select>
                    </div>
                </div>

                <div class="mt-4">
                    <label for="descricao" class="block text-base font-bold text-gray-800">Descrição:</label>
                    <textarea id="descricao" v-model="patrimonio.descricao" required placeholder="Descrição do patrimônio"
                        class="w-full h-32 px-4 py-3 rounded-lg border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400 resize-none"></textarea>
                </div>
                <div class="mt-4">
                    <label for="historico" class="block text-base font-bold text-gray-800">Histórico:</label>
                    <textarea id="historico" v-model="patrimonio.historico" required placeholder="Histórico do patrimônio"
                        class="w-full h-32 px-4 py-3 rounded-lg border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400 resize-none"></textarea>
                </div>

                <!-- <div class="flex items-center gap-2">
                    <label for="ativo" class="block text-base font-bold text-gray-800">Status:</label>
                    <input type="checkbox" id="ativo" v-model="patrimonio.ativo"
                        class="block" />
                </div> -->
            </div>

            <!-- Seção: Localização -->
            <div class="mb-8">
                <h3 class="text-xl font-semibold mb-4">Localização</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="logradouro" class="block text-base font-bold text-gray-800">Logradouro:</label>
                        <input type="text" id="logradouro" v-model="localizacao.logradouro"
                            class="px-4 py-3 w-full rounded-md border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400" />
                    </div>
                    <div>
                        <label for="numero" class="block text-base font-bold text-gray-800">Número:</label>
                        <input type="text" id="numero" v-model="localizacao.numero"
                            class="px-4 py-3 w-full rounded-md border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400" />
                    </div>
                    <div>
                        <label for="bairro" class="block text-base font-bold text-gray-800">Bairro:</label>
                        <input type="text" id="bairro" v-model="localizacao.bairro"
                            class="px-4 py-3 w-full rounded-md border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400" />
                    </div>
                    <div>
                        <label for="cidade" class="block text-base font-bold text-gray-800">Cidade:</label>
                        <input type="text" id="cidade" v-model="localizacao.cidade" required
                            class="px-4 py-3 w-full rounded-md border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400" />
                    </div>
                    <div>
                        <label for="estado" class="block text-base font-bold text-gray-800">Estado:</label>
                        <input type="text" id="estado" v-model="localizacao.estado" required
                            class="px-4 py-3 w-full rounded-md border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400" />
                    </div>
                    <div>
                        <label for="cep" class="block text-base font-bold text-gray-800">CEP:</label>
                        <input type="text" id="cep" v-model="localizacao.cep" @blur="buscarEnderecoPorCEP"
                            class="px-4 py-3 w-full rounded-md border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400" />
                    </div>
                    <div>
                        <label for="referencia_geografica" class="block text-base font-bold text-gray-800">Referência Geográfica:</label>
                        <textarea id="referencia_geografica" v-model="localizacao.referencia_geografica"
                            class="px-4 py-3 w-full rounded-md border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400"></textarea>
                    </div>
                </div>

                <!-- Buscar Coordenadas -->
                <div class="mt-4">
                    <button type="button" @click="buscarCoordenadas"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Buscar Coordenadas
                    </button>
                    <p v-if="localizacao.latitude && localizacao.longitude" class="mt-2 text-sm text-gray-600">
                        Coordenadas: {{ localizacao.latitude }}, {{ localizacao.longitude }}
                    </p>
                </div>

                <!-- Mapa -->
                <div class="mt-4">
                    <label class="block text-base font-bold text-gray-800">Selecione a localização no mapa:</label>
                    <div id="map" class="mt-1 min-h-96 rounded-md shadow-sm"></div>
                </div>
            </div>

            <!-- Botão de Envio -->
            <div class="mt-6">
                <button type="submit"
                    class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">
                    Salvar Patrimônio
                </button>
            </div>
        </form>

    </AdminLayout>
</template>
