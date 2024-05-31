<script setup>
import {Head, useForm} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const createUser = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

</script>

<template>
    <Head title="Dashboard Create User"/>
    <AuthenticatedLayout page-title="Create User">
        <form
            @submit.prevent="createUser"
            class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"
        >
            <h5 class="text-xl font-bold text-light-dark">User</h5>
            <div class="flex flex-col px-3">
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                >
                    Name
                </label>
                <input
                    type="text"
                    v-model="form.name"
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                    placeholder="User name"
                    required
                />
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                >
                    Email
                </label>
                <input
                    type="email"
                    v-model="form.email"
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                    placeholder="Your email address"
                    required
                />
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                >
                    Password
                </label>
                <input
                    type="password"
                    v-model="form.password"
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                    placeholder="Password"
                    required
                />
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                >
                    Confirm Password
                </label>
                <input
                    type="password"
                    v-model="form.password_confirmation"
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                    placeholder="Confirm Password"
                    required
                />
            </div>
            <div class="flex justify-end w-full mt-6">
                <button
                    type="submit"
                    class="px-6 py-3 font-bold text-white rounded-lg bg-art-black-1 hover:bg-art-black-2"
                >
                    Add User
                </button>
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
