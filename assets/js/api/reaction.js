"use strict";

import Axios from 'axios'

export default {
    async fetchReactionTypes() {
        let result = await Axios.get('/api/reaction/types');
        return result
    },
    async fetchReactions(itemType, itemId) {
        let result = await Axios.get('/api/reactions', {
            params: {
                item_type: itemType,
                item_id: itemId
            }
        });
        return result
    },
    async addReaction(itemType, itemId, userId, reactionTypeId) {
        let result = await Axios.get('/api/reaction/new',{
            params: {
                item_type: itemType,
                item_id: itemId,
                user_id: userId,
                reaction_type: reactionTypeId
            }
        });
        return result
    },
    async fetchReaction(itemType, itemId, reactionTypeId) {
        let result = await Axios.get('/api/reaction', {
            params: {
                item_type: itemType,
                item_id: itemId,
                reaction_type_id: reactionTypeId
            }
        })
        return result
    }
}