<template>
    <header class="max-w-[1200px] mx-auto py-8 px-2 flex justify-between items-center">
        <h1 class="flex flex-col tracking-[.4rem] text-base font-bold uppercase text-white z-10">
            <span>patrimônio</span>
            <span>cultural</span>
            <span class="font-normal">sergipe</span>
        </h1>

        <nav>
            <ul class="flex space-x-6 text-white font-medium ">
                <li> <a href="">Início</a> </li>
                <li> <a href="">Acervo</a> </li>
                <li> <a href="">Patrimônio Cultural</a></li>
                <li> <a href="">Bens tombados</a> </li>
                <li> <a href="">Fale conosco</a> </li>
            </ul>
        </nav>
    </header>
</template>


<style scoped>
    li{
        position: relative;
    }

    a{
        position: relative;
        z-index: 10;
    }

    a::before {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background-color: #0E4194;
        bottom: -4px;
        transition: all .3s;
    }

    a:hover::before {
        width: 100%;
    }
</style>
