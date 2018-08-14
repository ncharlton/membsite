<template>
    <div class="reaction" :title="title + reactionType.reactionTypeName" v-on:click="react(reactionType.reactionTypeId)"
         v-tippy>

        <img width="20px" height="20px" :src="'/images/reaction/' + reactionType.reactionTypeIcon">
        <span class="reaction-count">{{ count }}</span>

    </div>
</template>

<script>
    import Axios from 'axios'
    import ApiReaction from '../api/reaction'

    export default {
        name: "reaction",
        props: ["item", "itemId", "userId", "reactionType", "reactions"],
        data() {
            return {
            }
        },
        mounted() {
        },
        computed: {
            count() {
                if(this.reactions) {
                    return this.reactions.length;
                } else {
                    return 0;
                }
            },
            loaded() {
                if(this.reactions)
                    return true;
                else
                    return false;
            },
            title() {
                let message = "";
                if(this.reactions) {
                    if(this.reactions.lenth === 0) {
                        message += "React with ";
                    }
                    if(this.reactions.length === 1) {
                        let names = "";
                        this.reactions.forEach(function (reaction) {
                            names += reaction.username
                        })

                        message += names + " has reacted with ";
                    }
                    if(this.reactions.length > 1) {
                        let names = "";
                        let c = 0;
                        this.reactions.forEach(function (reaction) {
                            if(c === 0) {
                                names += reaction.username
                            } else {
                                names += ", " + reaction.username
                            }
                            c++;
                        })

                        message += names + " have reacted with ";
                    }

                }
                return message;
            }
        },
        methods: {
            react(reactionTypeId) {
                Axios.get('/api/reaction/new', {
                    params: {
                        item_type : this.item,
                        item_id : this.itemId,
                        user_id : this.userId,
                        reaction_type : reactionTypeId
                    }
                })
                    .then((response) => {
                        this.reactions.push(response.data);
                        console.log(this.reactions);
                    })
                    .catch((error) => {
                        console.log(error);
                    })
            },
        }
    }
</script>

<style scoped>

</style>