<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";
import Authenticated from "@/Layouts/Authenticated.vue";
import BoardNameForm from "@/Components/BoardNameForm.vue";
</script>

<template>
    <Authenticated>
        <div class="flex flex-col h-full">
            <div class="shrink-0 flex justify-between items-center p-4">
                <BoardNameForm :board="board" />
                <div>
                    <button
                        class="inline-flex items-center bg-white-50/10 hover:bg-white-50/20 px-3 py-2 font-medium text-sm text-white-50 rounded-md gap-2"
                    >
                        <div class="flex justify-center items-center gap-1">
                            <span
                                class="w-1 h-1 bg-white-50 rounded-full"
                            ></span>
                            <span
                                class="w-1 h-1 bg-white-50 rounded-full"
                            ></span>
                            <span
                                class="w-1 h-1 bg-white-50 rounded-full"
                            ></span>
                        </div>
                        <span class="ml-1">Settings</span>
                    </button>
                </div>
            </div>
            <div class="flex-1 overflow-x-auto">
                <div class="inline-flex h-full items-start px-4 pb-4 space-x-4">
                    <div
                        v-for="item in Array.from({ length: 3 })"
                        class="w-72 bg-gray-200 max-h-full flex flex-col rounded-md"
                    >
                        <div
                            class="flex items-center justify-between px-3 py-2"
                        >
                            <h3 class="text-sm font-semibold text-gray-700">
                                Backlog
                            </h3>
                            <Menu as="div" class="relative z-10">
                                <MenuButton
                                    class="hover:bg-gray-300 w-8 h-8 rounded-md grid place-content-center"
                                >
                                    <div
                                        class="flex justify-center items-center gap-1"
                                    >
                                        <span
                                            class="w-1 h-1 bg-black-700 rounded-full"
                                        ></span>
                                        <span
                                            class="w-1 h-1 bg-black-700 rounded-full"
                                        ></span>
                                        <span
                                            class="w-1 h-1 bg-black-700 rounded-full"
                                        ></span>
                                    </div>
                                </MenuButton>
                                <transition
                                    enter-active-class="transition transform duration-100 ease-out"
                                    enter-from-class="opacity-0 scale-90"
                                    enter-to-class="opacity-100 scale-100"
                                    leave-active-class="transition transform duration-100 ease-in"
                                    leave-from-class="opacity-100 scale-100"
                                    leave-to-class="opacity-0 scale-90"
                                >
                                    <MenuItems
                                        class="origin-top-left mt-2 focus:outline-none absolute left-0 bg-white-50 overflow-hidden rounded-md shadow-lg border w-40"
                                    >
                                        <MenuItem v-slot="{ active }">
                                            <a
                                                href="#"
                                                :class="{
                                                    'bg-gray-100': active,
                                                }"
                                                class="block px-4 py-2 text-sm text-gray-700"
                                            >
                                                Add card
                                            </a>
                                        </MenuItem>
                                        <MenuItem v-slot="{ active }">
                                            <a
                                                href="#"
                                                :class="{
                                                    'bg-gray-100': active,
                                                }"
                                                class="block px-4 py-2 text-sm text-red-600"
                                            >
                                                Delete list
                                            </a>
                                        </MenuItem>
                                    </MenuItems>
                                </transition>
                            </Menu>
                        </div>
                        <div class="pb-3 flex flex-col overflow-hidden">
                            <div class="px-3 flex-1 overflow-y-auto">
                                <ul class="space-y-3">
                                    <li
                                        v-for="item in Array.from({
                                            length: 7,
                                        })"
                                        class="group relative bg-white-50 p-3 shadow rounded-md border-b border-gray-300 hover:bg-gray-50"
                                    >
                                        <a href="#" class="text-sm">
                                            card item
                                        </a>
                                        <button
                                            class="hidden absolute top-1 right-1 w-8 h-8 bg-gray-50 group-hover:grid place-content-center rounded-md text-gray-600 hover:text-black hover:bg-gray-200"
                                        >
                                            <span class="w-5 h-5">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        d="M15.7279 9.57627L14.3137 8.16206L5 17.4758V18.89H6.41421L15.7279 9.57627ZM17.1421 8.16206L18.5563 6.74785L17.1421 5.33363L15.7279 6.74785L17.1421 8.16206ZM7.24264 20.89H3V16.6473L16.435 3.21231C16.8256 2.82179 17.4587 2.82179 17.8492 3.21231L20.6777 6.04074C21.0682 6.43126 21.0682 7.06443 20.6777 7.45495L7.24264 20.89Z"
                                                    ></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </li>
                                    <li
                                        class="group relative bg-white-50 p-3 shadow rounded-md border-b border-gray-300 hover:bg-gray-50"
                                    >
                                        <a href="#" class="text-sm">
                                            card item
                                        </a>
                                        <button
                                            class="hidden absolute top-1 right-1 w-8 h-8 bg-gray-50 group-hover:grid place-content-center rounded-md text-gray-600 hover:text-black hover:bg-gray-200"
                                        >
                                            <span class="w-5 h-5">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        d="M15.7279 9.57627L14.3137 8.16206L5 17.4758V18.89H6.41421L15.7279 9.57627ZM17.1421 8.16206L18.5563 6.74785L17.1421 5.33363L15.7279 6.74785L17.1421 8.16206ZM7.24264 20.89H3V16.6473L16.435 3.21231C16.8256 2.82179 17.4587 2.82179 17.8492 3.21231L20.6777 6.04074C21.0682 6.43126 21.0682 7.06443 20.6777 7.45495L7.24264 20.89Z"
                                                    ></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="px-3 mt-3">
                                <button
                                    class="flex items-center p-2 text-sm font-medium text-gray-600 hover:text-black hover:bg-gray-300 w-full rounded-md"
                                >
                                    <span class="w-5 h-5">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"
                                            ></path>
                                        </svg>
                                    </span>
                                    <span class="ml-1">Add card</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-72">
                        <button
                            class="flex items-center bg-white-50/10 w-full hover:bg-white-50/20 text-white-50 p-2 text-sm font-medium rounded-md"
                        >
                            <span class="w-5 h-5">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"
                                    ></path>
                                </svg>
                            </span>
                            <span class="ml-1">Add another list</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </Authenticated>
</template>
