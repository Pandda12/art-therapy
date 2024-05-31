<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head, Link} from "@inertiajs/vue3";

defineProps({
    users: {
        type: Array,
        required: true
    }
})
</script>

<template>
    <Head title="Dashboard Users"/>
    <AuthenticatedLayout page-title="Users">
        <div class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl">
            <h5 class="text-xl font-bold text-light-dark">User list</h5>
            <div class="text-right my-6">
                <Link
                    :href="route('dashboard.user.create')"
                    class="px-6 py-3 font-bold text-white rounded-lg bg-art-black-1 hover:bg-art-black-2"
                >
                    Add User
                </Link>
            </div>
            <div v-if="!users.length">No Users</div>
            <div v-else>
                <table class="w-full">
                    <thead>
                    <tr class="text-left">
                        <th colspan="2">Brand</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(user, index) in users">
                        <td class="py-2">
                            <Link
                                href="route('dashboard.brand.edit', brand.id)"
                            >
                                {{ user.name }}
                            </Link>
                        </td>
                        <td class="py-2">
                            <Link
                                href="route('dashboard.brand.edit', brand.id)"
                            >
                                edit
                            </Link>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
