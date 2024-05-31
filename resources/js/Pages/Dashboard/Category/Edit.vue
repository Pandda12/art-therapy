<script setup>
import {Head, useForm, usePage} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    category: {
        type: Array,
        required: true
    }
})
const category = usePage().props.category
const form = useForm({
    id: category.id,
    name: category.name
})
const updateCategory = () => {
    form.patch(route('category.update', category.id))
}
const deleteCategory = () => {
    form.delete(route('category.delete', category.id))
}
</script>

<template>
    <Head title="Dashboard Edit Category"/>
    <AuthenticatedLayout page-title="Edit Category">
        <button
            @click="deleteCategory"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-6 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
        >
            Delete category
        </button>
        <form
            @submit.prevent="updateCategory"
            action=""
            class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"
        >
            <h5 class="text-xl font-bold text-light-dark">Category</h5>
            <div class="flex flex-col px-3">
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                    for="name"
                >
                    Category name
                </label>
                <input
                    type="text"
                    v-model="form.name"
                    id=""
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                    placeholder="Colour"
                    required
                />
            </div>
            <div class="flex justify-end w-full mt-6">
                <button
                    type="submit"
                    class="px-6 py-3 font-bold text-white rounded-lg bg-art-black-1 hover:bg-art-black-2"
                >
                    Update Category
                </button>
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
