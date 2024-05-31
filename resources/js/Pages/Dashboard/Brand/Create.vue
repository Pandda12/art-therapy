<script setup>
import { reactive } from 'vue'
import {Head, router} from '@inertiajs/vue3'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const form = reactive({
    name: null,
})

function submit() {
    router.post('/dashboard/brands', form)
}
</script>

<template>
    <Head title="Dashboard Create Brand"/>
    <AuthenticatedLayout page-title="Add Brand">
        <form
            @submit.prevent="submit"
            class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"
        >
            <h5 class="text-xl font-bold text-light-dark">Brand</h5>
            <div class="flex flex-col px-3">
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                    for="name"
                >
                    Brand name
                </label>
                <input
                    type="text"
                    v-model="form.name"
                    id=""
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                    placeholder="Rembrandt"
                    required
                />
            </div>
            <div class="flex justify-end w-full mt-6">
                <button
                    type="submit"
                    class="px-6 py-3 font-bold text-white rounded-lg bg-art-black-1 hover:bg-art-black-2"
                >
                    Add Brand
                </button>
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
