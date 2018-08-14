<template>
    <div>
        <div class="commentBox">
            <textarea v-model="commentText" :disabled="loading">

            </textarea>
            <button class="commentSubmit" v-on:click="comment()" :disabled="loading">Comment</button>
        </div>

        <transition name="fade">
            <div class="comments">
                <div
                    class="comment"
                    v-for="comment in comments"
                    v-if="comments"
                >
                    <a>{{ comment.user.username }}</a>
                    <user-popup :user="comment.user"></user-popup>
                    {{ comment.comment_content }}
                    <br>
                    written at {{ comment.created_at | formatDate }}
                </div>
            </div>
        </transition>

        <div class="commentPages">
            <div class="spinner">
                <hollow-dots-spinner
                        v-if="loading"
                        :animation-duration="1000"
                        :dot-size="15"
                        :dots-num="3"
                        color="#0f476c"
                        class="spinner"
                />
            </div>
            <button class="commentLoader" v-on:click="fetchComments()" :disabled="countComments">Load More</button>
        </div>
        <hr>

    </div>
</template>

<script>
    import ApiComment from "../api/comment";
    import {HollowDotsSpinner} from 'epic-spinners';
    import UserPopup from './UserPopup'

    export default {
        name: "comment-bar",
        props: ['item', 'itemId', 'userId'],
        components: {
            HollowDotsSpinner,
            UserPopup
        },
        data() {
            return {
                loading: false,
                commentText: "",
                comments: [],
                limit: 0,
                page: 0,
                total: 0,
            }
        },
        mounted() {
            // fetch comments on load
            this.fetchComments(this.page);
        },
        computed: {
            countComments() {
                if(this.comments.length === this.total) {
                    return false;
                } else {
                    return true;
                }
            }
        },
        methods: {
            comment() {
                this.loading = true;
                ApiComment.createComment(this.item, this.itemId, this.userId, this.commentText)
                    .then((result) => {
                        this.comments.unshift(result.data);
                        this.loading = false;
                    })
                    .catch((result) => {

                    })
            },

            fetchComments() {
                this.loading = true;
                ApiComment.fetchComments(this.item, this.itemId, this.page)
                    .then((result) => {
                        this.loading = false;
                        this.comments.push.apply(this.comments, result.data.data);
                        this.limit = result.data.limit;
                        this.total = result.data.total;
                        this.loading = false;
                        this.page = this.page + 1;
                    })
            },

            loadMore() {
            }
        }
    }
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>