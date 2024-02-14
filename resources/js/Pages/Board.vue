<script setup>
import Authenticated from "@/Layouts/Authenticated.vue";
import BoardNameForm from "@/Components/BoardNameForm.vue";

const props = defineProps({
    board: Object,
});
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
                    ></div>
                </div>
            </div>
        </div>
    </Authenticated>
</template>
