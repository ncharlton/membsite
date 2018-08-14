import $ from 'jquery';
import 'babel-polyfill'
import Axios from 'axios';
import Vue from 'vue';
import Vuex from 'vuex';
import VueTippy from 'vue-tippy';
import ReactionBar from './components/ReactionBar';
import CommentBar from './components/CommentBar';
import ApiReaction from './api/reaction';
import Moment from 'moment';

require('../css/app.scss');

Vue.use(VueTippy, {
    flipDuration: 0,
    placement: 'bottom',
    size: 'small'
});

Vue.use(Vuex);

Vue.filter('formatDate', function (value) {
    if (value) {
        return Moment(String(value)).format('MMMM Do YYYY, h:mm:ss a')
    }
});

const store = new Vuex.Store({
    state: {
        reactionTypes : {},
        reactions: {}
    },
    mutations: {
        fetchReactionTypes(state) {
            ApiReaction.fetchReactionTypes()
                .then((result) => {
                    state.reactionTypes = result.data;
                })
        },
        fetchReactions(state, {item, itemId}) {
            ApiReaction.fetchReactions(item, itemId)
                .then((result) => {
                    state.reactions[item][itemId] = result.data;
                    console.log(state.reactions);
                })
        }
    }
});



new Vue({
    el: '#app',
    components: {ReactionBar, CommentBar},
    store,
    data () {
        return {
        }
    },
    methods: {
    },
    beforeMount () {
        this.$store.commit('fetchReactionTypes');
    },

});


