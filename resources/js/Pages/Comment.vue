<template>
    <div class="p-3">
        <div class="lg:max-w-[100rem] mx-auto sm:pl-6 lg:pl-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-1 bg-gray-100 border-b border-gray-200">
                   <b>Comment</b>
                    <div>Author: {{propComment.user.name}}</div>
                    <div>Create: {{propComment.created_at}}</div>
                    <div>Id: {{propComment.id}}</div>
                    <div>Rate: {{propComment.rate}}</div>
                    <button>#</button>
                </div>
                <div class="p-2 border-b border-gray-200">
                   {{propComment.text}}
                </div>
            </div>

            <div
                v-for="item in this.comments"
            >
                <comment
                    v-for="item in this.comments"
                    v-if="item.user"
                    :key="item.id"
                    :propComment="item"
                />

                <button
                    v-else
                    @click.prevent="commentMore(route('comments.more', this.propComment.id))"
                >
                    More comments
                </button>

            </div>
        </div>

    </div>
</template>
<script>

export default {
    components: {
    },
    props: [
        'propComment',
    ],
    data() {
        return {
            comments: this.propComment.comments || null,
            // comments2: 22,
        }
    },
    methods: {
        async commentMore(link) {

            axios.post(link, {
            }).then((response) => {
                this.comments = response.data.comments

            }).catch(function (errors) {
                console.log('errors')
                console.log(errors)
            });

        }
    },
    created() {
      // console.log(this.comments2)
    }

}
</script>
