<script setup>
import Title from "@/Components/Title.vue";
import Info from "@/Components/InfoPost.vue";

defineProps({
    category: String,
    title: String,
    createdBy: String,
    createdAt: String,
});
</script>

<template>
    <div class="w-full p-4 flex gap-6 items-center">
        <div class="img w-max h-max">
            <slot />
        </div>
        <div>
            <label class="text-lowercase">{{ category }}</label>
            <Title class="pt-1 pb-2">{{ title }}</Title>
            <Info :name="createdBy" :datetime="createdAt" />
        </div>
    </div>
</template>
