<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <div class="flex flex-col h-screen bg-blue-600">
        <header
            class="shrink-0 flex justify-between items-center bg-white-50 px-4 py-3"
        >
            <a
                class="text-2xl font-black tracking-tight"
                :href="route('board.index')"
            >
                imos
            </a>
            <nav>
                <Link class="ml-3" href="/profile">
                    <img
                        src="https://pbs.twimg.com/profile_images/1333896976602193922/MtWztkxt_400x400.jpg"
                        class="h-9 w-9 inline rounded-full"
                    />
                </Link>
            </nav>
        </header>
        <main class="flex-1 overflow-hidden">
            <slot />
        </main>
    </div>
</template>
