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
                :href="route('dashboard')"
            >
                imos
            </a>
            <nav>
                <Link class="ml-3" href="/profile">
                    <img
                        :alt="$page.props.auth.user.name"
                        :src="$page.props.auth.user.avatar_url"
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
