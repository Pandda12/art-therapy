<script setup>
import { reactive } from 'vue'
import {Head, router} from '@inertiajs/vue3'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const form = reactive({
    name: null,
    address: null,
    phone: null,
    email: null,
    working_hours: null
})

function createStore() {
    router.post('/dashboard/stores', form)
}
</script>

<template>
    <Head title="Dashboard Create Shop"/>
    <AuthenticatedLayout page-title="Add Store">
        <form
            @submit.prevent="createStore"
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
                ></textarea>
            </div>
            <div class="flex justify-end w-full mt-6">
                <button
                    type="submit"
                    class="px-6 py-3 font-bold text-white rounded-lg bg-art-black-1 hover:bg-art-black-2"
                >
                    Add Store
                </button>
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
