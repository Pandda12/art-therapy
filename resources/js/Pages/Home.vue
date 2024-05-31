<script setup>
import { Head, Link } from '@inertiajs/vue3'
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    categories: {
        type: Array,
        required: true
    }
})

</script>

<template>
    <Head>
        <title>Art Store</title>
    </Head>
    <GuestLayout>
        <div class="text-4xl uppercase text-center">Join in making history</div>
        <div class="text-lg text-center pt-3">Art store</div>
        <div class="mb-20">
            <img
                src="/images/main-img.png"
                alt="Art Store"
                class="pt-6"
            />
        </div>
        <section>
            <div class="flex flex-col">
                <div class="flex justify-between mb-8">
                    <div class="text-3xl font-bold uppercase">Categories</div>
                    <Link
                        :href="route('category.index')"
                        class="underline"
                    >
                        see all
                    </Link>
                </div>
                <div class="flex flex-col gap-5 w-full">
                    <div class="flex gap-5 w-full">
                        <Link
                            href="/category/brushes-painting-knives"
                            class="one category-first block bg-lite-purple-1"
                        >
                            <div class="text-3xl uppercase p-6">Brushes & Painting knives</div>
                        </Link>
                        <Link
                            href="/category/oil-colours"
                            class="two category-first block bg-lite-purple-2"
                        >
                            <div class="text-3xl uppercase p-6">Oil colours</div>
                        </Link>
                        <Link
                            href="/category/graphics"
                            class="three category-first block bg-lite-purple-1"
                        >
                            <div class="text-3xl uppercase p-6">Graphics</div>
                        </Link>
                        <Link
                            href="/category/accessories"
                            class="four category-first block bg-lite-purple-2"
                        >
                            <div class="text-3xl uppercase p-6">Accessories</div>
                        </Link>
                    </div>
                    <div class="flex gap-5 w-full">
                        <Link
                            href="/category/paper-canvas"
                            class="one category-second block bg-lite-purple-2"
                        >
                            <div class="text-3xl uppercase p-6">Paper & Canvas</div>
                        </Link>
                        <Link
                            href="/category/easels"
                            class="two category-second block bg-lite-purple-1"
                        >
                            <div class="text-3xl uppercase p-6">Easels</div>
                        </Link>
                        <Link
                            href="/category/painting-sets"
                            class="three category-second block bg-lite-purple-2"
                        >
                            <div class="text-3xl uppercase p-6">Painting sets</div>
                        </Link>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>

<style scoped>
.category-first{
    min-height: 400px;
    width: calc(25% - ( 60px / 4 ) );
    border-radius: 20px;
    background-repeat: no-repeat;
    background-position-x: right;
    background-position-y: bottom;
}
.category-second{
    min-height: 400px;
    width: calc(100% / 3 - ( 40px / 3));
    border-radius: 20px;
    background-repeat: no-repeat;
    background-position-x: right;
    background-position-y: bottom;
}
.category-first.one{
    background-image: url("/images/categories/brushes-&-painting-knives.png");
}
.category-first.two{
    background-image: url("/images/categories/oil-colours.png");
}
.category-first.three{
    background-image: url("/images/categories/graphics.png");
}
.category-first.four{
    background-image: url("/images/categories/accessories.png");
}
.category-second.one{
    background-image: url("/images/categories/paper-&-canvas.png");
}
.category-second.two{
    background-image: url("/images/categories/easels.png");
}
.category-second.three{
    background-image: url("/images/categories/painting-sets.png");
}
</style>
