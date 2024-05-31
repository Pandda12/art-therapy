<script setup>
import { Link } from '@inertiajs/vue3';
import DashboardLogo from "@/Components/Logo/DashboardLogo.vue";
import ImagesLogo from "@/Components/Logo/ImagesLogo.vue";
import ProductsLogo from "@/Components/Logo/ProductsLogo.vue";
import BrandsLogo from "@/Components/Logo/BrandsLogo.vue";
import CategoriesLogo from "@/Components/Logo/CategoriesLogo.vue";
import ShopLayout from "@/Layouts/ShopLayout.vue";
import ShopsLogo from "@/Components/Logo/ShopsLogo.vue";
import UsersLogo from "@/Components/Logo/UsersLogo.vue";
import OrdersLogo from "@/Components/Logo/OrdersLogo.vue";
// import AddProductLogo from "@/Components/Logo/AddProductLogo.vue";
// import UsersLogo from "@/Components/Logo/UsersLogo.vue";

</script>

<template>
    <aside
        class="w-1/5"
    >
        <div class="px-8 py-6 m-0">
            <Link
                class="text-slate-700"
                :href="route('home')"
            >
                Art therapy
            </Link>
        </div>
        <hr class="">
        <div class="mb-4">
            <ul class="flex flex-col pl-0 mb-0 list-none">
                <li class="mt-1 w-full">
                    <Link
                        class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                        :href="route('dashboard')"
                        :class="{ 'active rounded-lg drop-shadow-xl': route().current('dashboard') }"
                    >
                        <div
                            class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                        >
                            <DashboardLogo :x=20 :y=20 />
                        </div>
                        <span class="flex items-center">Dashboard</span>
                    </Link>

                </li>
<!--                <li class="mt-1 w-full">-->
<!--                    <Link-->
<!--                        class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"-->
<!--                        href="route('media.index')"-->
<!--                        :class="{ 'active rounded-lg drop-shadow-xl': route().current('media.index') }"-->
<!--                    >-->
<!--                        <div-->
<!--                            class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"-->
<!--                        >-->
<!--                            <ImagesLogo :x=20 :y=20 />-->
<!--                        </div>-->
<!--                        <span class="flex items-center">Картинки</span>-->
<!--                    </Link>-->
<!--                </li>-->
                <li class="mt-1 w-full">
                    <Link
                        class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                        :href="route('dashboard.brand.index')"
                        :class="{ 'active rounded-lg drop-shadow-xl': route().current('dashboard.brand.index') }"
                    >
                        <div
                            class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                        >
                            <BrandsLogo :x=20 :y=20 />
                        </div>
                        <span class="flex items-center">Brands</span>
                    </Link>
                </li>
                <li class="mt-1 w-full">
                    <Link
                        class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                        :href="route('dashboard.category.index')"
                        :class="{ 'active rounded-lg drop-shadow-xl': route().current('dashboard.category.index') }"
                    >
                        <div
                            class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                        >
                            <CategoriesLogo :x=20 :y=20 />
                        </div>
                        <span class="flex items-center">Categories</span>
                    </Link>
                </li>
                <li class="mt-1 w-full">
                    <Link
                        class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                        :href="route('dashboard.product.index')"
                        :class="{ 'active rounded-lg drop-shadow-xl': route().current('dashboard.product.index') }"
                    >
                        <div
                            class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                        >
                            <ProductsLogo :x=20 :y=20 />
                        </div>
                        <span class="flex items-center">Products</span>
                    </Link>
                </li>
                <li class="mt-1 w-full">
                    <Link
                        class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                        :href="route('dashboard.order.index')"
                        :class="{ 'active rounded-lg drop-shadow-xl': route().current('dashboard.order.index') }"
                    >
                        <div
                            class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                        >
                            <OrdersLogo :x=20 :y=20 />
                        </div>
                        <span class="flex items-center">Orders</span>
                    </Link>
                </li>
                <li class="mt-1 w-full">
                    <Link
                        class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                        :href="route('dashboard.store.index')"
                        :class="{ 'active rounded-lg drop-shadow-xl': route().current('dashboard.store.index') }"
                    >
                        <div
                            class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                        >
                            <ShopsLogo :x=20 :y=20 />
                        </div>
                        <span class="flex items-center">Shops</span>
                    </Link>
                </li>
                <li class="mt-1 w-full">
                    <Link
                        class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                        :href="route('user.index')"
                        :class="{ 'active rounded-lg drop-shadow-xl': route().current('user.index') }"
                    >
                        <div
                            class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                        >
                            <UsersLogo :x=20 :y=20 />
                        </div>
                        <span class="flex items-center">Users</span>
                    </Link>
                </li>
            </ul>
        </div>
    </aside>
</template>

<style scoped>
li a.active{
    background-color: #fff;
}
li a.active div{
    background-image: linear-gradient(310deg, #43968d, #5cf8bb);
}
li a.active svg{
    fill: #fff;
}
</style>
