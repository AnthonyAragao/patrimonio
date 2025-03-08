<script setup>
    import L from 'leaflet';
    import 'leaflet/dist/leaflet.css';
    import { ref, onMounted } from 'vue';

    const map = ref(null);
    const patrimonioMarkers = ref([]);

    const initMap = () => {
        map.value = L.map('map').setView([-10.9472, -37.0731], 8); // Usando map.value em vez de this.map

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map.value); // Adiciona a camada ao mapa
    };


    const loadPatrimonios = () => {
        const patrimonios = [
            { nome: 'Museu do Homem Sergipano', latitude: -10.9472, longitude: -37.0731 },
            { nome: 'Praça Fausto Cardoso', latitude: -10.9167, longitude: -37.0500 },
        ];

        patrimonios.forEach(patrimonio => {
            const marker = L.marker([patrimonio.latitude, patrimonio.longitude]).addTo(map.value); // Usando map.value
            marker.bindPopup(patrimonio.nome);
            patrimonioMarkers.value.push(marker); // Usando patrimonioMarkers.value
        });
    };

    // Função para carregar as malhas do IBGE
    const loadMalhasIBGE = async () => {
        try {
            const response = await fetch('https://servicodados.ibge.gov.br/api/v3/malhas/estados/28?formato=application/vnd.geo+json');
            const data = await response.json();

            L.geoJSON(data, {
                style: {
                    color: '#3388ff',
                    weight: 2,
                    fillOpacity: 0.1,
                },
            }).addTo(map.value);
        } catch (error) {
            console.error('Erro ao carregar as malhas do IBGE:', error);
        }
    };

    onMounted(() => {
        initMap();
        loadPatrimonios();
        loadMalhasIBGE();
    });
</script>

<template>
    <div id="map" style="height: 600px;"></div>
</template>
