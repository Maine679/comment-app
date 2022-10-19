<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Comment from "@/Pages/Comment.vue";

</script>
<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Discussion
            </h2>
        </template>

        <comment
            :propComment="comment"
        />


    </AuthenticatedLayout>
</template>
<script>
export default {
    data() {
        return {
            comment: {
                rate: 3,
            },
        }
    }
}
</script>
