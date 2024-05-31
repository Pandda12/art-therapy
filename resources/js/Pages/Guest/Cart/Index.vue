<script setup>
import {Head, Link, router} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import {onMounted, reactive, ref} from "vue";
import Loading from "@/Components/Loading.vue";

const products = ref(null)
const cartTotal = ref(0)
const productCount = ref(0)
let isLoading = ref(true);

defineProps({
    stores: {
        type: Object,
        required: true
    }
})

onMounted(() => {
    getCart()
})

async function getCart() {
    try {
        const storedProducts = localStorage.getItem('cart');
        const response = await fetch(route('cart.show'), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            // If you have any request body, include it here
            body: JSON.stringify({ cart: storedProducts })

        });
        const data = await response.json();
        productCount.value = data.product_count;
        cartTotal.value = data.total;
        products.value = data.products
        isLoading.value = false;
    } catch (error) {
        console.error('Error fetching data:', error);
        isLoading.value = false;
    }
}
function deleteProduct(productId){
    // Get the products from localStorage
    const storedProducts = localStorage.getItem('cart');

    // Parse the string to an array
    const products = JSON.parse(storedProducts);

    // Find the index of the product with the given productId
    const index = products.findIndex(product => product.id === productId);

    if (index !== -1) {
        // Remove the product at the found index
        products.splice(index, 1);

        // Convert the updated array back to a string and store it in localStorage
        localStorage.setItem('cart', JSON.stringify(products));
    }
    getCart()
}
function increment(productId, max) {
    const productsString = localStorage.getItem('cart');
    const products = JSON.parse(productsString);

    products.forEach((product) => {
        if (product.id === productId && product.quantity < max) {
            product.quantity += 1;
        }
    });

    localStorage.setItem('cart', JSON.stringify(products));
    getCart();
}
function decrement(productId) {
    const productsString = localStorage.getItem('cart');
    const products = JSON.parse(productsString);

    products.forEach((product) => {
        if (product.id === productId && product.quantity > 1) {
            product.quantity -= 1;
        }
    });

    localStorage.setItem('cart', JSON.stringify(products));
    getCart();
}
const form = reactive({
    first_name: null,
    last_name: null,
    phone: null,
    store_id: null,
    payment_method: 'cart',
    products: null
})

function placeOrder() {
    form.products = JSON.parse(localStorage.getItem('cart'));
    router.post('/order', form)
}
</script>

<template>
    <Head title="Cart"/>
    <GuestLayout>
        <h1 class="shop-heading mt-16 mb-20 text-4xl uppercase">Cart</h1>
        <div v-if="isLoading"><Loading/></div>
        <div v-else-if="!productCount">You cart is empty, please add some products form <Link class="underline" :href="route('product.index')">Shop</Link></div>
        <form v-else @submit.prevent="placeOrder">
            <div class="flex flex-col gap-24">
                <div class="flex justify-between gap-5">
                    <div class="flex flex-col gap-5 max-w-6xl w-3/4">
                        <div v-for="product in products"
                            class="flex bg-lite-purple-1 rounded-2xl p-4 justify-between">
                            <div>
                                <img
                                    :src="product.image"
                                    :alt="product.name"
                                    style="height: 120px; width: 120px"
                                >
                            </div>
                            <div class="flex flex-col justify-between">
                                <div>{{ product.name }}</div>
                                <div>
                                    <button @click.prevent="deleteProduct(product.id)">Delete</button>
                                </div>
                            </div>
                            <div class="flex">
                                <button
                                    @click.prevent="decrement(product.id)"
                                    class="product_minus hover:text-white hover:bg-art-black-2 w-10 border rounded-s-2xl cursor-pointer outline-none h-12"
                                >
                                    <span class="m-auto text-2xl font-thin">−</span>
                                </button>
                                <div class="flex justify-center items-center w-10 h-12 border">{{ product.quantity }}</div>
                                <button
                                    @click.prevent="increment(product.id, product.max_quantity)"
                                    class="product_plus hover:text-white hover:bg-art-black-2 w-10 border rounded-e-2xl cursor-pointer outline-none h-12"
                                >
                                    <span class="m-auto text-2xl font-thin">+</span>
                                </button>
                            </div>
                            <div class="text-3xl">
                                {{ product.price }}$
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-lite-purple-1 rounded-2xl py-7 px-6 w-1/4">
                        <div class="text-3xl mb-7">Total amount: <span id="total">{{ cartTotal }}$</span></div>
                        <div class="text-lg mb-14">Products: <span class="product_quantity">{{ productCount }}</span></div>
                        <div class="flex items-center mb-7">
                            <input
                                id="privacy-policy"
                                type="checkbox"
                                class="focus:ring-transparent focus:ring-2 text-art-black-1"
                                required
                            />
                            <label for="privacy-policy" class="ms-2">I agree with the terms of the Public Offer and the return policy</label>
                        </div>
                        <div>
                            <button
                                class="py-2.5 px-16 rounded-3xl bg-art-black-1 text-white w-full hover:cursor-pointer hover:bg-art-black-2"
                            >
                                Make an order
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between gap-5">
                    <div class="flex flex-col gap-5 max-w-6xl w-3/4">
                        <div class="flex flex-col">
                            <div class="mb-14 text-4xl uppercase">Delivery</div>
                            <div class="flex bg-lite-purple-1 rounded-2xl p-8">
                                <div class="w-1/3">
                                    Pickup
                                </div>
                                <select
                                    v-model="form.store_id"
                                    class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                >
                                    <option
                                        v-for="store in stores"
                                        :value="store.id"
                                    >
                                        {{ store.name }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="mb-14 text-4xl uppercase">Payment</div>
                            <div class="flex bg-lite-purple-1 rounded-2xl p-8">
                                <fieldset>
                                    <div>
                                        <input
                                            type="radio"
                                            id="cart"
                                            name="cart"
                                            value="cart"
                                            v-model="form.payment_method"
                                            class="focus:ring-art-black-1 focus:ring-2 text-art-black-1"
                                            checked
                                        />
                                        <label for="cart" class="ms-2">Credit/debit card</label>
                                    </div>
                                    <div>
                                        <input
                                            type="radio"
                                            id="cash"
                                            name="cash"
                                            value="cash"
                                            v-model="form.payment_method"
                                            class="focus:ring-art-black-1 focus:ring-2 text-art-black-1"
                                        />
                                        <label for="cash" class="ms-2">Cash</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-lite-purple-1 rounded-2xl p-4 w-1/4">
                        <div class="mb-14 text-4xl uppercase">Your details</div>
                        <div class="flex flex-col">
                            <div class="flex flex-col">
                                <label for="first-name" class="block mb-2 text-sm font-medium">First name</label>
                                <input
                                    type="text"
                                    name="first_name"
                                    v-model="form.first_name"
                                    class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div class="flex flex-col">
                                <label for="second-name" class="block mb-2 text-sm font-medium">Second name</label>
                                <input
                                    type="text"
                                    name="second_name"
                                    v-model="form.last_name"
                                    class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div class="flex flex-col">
                                <label for="phone" class="block mb-2 text-sm font-medium">Phone</label>
                                <input
                                    type="tel"
                                    name="phone"
                                    v-model="form.phone"
                                    class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </GuestLayout>
</template>

<style scoped>

</style>
