<template>
    <!-- component -->
    <header>
        <nav class="bg-white border-b-2 border-[#FDB747] px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="/" class="flex items-center">
                    <img src="../../assets/notext.png" class="w-12" alt="Actievadis Logo"/>
                    <span
                        class="self-center text-xl font-semibold whitespace-nowrap dark:text-gray-300 ml-2">Actievadis</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <p class="mr-5 text-slate-300 font-bold">{{ user }}</p>
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
                                        <a href="/login"
                                           :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                                           'block px-4 py-2 text-sm']">Log in</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                        <a href="/registreer"
                                           :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                                           'block px-4 py-2 text-sm']">Registreer</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                        <a href="/account"
                                           :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                                           'block px-4 py-2 text-sm']">Account</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                        <a href="/controlpanel/admin/home"
                                           :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                                           'block px-4 py-2 text-sm']">Admin</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }" hidden>
                                        <a href="/signout" hidden
                                           :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700',
                                           'block px-4 py-2 text-sm']">Log uit</a>
                                    </MenuItem>
                                </div>
                            </MenuItems>
                        </transition>
                    </Menu>

                    <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>
</template>

<script setup>
import {Menu, MenuButton, MenuItem, MenuItems} from '@headlessui/vue'
</script>

<script>
export default {
    data() {
        return {
            user: window.user,
        }
    },
    methods: {},
    created() {
    }
}
</script>
