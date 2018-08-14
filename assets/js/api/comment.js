'use strict';

import Axios from 'axios';

export default {
    async createComment(itemType, itemId, userId, comment) {
        let result = await Axios.post("/api/comment", {
            item_type: itemType,
            item_id: itemId,
            user_id: userId,
            comment: comment
        });

        return result;
    },

    async fetchComments(itemType, itemId, page) {
        let result = await Axios.get("/api/comments", {
            params: {
                item_type: itemType,
                item_id: itemId,
                page: page
            }
        });

        return result;
    }
}