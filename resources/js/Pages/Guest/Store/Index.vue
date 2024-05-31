<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    stores: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <GuestLayout>
        <div class="text-4xl uppercase text-center mb-10">Our Stores</div>
        <div v-if="!stores">No stores< sorry</div>
        <div v-else class="flex gap-5">
            <div
                v-for="store in stores"
                class="flex p-5"
            >
                {{ store.name }}, {{ store.address }}<br>{{ store.phone }}<br>{{ store.working_hours }}
            </div>
        </div>

    </GuestLayout>
</template>

<style scoped>

</style>
