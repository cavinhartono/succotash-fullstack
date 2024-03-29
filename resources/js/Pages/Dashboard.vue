<script setup>
import { Head, InertiaLink, useForm } from "@inertiajs/inertia-vue3";
import Authenticated from "@/Layouts/Authenticated.vue";
import {
    Popover,
    PopoverButton,
    PopoverOverlay,
    PopoverPanel,
} from "@headlessui/vue";

const props = defineProps({
    boards: Array,
});

const form = useForm({
    name: "",
});

function onSubmit(closePopover) {
    form.post(route("dashboard.store"), {
        onSuccess: () => {
            form.reset();
            closePopover();
        },
    });
}
</script>

<template>
    <Head title="Dashboard" />
    <Authenticated>
        <div class="px-4 py-6 h-full bg-gray-50">
            <div class="mx-auto max-w-5xl">
                <div class="px-3 flex justify-between items-center mb-4">
                    <h3 class="font-black text-gray-700">My boards</h3>
                    <Popover v-slot="{ open }" class="relative">
                        <PopoverButton
                            :class="open ? 'bg-blue-50 text-blue-600' : ''"
                            class="inline-flex items-center px-3 py-2 ml-4 font-medium text-gray-700 bg-gray-100 rounded hover:bg-gray-200"
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
                            <span class="ml-1">Create board</span>
                        </PopoverButton>
                        <PopoverOverlay
                            class="z-10 bg-black-700 opacity-30 fixed inset-0"
                        />
                        <transition
                            enter-active-class="transition duration-200 ease-out"
                            enter-from-class="translate-y-1 opacity-0"
                            enter-to-class="translate-y-0 opacity-100"
                            leave-active-class="transition duration-150 ease-in"
                            leave-from-class="translate-y-0 opacity-100"
                            leave-to-class="translate-y-1 opacity-0"
                        >
                            <PopoverPanel
                                :focus="true"
                                v-slot="{ close }"
                                class="absolute z-10 w-72 px-4 mt-3 -translate-x-1/2 left-1/2 sm:px-0"
                            >
                                <div
                                    class="p-3 bg-white-50 overflow-hidden rounded-lg shadow-lg ring-1 ring-black-700 ring-opacity-5"
                                >
                                    <form @submit.prevent="onSubmit(close)">
                                        <label
                                            class="block text-sm text-gray-600 font-medium mb-1"
                                            for="name"
                                            >Your new board:</label
                                        >
                                        <input
                                            id="name"
                                            v-model="form.name"
                                            class="block w-full text-sm rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring-blue-400"
                                            name="name"
                                            placeholder="Board name"
                                            type="text"
                                        />
                                        <p
                                            v-if="form.errors.name"
                                            class="text-sm text-red-600"
                                        >
                                            {{ form.errors.name }}
                                        </p>
                                        <div class="flex justify-end mt-2">
                                            <button
                                                class="px-4 py-2 text-sm font-medium text-white-50 bg-rose-600 hover:bg-rose-500 rounded-md shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-rose-500 focus:outline-none"
                                            >
                                                Create board
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </PopoverPanel>
                        </transition>
                    </Popover>
                </div>
                <ul
                    class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"
                >
                    <li
                        v-for="board in boards"
                        :key="board.id"
                        class="relative bg-blue-600 hover:bg-blue-700 rounded-md min-h-[7rem]"
                    >
                        <InertiaLink
                            :href="route('board.show', { id: board.id })"
                            class="absolute inset-0 p-3 text-lg font-bold text-white-50"
                        >
                            {{ board.name }}
                        </InertiaLink>
                    </li>
                </ul>
            </div>
        </div>
    </Authenticated>
</template>
