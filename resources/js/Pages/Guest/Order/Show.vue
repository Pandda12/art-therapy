<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
defineProps({
    order: {
        type: Array,
        required: true
    }
})
localStorage.removeItem('cart')
</script>

<template>
<GuestLayout>
    <div class="order flex flex-col justify-center items-center">
        <div class="text-3xl font-bold uppercase">
            Your order has been successfully created
        </div>
        <table class="mt-12">
            <tr>
                <th>Order number</th>
                <td>{{ order.order_number }}</td>
            </tr>
            <tr>
                <th>Order status</th>
                <td>{{ order.order_status }}</td>
            </tr>
            <tr>
                <th>Delivery method</th>
                <td>Pick up in store</td>
            </tr>
            <tr>
                <th>Store address</th>
                <td>{{ order.store_address }}</td>
            </tr>
        </table>
    </div>
</GuestLayout>
</template>

<style scoped>
.order{
    padding-top: 120px;
}
table th{
    font-weight: 400;
    color: #6D6D6D;
    text-align: start;
}
table th,
table td{
    padding: 20px;
}
</style>
