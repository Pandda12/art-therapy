<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head, useForm, usePage} from "@inertiajs/vue3";

const props = defineProps({
    order: {
        type: Array,
        required: true
    },
    order_statuses: {
        type: Array,
        required: true
    },
    shops: {
        type: Array,
        required: true
    }
})
const order = usePage().props.order
const form = useForm({
        id: order.id,
        order_number: order.order_number,
        first_name: order.first_name,
        last_name: order.last_name,
        phone: order.phone,
        products: JSON.parse(order.products),
        payment_method: order.payment_method,
        order_total: order.order_total,
        status: order.status,
        store_id: order.store_id
    }
)

const updateOrder = () => {
    form.patch(route("dashboard.order.update", order.id))
}

const deleteOrder = () => {
    form.delete(route("order.delete", order.id))
}
</script>

<template>
    <Head title="Dashboard Edit Order"/>
    <AuthenticatedLayout page-title="Edit Order">
        <button
            @click="deleteOrder"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-6 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
        >
            Delete order
        </button>
        <form
            @submit.prevent="updateOrder"
            action=""
            class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"
        >
            <h5 class="text-xl font-bold text-light-dark">Order information</h5>
            <div class="flex flex-col px-3 mt-6">
                <div class="flex flex-col w-1/2 px-3">Order №{{ form.order_number }}</div>
                <div class="flex">
                    <div class="flex flex-col w-1/2">
                        <div class="flex flex-col px-3">
                            <label
                                class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                            >
                                First name
                            </label>
                            <input
                                type="text"
                                v-model="form.first_name"
                                class="rounded-lg border border-solid border-gray-300 bg-white"
                                placeholder="First name"
                            />
                        </div>
                        <div class="flex flex-col px-3">
                            <label
                                class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                            >
                                Last name
                            </label>
                            <input
                                type="text"
                                v-model="form.last_name"
                                class="rounded-lg border border-solid border-gray-300 bg-white"
                                placeholder="Last name"
                            />
                        </div>
                        <div class="flex flex-col px-3">
                            <label
                                class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                            >
                                Phone
                            </label>
                            <input
                                type="tel"
                                v-model="form.phone"
                                class="rounded-lg border border-solid border-gray-300 bg-white"
                                placeholder="+48 123 456 789"
                            />
                        </div>
                        <div class="flex flex-col px-3">
                            <div
                                class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                            >
                                Payment: {{ form.payment_method }}
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-1/2">
                        <div class="flex flex-col px-3">
                            <label
                                class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                                for="tea_weight"
                            >
                                Order status
                            </label>
                            <select
                                v-model="form.status"
                                class="border-gray-300 bg-white text-sm rounded-lg"
                            >
                                <option
                                    v-for="(status, index) in order_statuses"
                                    :value="index"
                                    :selected="index === form.status"
                                >
                                    {{ status }}
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-col px-3">
                            <label
                                class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                                for="tea_weight"
                            >
                                Store
                            </label>
                            <select
                                v-model="form.store_id"
                                class="border-gray-300 bg-white text-sm rounded-lg"
                            >
                                <option
                                    v-for="(store, index) in shops"
                                    :value="store.id"
                                    :selected="index === form.store_id"
                                >
                                    {{ store.name }} ({{ store.address }})
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-6">
                <table class="w-full">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="product in form.products">
                        <td>{{ product.name }}</td>
                        <td>{{ product.price }}$</td>
                        <td>{{ product.quantity }}</td>
                        <td>{{ product.price * product.quantity }}$</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex mt-6 px-6">
                    Order total: {{ form.order_total }}
            </div>
            <div class="flex justify-end w-full mt-6">
                <button
                    type="submit"
                    class="px-6 py-3 font-bold text-white rounded-lg bg-art-black-1 hover:bg-art-black-2"
                >
                    Update Order
                </button>
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
