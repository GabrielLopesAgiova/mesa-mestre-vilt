<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { playgroups } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Grupos',
        href: playgroups().url,
    },
    {
        title: 'Campanhas',
        href: playgroups().url,
    }
];
</script>

<template>
    <Head title="Playgroups" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div
            class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
        >
            teste
        </div>
    </AppLayout>
</template>
