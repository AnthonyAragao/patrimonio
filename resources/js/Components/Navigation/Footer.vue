<template>
    <footer class="bg-gray-900 relative overflow-hidden
        after:content-[''] after:absolute after:w-full after:h-2 after:bg-[#2570e9] after:top-0
    ">
        <div class="max-w-[1200px] mx-auto py-8 px-2 flex justify-between items-center
            after:content-[''] after:absolute after:size-24 after:rounded-full after:bg-[#2570e9] after:-top-14 after:-left-14
            before:content-[''] before:absolute before:size-24 before:rounded-full before:bg-[#2570e9] before:-bottom-20 before:-right-14
        ">
            <h2 class="text-white text-2xl font-bold uppercase tracking-[.4rem] flex flex-col gap-1">
                <span>patrimônio</span>
                <span>cultural</span>
                <span class="font-normal">sergipe</span>
            </h2>

            <ul class="flex flex-col gap-1 text-white font-medium text-sm">
                <li> <a href="">Início</a> </li>
                <li> <a href="">Acervo</a> </li>
                <li> <a href="">Patrimônio Cultural</a></li>
                <li> <a href="">Bens tombados</a> </li>
                <li> <a href="">Fale conosco</a> </li>
            </ul>

            <ul class="flex flex-col text-white font-medium text-sm text-center">
                <li> <a href="">Política de privacidade</a> </li>
                <li> <a href="">Termos de uso</a> </li>
            </ul>

            <ul class="flex flex-col text-white  space-y-4 text-sm">
                <li class="flex items-center gap-2">
                    <img src="/images/facebook.png" alt="Facebook" class="size-6"> <a href="">Facebook</a>
                </li>
                <li class="flex items-center gap-2">
                    <img src="/images/instagram.png" alt="Instagram" class="size-6"> <a href="">Instagram</a>
                </li>

                <li class="flex items-start gap-2">
                    <img src="/images/mapa.png" alt="Mapa" class="size-6">
                    <div class="flex flex-col">
                        <span>Rua Irineu Silvente Santos</span>
                        <span>Aracaju - SE, 49015-190</span>
                    </div>
                </li>
            </ul>
        </div>
    </footer>
</template>
