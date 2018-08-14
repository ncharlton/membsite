<template>
    <div style="width: 200px; position: relative; height: 100px; background: #eee">
        Hello {{ user.username }}
    </div>
</template>

<script>
    export default {
        name: "user-popup",
        props: ["user"],
        data() {
            return {
            }
        },
        methods: {

        },
        mounted() {
        }
    }
</script>

<style scoped>

</style>