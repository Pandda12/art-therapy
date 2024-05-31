<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {reactive} from "vue";
import {Head, router} from "@inertiajs/vue3";

defineProps({
    brands: {
        type: Array,
        required: true
    },
    categories: {
        type: Array,
        required: true
    }
})

const form = reactive({
    name: null,
    price: null,
    quantity: null,
    brand_id: null,
    category_id: null,
    image: null,
    is_show: 1,
    description: null
})

function submit(){
    router.post('/dashboard/products', form)
}
</script>

<template>
    <Head title="Dashboard Create Product"/>
    <AuthenticatedLayout page-title="Add Product">
        <form
            @submit.prevent="submit"
            action=""
            class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"
        >
            <h5 class="text-xl font-bold text-light-dark">Product information</h5>
            <div class="flex flex-col px-3">
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                    for="title"
                >
                    Product name
                </label>
                <input
                    type="text"
                    v-model="form.name"
                    id=""
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                    placeholder="Oil Colour Tube 15 ml Nickel Titanium Yellow Light"
                    required
                />
            </div>
            <div class="flex">
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="number_of_tea_bags"
                    >
                        Price
                    </label>
                    <input
                        type="text"
                        v-model="form.price"
                        id=""
                        class="rounded-lg border border-solid border-gray-300 bg-white"
                        placeholder="10"
                        required
                    />
                </div>
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="number_of_tea_bags"
                    >
                        Quantity
                    </label>
                    <input
                        type="number"
                        v-model="form.quantity"
                        id=""
                        class="rounded-lg border border-solid border-gray-300 bg-white"
                        placeholder="20"
                        required
                    />
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="tea_weight"
                    >
                        Brand (optional)
                    </label>
                    <select
                        v-model="form.brand_id"
                        class="border-gray-300 bg-white text-sm rounded-lg"
                    >
                        <option
                            v-for="(brand, index) in brands"
                            :value="brand.id"
                        >
                            {{ brand.name }}
                        </option>

                    </select>
                </div>
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="tea_weight"
                    >
                        Category (optional)
                    </label>
                    <select
                        v-model="form.category_id"
                        class="border-gray-300 bg-white text-sm rounded-lg"
                    >
                        <option
                            v-for="(category, index) in categories"
                            :value="category.id"
                        >
                            {{ category.name }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="tea_weight"
                    >
                        Product display
                    </label>
                    <select
                        v-model="form.is_show"
                        class="border-gray-300 bg-white text-sm rounded-lg"
                    >
                        <option value="1" selected>Show</option>
                        <option value="0">Hide</option>
                    </select>
                </div>
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="main_image"
                    >
                        Product image (optional)
                    </label>
                    <input
                        type="file"
                        @input="form.image = $event.target.files[0]"
                        id=""
                        class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer "
                    >
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col w-full px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="description"
                    >
                        Description (optional)
                    </label>
                    <textarea
                        v-model="form.description"
                        placeholder="Professional oil colour carefully crafted in Holland..."
                        class="rounded-lg border border-solid border-gray-300 bg-white"
                    ></textarea>
                </div>
            </div>
            <div class="flex justify-end w-full mt-6">
                <button
                    type="submit"
                    class="px-6 py-3 font-bold text-white rounded-lg bg-art-black-1 hover:bg-art-black-2"
                >
                    Add product
                </button>
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<style scoped>
textarea{
    min-height: 200px;
}
</style>
