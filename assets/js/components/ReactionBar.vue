<template>
    <div class="reaction-bar">
        <reaction
            v-if="initReactionTypes && reactionsSplit"
            v-for="reactionType in initReactionTypes"
            :key="reactionType.reactionTypeId"
            :item="item"
            :item-id="itemId"
            :user-id="userId"
            :reaction-type="reactionType"
            :reactions="reactions[reactionType.reactionTypeId]"
        ></reaction>
    </div>
</template>

<script>
    import Axios from 'axios';
    import Reaction from "./Reaction";
    import ApiReaction from "../api/reaction"

    export default {
        components: {Reaction},
        name: "reaction-bar",
        props: ['item', 'itemId', 'userId'],
        data () {
            return {
                reactions: {},
                loaded: false,
            }
        },
        beforeMount() {
            this.initReactions();
        },
        computed: {
            initReactionTypes() {
                return this.$store.state.reactionTypes;
            },
            reactionsSplit() {
                return this.loaded;
            }
        },
        methods: {
            initReactions() {
                ApiReaction.fetchReactions(this.item, this.itemId)
                    .then((result) => {
                        this.reactions = result.data;
                        this.loaded = true;
                    })
            }
        }
    }
</script>

<style scoped>
    .pill {
        background: #eee;
        border: 1px solid #ddd;
        padding: 5px;
        float: left;
        margin: 10px;
    }
    .pill img {
        width: 20px;
    }
</style>