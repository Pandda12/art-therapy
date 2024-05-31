<script setup>
import {Head, Link} from "@inertiajs/vue3";

defineProps({
    pageTitle: String
})
</script>

<template>
    <div class="flex text-lg">
        <div>
            <Link
                :href="route('product.index')"
            >
                Shop
            </Link>
        </div>
        <div class="px-5">/</div>
        <div>
            {{ pageTitle }}
        </div>
    </div>
    <slot/>
</template>

<style scoped>

</style>
