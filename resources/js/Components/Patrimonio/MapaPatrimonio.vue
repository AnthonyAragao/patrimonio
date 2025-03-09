<script setup>
    import L from 'leaflet';
    import 'leaflet/dist/leaflet.css';
    import { ref, onMounted } from 'vue';

    const map               = ref(null);
    const patrimonioMarkers = ref([]);

    const initMap = () => {
        map.value = L.map('map').setView([-10.9472, -37.0731], 8);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map.value);
    };

    const loadPatrimonios = () => {
        const patrimonios = [
            { id: 1, nome: 'Museu do Homem Sergipano', latitude: -10.9472, longitude: -37.0731 },
            { id: 2, nome: 'Praça Fausto Cardoso', latitude: -10.9167, longitude: -37.0500 },
            { id: 3, nome: 'Museu da Gente Sergipana', latitude: -10.9106, longitude: -37.0513 },
            { id: 4, nome: 'Palácio Museu Olímpio Campos', latitude: -10.9095, longitude: -37.0512 },
            { id: 5, nome: 'Igreja São Salvador', latitude: -10.9162, longitude: -37.0537 },
            { id: 6, nome: 'Mercado Municipal Antônio Franco', latitude: -10.9120, longitude: -37.0517 },
            { id: 7, nome: 'Orla de Atalaia', latitude: -10.9847, longitude: -37.0502 },
            { id: 8, nome: 'Centro Histórico de São Cristóvão', latitude: -11.0111, longitude: -37.2073 },
            { id: 9, nome: 'Igreja e Convento de São Francisco', latitude: -11.0125, longitude: -37.2081 },
            { id: 10, nome: 'Museu Histórico de Sergipe', latitude: -11.0110, longitude: -37.2075 },
            { id: 11, nome: 'Praça São Francisco', latitude: -11.0111, longitude: -37.2079 },
            { id: 12, nome: 'Cidade de Laranjeiras - Centro Histórico', latitude: -10.7983, longitude: -37.1736 },
            { id: 13, nome: 'Igreja Matriz Sagrado Coração de Jesus (Laranjeiras)', latitude: -10.7988, longitude: -37.1752 },
            { id: 14, nome: 'Museu de Arte Sacra de Laranjeiras', latitude: -10.7985, longitude: -37.1740 },
            { id: 15, nome: 'Igreja do Senhor do Bonfim (Laranjeiras)', latitude: -10.7967, longitude: -37.1725 },
            { id: 16, nome: 'Ilha de São Pedro', latitude: -10.9921, longitude: -36.9806 },
            { id: 17, nome: 'Cânion do Xingó', latitude: -9.6275, longitude: -37.6842 },
            { id: 18, nome: 'Museu Arqueológico de Xingó', latitude: -9.7438, longitude: -37.7942 },
            { id: 19, nome: 'Forte de São José de Itaporanga', latitude: -10.9923, longitude: -37.3207 },
            { id: 20, nome: 'Parque Nacional Serra de Itabaiana', latitude: -10.6833, longitude: -37.4167 }
        ];

        patrimonios.forEach(patrimonio => {
            const marker = L.marker([patrimonio.latitude, patrimonio.longitude]).addTo(map.value);

            marker.bindPopup(`
                <b>${patrimonio.nome}</b><br>
                <a href="#" class="ver-detalhes" data-id="${patrimonio.id}">Ver detalhes</a>
            `);

            marker.on('popupopen', () => {
                document.querySelector(`.ver-detalhes[data-id="${patrimonio.id}"]`).addEventListener('click', (e) => {
                    e.preventDefault();
                    window.location.href = `/detalhes/${patrimonio.id}`;
                });
            });

            patrimonioMarkers.value.push(marker);
        });
    };

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
