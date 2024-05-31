<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head, Link} from "@inertiajs/vue3";

defineProps({
    brands: {
        type: Array,
        required: true
    }
})
</script>
<template>
    <Head title="Dashboard Brands"/>
    <AuthenticatedLayout page-title="Brands">
        <div class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl">
            <h5 class="text-xl font-bold text-light-dark">Brand list</h5>
            <div class="text-right my-6">
                <Link
                    :href="route('dashboard.brand.create')"
                    class="px-6 py-3 font-bold text-white rounded-lg bg-art-black-1 hover:bg-art-black-2"
                >
                    Add Brand
                </Link>
            </div>
            <div v-if="!brands.length">No Brands</div>
            <div v-else>
                <table class="w-full">
                    <thead>
                    <tr class="text-left">
                        <th colspan="2">Brand</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(brand, index) in brands">
                        <td class="py-2">
                            <Link
                                :href="route('dashboard.brand.edit', brand.id)"
                            >
                                {{ brand.name }}
                            </Link>
                        </td>
                        <td class="py-2">
                            <Link
                                :href="route('dashboard.brand.edit', brand.id)"
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
