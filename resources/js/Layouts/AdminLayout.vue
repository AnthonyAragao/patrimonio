<template>
    <header
        class="px-6 py-2 flex justify-between items-center bg-gray-100 border-b border-gray-100 shadow-md fixed top-0 left-0 right-0 z-20"
    >
        <h1 class="flex flex-col tracking-[.4rem] text-base font-bold uppercase text-gray-800 z-10">
            <span>patrimônio</span>
            <span>cultural</span>
            <span class="font-normal">sergipe</span>
        </h1>

        <button
            type="submit"
            class="bg-red-600 text-white px-4 py-1 rounded-md shadow-md font-bold hover:bg-red-700 transition duration-300"
        >
            <i class="fas fa-sign-out-alt"></i> Sair
        </button>
    </header>

    <main class="px-6 py-32">
        <slot></slot>
    </main>
</template>
