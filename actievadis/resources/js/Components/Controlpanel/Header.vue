<template>
    <!-- component -->
    <header>
        <nav class="bg-white border-b-2 border-[#FDB747] px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="/controlpanel/admin/home" class="flex items-center">
                    <img src="../../../assets/notext.png" class="w-12" alt="Actievadis Logo"/>
                    <span
                        class="self-center text-xl font-semibold whitespace-nowrap dark:text-gray-300 ml-2">Actievadis</span>
                </a>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700">
                        <li>
                            <a href="/controlpanel/activities/list"
                               class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Activiteiten</a>
                        </li>
                        <li>
                            <a href="/controlpanel/users/list"
                               class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Gebruikers</a>
                        </li>
                    </ul>
                </div>
                <Menu as="div" class="relative inline-block text-left dark:bg-gray-800">
                    <menuButton>
                        <div
                            class="overflow-hidden relative w-10 h-10 bg-gray-100 rounded-full dark:bg-gray-600">
                            <svg class="absolute -left-1 w-12 h-12 text-gray-400" fill="currentColor"
                                 viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </menuButton>

                    <transition enter-active-class="transition ease-out duration-100"
                                enter-from-class="transform opacity-0 scale-95"
                                enter-to-class="transform opacity-100 scale-100"
                                leave-active-class="transition ease-in duration-75"
                                leave-from-class="transform opacity-100 scale-100"
                                leave-to-class="transform opacity-0 scale-95">
                        <MenuItems
                            class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <div class="py-1">
                                <MenuItem v-slot="{ active }">
                                    <a href="/controlpanel/activities/list"
                                       :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                                           'block px-4 py-2 text-sm']">Activiteiten</a>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                    <a href="/controlpanel/users/list"
                                       :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                                           'block px-4 py-2 text-sm']">Gebruikers</a>
                                </MenuItem>
                            </div>
                        </MenuItems>
                    </transition>
                </Menu>
            </div>

        </nav>
    </header>
</template>

<script setup>
import {Menu, MenuButton, MenuItem, MenuItems} from '@headlessui/vue'
</script>
