<template>
    <h1 class="text-3xl">Unsere Lieblings-Restaurants</h1>
    <v-list :items="restaurants" item-title="name"></v-list>

    <v-btn color="primary">Button </v-btn>
</template>

<script setup lang="ts">
defineProps<{
    restaurants: {
        id: number;
        name: string;
        cuisine: string;
        url: string;
    }[];
}>();
</script>
