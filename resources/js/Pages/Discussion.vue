<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Comment from "@/Pages/Comment.vue";

</script>
<template>
    <Head title="Discussion" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Discussion
            </h2>
        </template>

        <comment
            v-for="item in this.comments"
            :key="item.id"
            :propComment="item"
        />


    </AuthenticatedLayout>
</template>
<script>
export default {
    props: {
        comments: null,
    },
    data() {
    }
}
</script>
