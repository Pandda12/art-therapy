<script setup>
import {Head, useForm, usePage} from '@inertiajs/vue3'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    store: {
        type: Array,
        required: true
    }
})
const store = usePage().props.store
const form = useForm({
    id: store.id,
    name: store.name,
    address: store.address,
    phone: store.phone,
    email: store.email ?? null,
    working_hours: store.working_hours
})
const deleteStore = () => {
    form.delete(route('store.delete', store.id))
}
const updateStore = () => {
    form.patch(route('store.update', store.id))
}
</script>

<template>
    <Head title="Dashboard Edit Shop"/>
    <AuthenticatedLayout page-title="Edit Store">
        <button
            @click="deleteStore"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-6 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
        >
            Delete store
        </button>
        <form
            @submit.prevent="updateStore"
            action=""
            class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"
        >
            <h5 class="text-xl font-bold text-light-dark">Store</h5>
            <div class="flex flex-col px-3">
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                >
                    Store name
                </label>
                <input
                    type="text"
                    v-model="form.name"
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                    placeholder="University store"
                    required
                />
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                >
                    Address
                </label>
                <input
                    type="text"
                    v-model="form.address"
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                    placeholder="Warsaw, Okopowa 59"
                    required
                />
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
                    required
                />
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                >
                    Email
                </label>
                <input
                    type="tel"
                    v-model="form.email"
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                    placeholder="store1@art-therapy.com"
                />
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                >
                    Working hours
                </label>
                <textarea
                    v-model="form.working_hours"
                    placeholder="monday-friday (10:00 - 16:00)"
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                    required
                >{{ form.working_hours }}</textarea>
            </div>
            <div class="flex justify-end w-full mt-6">
                <button
                    type="submit"
                    class="px-6 py-3 font-bold text-white rounded-lg bg-art-black-1 hover:bg-art-black-2"
                >
                    Update Store
                </button>
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
