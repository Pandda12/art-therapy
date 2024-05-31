<script setup>
import {Link} from '@inertiajs/vue3';
import {computed, ref, watch} from "vue";

const searchQuery = ref('')
const searchResult = ref([])
const showSearch = ref(false)

const toggleSearch = () => {
    showSearch.value = !showSearch.value; // Toggle the value of showSearch
};
// Define a computed property to dynamically calculate the class
const searchClass = computed(() => {
    return { 'search-visible': showSearch.value };
});
watch(searchQuery, (newValue, oldValue) => {
    if (newValue !== oldValue && newValue !== '') {
        sendSearchRequest();
    }
});
const sendSearchRequest = async () => {
    try {
        const response = await fetch(route('product.search'), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ search: searchQuery.value })
        });
        searchResult.value = await response.json()
    } catch (error) {
        console.error('Error:', error);
    }
}
</script>

<template>
    <header class="bg-white">
        <div class="container 2xl mx-auto px-5 flex justify-between py-10">
            <div class="h-nav">
                <nav>
                    <ul class="flex gap-5 font-medium">
                        <li class="home mr-5 font-bold uppercase">
                            <Link :href="route('home')">Art therapy</Link>
                        </li>
                        <li><Link :href="route('brand.index')">Brands</Link></li>
                        <li><Link :href="route('product.index')">Products</Link></li>
                        <li><Link :href="route('about.index')">About Us</Link></li>
                        <li><Link :href="route('store.index')">Stores</Link></li>
                        <li><Link :href="route('contact.index')">Contact</Link></li>
                        <li><Link href="/">News</Link></li>
                    </ul>
                </nav>
            </div>
            <div class="h-bar flex">
                <button
                    @click.prevent="toggleSearch"
                    class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path d="M18.0479 16.6608L17.9419 16.7998L18.0655 16.9234L24.4754 23.3358C24.6819 23.543 24.8018 23.821 24.8107 24.1134C24.8196 24.4058 24.7169 24.6907 24.5234 24.9101C24.3299 25.1295 24.0602 25.2671 23.7689 25.2948C23.4798 25.3224 23.191 25.2396 22.9604 25.0633L22.843 24.9597L16.4347 18.5542L16.311 18.4306L16.172 18.5366C14.9174 19.4932 13.453 20.1373 11.9001 20.4157C10.3471 20.694 8.7502 20.5985 7.24147 20.1371C5.73274 19.6757 4.35557 18.8617 3.22392 17.7624C2.09227 16.6631 1.23868 15.3101 0.733778 13.8154C0.228873 12.3207 0.0871697 10.7273 0.320394 9.16698C0.553619 7.60666 1.15507 6.12431 2.07497 4.84258C2.99487 3.56085 4.20678 2.51659 5.61042 1.79623C7.01406 1.07586 8.56907 0.700083 10.1468 0.7C11.9988 0.699925 13.814 1.21747 15.3876 2.19423C16.9611 3.17099 18.2303 4.56809 19.0519 6.22785C19.8736 7.88762 20.215 9.74398 20.0375 11.5875C19.8601 13.4309 19.171 15.1881 18.0479 16.6608ZM10.1468 3.00286C8.12234 3.00286 6.18083 3.80704 4.74934 5.23848C3.31785 6.66992 2.51365 8.61137 2.51365 10.6357C2.51365 12.6601 3.31785 14.6016 4.74934 16.033C6.18083 17.4644 8.12234 18.2686 10.1468 18.2686C12.1712 18.2686 14.1127 17.4644 15.5442 16.033C16.9757 14.6016 17.7799 12.6601 17.7799 10.6357C17.7799 8.61137 16.9757 6.66992 15.5442 5.23848C14.1127 3.80704 12.1712 3.00286 10.1468 3.00286Z" fill="#13100E" stroke="white" stroke-width="0.4"/>
                    </svg>
                </button>
                <Link
                    :href="route('cart.index')"
                    class="cart-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="26" viewBox="0 0 28 26" fill="none">
                        <path d="M5.16688 4.55556H26.5002L23.8336 16.1111H7.83355M23.8336 19.6667H8.72244L4.27799 1H1.61133" stroke="#13100E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22.0556 25.0001C23.0374 25.0001 23.8334 24.2042 23.8334 23.2224C23.8334 22.2405 23.0374 21.4446 22.0556 21.4446C21.0738 21.4446 20.2778 22.2405 20.2778 23.2224C20.2778 24.2042 21.0738 25.0001 22.0556 25.0001Z" stroke="#13100E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.4999 25.0001C11.4818 25.0001 12.2777 24.2042 12.2777 23.2224C12.2777 22.2405 11.4818 21.4446 10.4999 21.4446C9.51811 21.4446 8.72217 22.2405 8.72217 23.2224C8.72217 24.2042 9.51811 25.0001 10.4999 25.0001Z" stroke="#13100E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </Link>
            </div>
        </div>
    </header>
    <div id="main">
        <div class="container 2xl mx-auto px-5 flex flex-col">
            <slot/>
        </div>
        <div
            id="search-container"
            class="fixed top-0 left-0 w-full h-svh"
            :class="{ 'show': showSearch }"
        >
            <div class="flex justify-center w-full py-12">
                <div class="relative w-full max-w-[740px] h-11 min-w-[200px]">
                    <input
                        id="productSearch"
                        v-model="searchQuery"
                        type="text"
                        placeholder="Search"
                        class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Search
                    </label>
                    <div v-if="!searchResult.length">No results</div>
                    <div v-else-if="searchResult" class="absolute w-full mt-2.5 rounded-xl">
                        <Link
                            v-for="product in searchResult"
                            :href="product.url"
                            class="flex justify-between p-5 bg-lite-purple-1 hover:bg-lite-purple-2 "
                        >
                            <div>
                                {{ product.name }}
                            </div>
                            <div>
                                {{ product.price }}$
                            </div>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container 2xl mx-auto px-5 flex ">
            <div class="w-1/2">
                <div class="text-xl uppercase">Art therapy</div>
                <div>
                    ©{{ new Date().getFullYear() }}
                </div>
            </div>
            <div class="w-1/2 flex justify-center">
                <ul>
                    <li><Link :href="route('brand.index')">Brands</Link></li>
                    <li><Link :href="route('product.index')">Products</Link></li>
                    <li><Link :href="route('about.index')">About Us</Link></li>
                    <li><Link :href="route('store.index')">Stores</Link></li>
                    <li><Link :href="route('contact.index')">Contact</Link></li>
                    <li><Link href="/">News</Link></li>
                </ul>
            </div>
        </div>
    </footer>
</template>
<style scoped>
header{
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.1);
    z-index: 11;
}
#main {
    padding-top: 141px;
    background-color: #FCFCF8;
    min-height: 100svh;
    padding-bottom: 100px;
}
#main #search-container{
    background-color: rgba(141, 141, 141, 0.5);
    transform: translateX(200%);
    transition: ease-in-out .5s;
}
#main #search-container.show{
    transform: translateX(0%);
}
#main #search-container>div{
    background-color: rgba(247, 247, 244, 1);
    margin-top: 106px;
}
#search-container #productSearch{
    border: 0 none;
    outline: none;
    border-bottom: 1.5px rgba(109, 109, 109, 1) solid;
}
#search-container #productSearch:focus{
    outline: none;
    border: none;
    box-shadow: none;
}
footer{
    background-color: #13100E;
    color: #F7F7F4;
    padding-top: 75px;
    padding-bottom: 75px;
}
</style>
