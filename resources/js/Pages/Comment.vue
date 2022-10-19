<template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-gray-100 border-b border-gray-200">
                   <b>Comment</b>
                    <div>NickName</div>
                    <div>20.06.22 в 22.40</div>
                    <div>{{ propComment['rate'] }}</div>
                    <button>#</button>
                </div>
                <div class="p-3 border-b border-gray-200">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cum error laboriosam, odit quam quisquam quod repellat repudiandae sint sunt veritatis voluptatem voluptatibus. Ad culpa et reiciendis saepe tempora velit.
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        propComment: {
            type: Array,
            default: {
                'rate': 0,
            },
        },
    },
    data() {
    }
}
</script>
