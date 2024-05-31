<script setup>
import {Head, Link} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
defineProps({
    orders: {
        type: Array,
        required: true
    }
})
</script>

<template>
    <Head title="Dashboard Orders"/>
    <AuthenticatedLayout page-title="Orders">
        <div class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl">
            <h5 class="text-xl font-bold text-light-dark">Order list</h5>
            <div v-if="!orders.length">No orders</div>
            <div v-else>
                <table class="w-full">
                    <thead>
                    <tr class="text-left">
                        <th>Order</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th colspan="2">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(order, index) in orders">
                            <td class="py-2">
                                <Link
                                    :href="route('dashboard.order.edit', order.id)"
                                >
                                    {{ order.number }}
                                </Link>
                            </td>
                            <td class="py-2">{{ order.customer }}</td>
                            <td class="py-2">
                                <span
                                    class="py-1 px-2 font-bold order_status text-lime-600 bg-lime-200 rounded"
                                    :class="order.status_slug"
                                >
                                    {{ order.status }}
                                </span>
                            </td>
                            <td class="py-2">{{ order.total }}$</td>
                            <td class="py-2">
                                <Link
                                    :href="route('dashboard.order.edit', order.id)"
                                >
                                    Show
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
.order_status.completed{

}
</style>
