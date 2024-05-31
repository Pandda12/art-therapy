<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head, Link} from "@inertiajs/vue3";

defineProps({
    stores: {
        type: Array,
        required: true
    }
})
</script>

<template>
    <Head title="Dashboard Shops"/>
    <AuthenticatedLayout page-title="Stores">
        <div class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl">
            <h5 class="text-xl font-bold text-light-dark">Store list</h5>
            <div class="text-right my-6">
                <Link
                    :href="route('dashboard.store.create')"
                    class="px-6 py-3 font-bold text-white rounded-lg bg-art-black-1 hover:bg-art-black-2"
                >
                    Add Store
                </Link>
            </div>
            <div v-if="!stores.length">No Stores</div>
            <div v-else>
                <table class="w-full">
                    <thead>
                    <tr class="text-left">
                        <th colspan="2">Store</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(store, index) in stores">
                        <td class="py-2">
                            <Link
                                :href="route('dashboard.store.edit', store.id)"
                            >
                                {{ store.name }}
                            </Link>
                        </td>
                        <td class="py-2">
                            <Link
                                :href="route('dashboard.store.edit', store.id)"
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
