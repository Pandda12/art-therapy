<script setup>
import {Head, Link, usePage} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ShopLayout from "@/Layouts/ShopLayout.vue";
import {ref} from "vue";
import AddToCartLogo from "@/Components/Logo/AddToCartLogo.vue";
const prop = defineProps({
    product: {
        type: Object,
        required: true
    },
    similarProducts: {
        type: Array,
        required: true
    }
})
const count = ref(1)
const product = usePage().props.product
// const cart = localStorage.getItem('cart')

function decrement(){
    if ( count.value > 1 )
        count.value--
}
function increment() {
    if ( count.value < product.quantity )
        count.value++
}
async function addToCart(productId, type) {

    let quantity = type === 'main' ? count.value : 1

    console.log(type)
    console.log(quantity)

    let cart = localStorage.getItem('cart')
    let newProduct = [
        {
            'id': productId,
            'quantity': quantity
        }
    ]

    if (!cart) {
        localStorage.setItem('cart', JSON.stringify(newProduct))
    } else {
        cart = JSON.parse(cart)

        cart.forEach(item => {
            if (item.id === productId) {
                item.quantity = Number(item.quantity) + quantity
                newProduct = null
            }
        })

        Array.prototype.push.apply(cart, newProduct)
        localStorage.setItem('cart', JSON.stringify(cart))
    }
}
</script>

<template>
    <Head :title="product.name"/>
    <GuestLayout>
        <ShopLayout :page-title="product.name">
            <div class="flex justify-between my-16">
                <div class="flex flex-col w-1/2">
                    <div class="flex flex-col mb-20">
                        <h1 class="text-3xl uppercase mb-12">{{ product.name }}</h1>
                        <div class="text-4xl mb-12">{{ product.price }}$</div>
                        <div v-if="product.description" class="flex flex-col mb-12">
                            <div class="text-xl font-bold mb-4">Product description</div>
                            <div>{{ product.description }}</div>
                        </div>
                        <div class="input-counter mb-12">
                            <div class="flex flex-row rounded-lg relative bg-transparent mt-1">
                                <button
                                    @click.prevent="decrement"
                                    class="hover:text-white hover:bg-art-black-2 w-10 border rounded-s-2xl cursor-pointer outline-none h-12">
                                    <span class="m-auto text-2xl font-thin">−</span>
                                </button>
                                <div
                                    id="product-count"
                                    class="text-center w-20 border font-semibold text-md hover:text-black focus:text-black md:text-basecursor-default flex justify-center items-center text-gray-700 h-12 bg-transparent"
                                    >
                                    {{ count }}
                                </div>
                                <button
                                    @click.prevent="increment"
                                    class="hover:text-white hover:bg-art-black-2 w-10 border rounded-e-2xl cursor-pointer outline-none h-12">
                                    <span class="m-auto text-2xl font-thin">+</span>
                                </button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button
                                @click.prevent="addToCart(product.id, 'main')"
                                class="add-to-cart-btn py-2.5 px-16 rounded-3xl bg-art-black-1 text-white hover:bg-art-black-2"
                            >
                                Add to cart
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="text-xl font-bold mb-4">Specifications</div>
                        <table>
                            <tr v-if="product.brand">
                                <td>Brand</td>
                                <td><Link :href="product.brand.url">{{ product.brand.name }}</Link></td>
                            </tr>
                            <tr v-if="product.category">
                                <td>Product Category</td>
                                <td><Link :href="product.category.url">{{ product.category.name }}</Link></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="product-img flex justify-center  w-2/5">
                    <img
                        :src="product.image"
                        :alt="product.name"
                        class="py-10 px-14 object-contain bg-lite-purple-1 rounded-3xl"
                        style="max-height: 500px; max-width: 500px"
                    >
                </div>
            </div>
            <div v-if="similarProducts.length" class="flex flex-col">
                <div class="text-3xl font-bold uppercase mb-6">You may also like</div>
                <div class="flex gap-5">
                    <Link
                        v-for="(similarProduct, index) in similarProducts"
                        :href="similarProduct.url"
                        class="product relative flex flex-col bg-lite-purple-1 p-5 rounded-2xl hover:bg-lite-purple-2"
                    >
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img :src="similarProduct.image" :alt="similarProduct.name">
                        </div>
                        <div class="mt-10 text-lg">
                            {{ similarProduct.name }}
                        </div>
                        <div class="flex justify-between mt-5">
                            <div class="text-2xl">
                                {{ similarProduct.price }}$
                            </div>
                            <button @click.prevent="addToCart(similarProduct.id, 'similar')">
                                <AddToCartLogo :x="31" :y="33"/>
                            </button>
                        </div>
                    </Link>
                </div>
            </div>
        </ShopLayout>
    </GuestLayout>
</template>
<style scoped>
.product{
    width: calc(25% - 20px);
}
</style>
