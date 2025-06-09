<template>
    <h1 class="text-3xl">Unsere Lieblings-Restaurants</h1>
    <ul>
        <li v-for="restaurant in restaurants" key="restaurnat.id">
            {{ restaurant.name }} - {{ restaurant.cuisine }}
        </li>
    </ul>
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