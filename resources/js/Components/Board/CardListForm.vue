<script setup>
import { nextTick, ref } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
    board: Object,
});
const inputNameRef = ref();
const formRef = ref();
const isShowingForm = ref(false);
const form = useForm({
    name: "",
});

async function showForm() {
    isShowingForm.value = true;
    await nextTick();
    inputNameRef.value.focus();
}

function onSubmit() {
    form.post(route("cardLists.store", { board: props.board.id }), {
        onSuccess: () => {
            form.reset();
            inputNameRef.value.focus();
            formRef.value.scrollIntoView();
        },
    });
}
</script>
<template>
    <form
        @keydown.esc="isShowingForm = false"
        v-if="isShowingForm"
        ref="formRef"
        class="p-3 bg-gray-200 rounded-md"
        @submit.prevent="onSubmit()"
    >
        <input
            ref="inputNameRef"
            v-model="form.name"
            class="block w-full text-sm rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring-blue-400"
            placeholder="Enter list name..."
            type="text"
        />

        <div class="mt-2 space-x-2">
            <button
                class="px-4 py-2 text-sm font-medium text-white bg-rose-600 hover:bg-rose-500 rounded-md shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-rose-500 focus:outline-none"
                type="submit"
            >
                Add list
            </button>
            <button
                class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-black rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-rose-500 focus:outline-none"
                type="button"
                @click="isShowingForm = false"
            >
                Cancel
            </button>
        </div>
    </form>

    <button
        v-if="!isShowingForm"
        class="flex items-center bg-white/10 w-full hover:bg-white/20 text-white p-2 text-sm font-medium rounded-md"
        @click="showForm()"
    >
        <span class="w-5 h-5">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
            >
                <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"></path>
            </svg>
        </span>
        <span class="ml-1">Add another list</span>
    </button>
</template>
