<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head, Link} from "@inertiajs/vue3";

defineProps({
    products: {
        type: Array,
        required: true
    }
})
</script>

<template>
    <Head title="Dashboard Products"/>
    <AuthenticatedLayout page-title="Products">
        <div class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl">
            <h5 class="text-xl font-bold text-light-dark">Product list</h5>
            <div class="text-right my-6">
                <Link
                    :href="route('dashboard.product.create')"
                    class="px-6 py-3 font-bold text-white rounded-lg bg-art-black-1 hover:bg-art-black-2"
                >
                    Add Product
                </Link>
            </div>
            <div v-if="!products.length">No products</div>
            <div v-else>
                <table class="w-full">
                    <thead>
                    <tr class="text-left">
                        <th colspan="2">Product</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(product, index) in products">
                        <td class="py-2">
                            <Link
                                :href="route('dashboard.product.edit', product.id)"
                            >
                                {{ product.name }}
                            </Link>
                        </td>
                        <td class="py-2">
                            <Link
                                :href="route('dashboard.product.edit', product.id)"
                            >
                                edit
                            </Link>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
