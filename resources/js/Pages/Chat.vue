<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>
    
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Chat
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex" style="min-height: 400px; max-height: 400px;">
                    <div class="w-3/12 bg-gray-200 bg-opacity-25 border-r border-gray-200 overflow-y-scroll">
                        <ul>
                            <li
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">thiago
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>
                            <li
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">thiago
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>
                            <li
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">thiago
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>
                            <li
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">thiago
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>
                            <li
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">thiago
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>

                            <li
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">testes
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>

                            <li
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">profile
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- caixa de mensagem -->
                    <div class="w-9/12 flex flex-col justify-between">
                        <!-- mensagem -->
                        <div class="w-full p-6 flex flex-col  overflow-y-scroll">
                            <div class="w-full mb-3 text-right">
                                <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                    ol??dddd
                                </p>
                                <span class="block mt-1 text-xs text-gray-500">21/10/2022 18:33</span>
                            </div>

                            <div class="w-full mb-3">
                                <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                    ol??dddd
                                </p>
                                <span class="block mt-1 text-xs text-gray-500">21/10/2022 18:33</span>
                            </div>
                            <div class="w-full mb-3 text-right">
                                <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                    ol??dddd
                                </p>
                                <span class="block mt-1 text-xs text-gray-500">21/10/2022 18:33</span>
                            </div>

                            <div class="w-full mb-3">
                                <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                    ol??dddd
                                </p>
                                <span class="block mt-1 text-xs text-gray-500">21/10/2022 18:33</span>
                            </div>
                            <div class="w-full mb-3 text-right">
                                <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                    ol??dddd
                                </p>
                                <span class="block mt-1 text-xs text-gray-500">21/10/2022 18:33</span>
                            </div>

                            <div class="w-full mb-3">
                                <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                    ol??dddd
                                </p>
                                <span class="block mt-1 text-xs text-gray-500">21/10/2022 18:33</span>
                            </div>
                            <div class="w-full mb-3 text-right">
                                <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                    ol??dddd
                                </p>
                                <span class="block mt-1 text-xs text-gray-500">21/10/2022 18:33</span>
                            </div>

                            <div class="w-full mb-3">
                                <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                    ol??dddd
                                </p>
                                <span class="block mt-1 text-xs text-gray-500">21/10/2022 18:33</span>
                            </div>

                        </div>
                        <div class="w-full bg-gray-200 bg-opacity-25 p-6 border-t border-gray-200">
                            <form>
                                <div class="flex rounded-sm overflow-hidden border border-gray-300">
                                    <input type="text" class="flex-1 px-4 py-2 text-sm focus:outline-none">
                                    <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2">
                                        Enviar
                                    </button>
                                </div>
                               
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style>
.messageFromMe {
    @apply bg-indigo-300 bg-opacity-25
}

.messageToMe {
    @apply bg-gray-300 bg-opacity-25
}
</style>
    