<script setup>
import {Head, Link} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ShopLayout from "@/Layouts/ShopLayout.vue";
import AddToCartLogo from "@/Components/Logo/AddToCartLogo.vue";

defineProps({
    products: {
        type: Array,
        required: true
    }
})

function addToCart(id){
    let cart = localStorage.getItem('cart')
    let newProduct = [
        {
            'id': id,
            'quantity': 1
        }
    ]
    if (!cart) {
        localStorage.setItem('cart', JSON.stringify(newProduct))
    } else {
        cart = JSON.parse(cart)

        cart.forEach(item => {
            if (item.id === id) {
                item.quantity = Number(item.quantity) + 1
                newProduct = null
            }
        })

        Array.prototype.push.apply(cart, newProduct)
        localStorage.setItem('cart', JSON.stringify(cart))
    }
}
</script>

<template>
    <Head title="Products"/>
    <GuestLayout>
        <ShopLayout page-title="Products">
            <div class="text-4xl uppercase my-14">
                Products
            </div>
            <div v-if="products.length" class="flex flex-wrap gap-5">
                <Link
                    v-for="(product, index) in products"
                    :href="product.url"
                    class="product relative flex flex-col bg-lite-purple-1 p-5 rounded-2xl hover:bg-lite-purple-2"
                >
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img :src="product.image" :alt="product.name">
                    </div>
                    <div class="mt-10 text-lg">
                        {{ product.name }}
                    </div>
                    <div class="flex justify-between mt-5">
                        <div class="text-2xl">
                            {{ product.price }}$
                        </div>
                        <button @click.prevent="addToCart(product.id)">
                            <AddToCartLogo :x="31" :y="33"/>
                        </button>
                    </div>
                </Link>
            </div>
        </ShopLayout>
    </GuestLayout>
</template>

<style scoped>
.product{
    width: calc(25% - 15px);
}
</style>
