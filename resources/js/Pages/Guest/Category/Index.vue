<script setup>
import {Head, Link} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ShopLayout from "@/Layouts/ShopLayout.vue";

defineProps({
    categories: {
        type: Array,
        required: true
    }
})
</script>

<template>
    <Head title="Categories"/>
    <GuestLayout>
        <ShopLayout page-title="Categories">
            <div class="text-4xl uppercase my-14">
                Categories
            </div>
            <div v-if="!categories.length">No Categories</div>
            <div v-else class="flex flex-wrap gap-5">
                <Link
                    v-for="(category, index) in categories"
                    :href="category.url"
                    class="brand relative flex flex-col bg-lite-purple-1 hover:bg-lite-purple-2 py-14 rounded-2xl text-center"
                >
                    <div class="text-3xl uppercase">
                        {{ category.name }}
                    </div>
                </Link>
            </div>
        </ShopLayout>
    </GuestLayout>
</template>

<style scoped>
.brand{
    width: calc(25% - 20px);
}
</style>
