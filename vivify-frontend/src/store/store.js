import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        blogs: [],
        devotionals: [],
        devotions: [],
        sermons: []
    },
    actions: {
        async getBlogPosts({ state }, page) {
            // try {
            let res = await axios.get(`blogs?page=${page}`);
            // console.table(res.data);
            state.blogs = res.data.data
            return res.data
            // } catch (error) {
            //     throw error;
            // }
        },
        async commentOnPost(context, body) {
            await axios.post('comment', body);
        },
        async getBlogPostById(context, id) {
            let res = await axios.get(`blogs/${id}`);
            return res.data
        },
        async getDevotionals({ state }, page) {
            let res = await axios.get(`devotionals?page=${page}`);
            // console.table(res.data);
            state.devotionals = res.data.data
            return res.data
        },
        async getDevotionalsByCategory({ state }, id) {
            let res = await axios.get(`devotionals/all/${id}`);
            // console.table(res.data);
            state.devotionals = res.data.data
            return res.data
        },
        async getDevotions({ state }) {
            let res = await axios.get(`devotions`);
            // console.table(res.data);
            state.devotions = res.data.data
            return res.data
        },
        async getSermons({ state }, page) {
            let res = await axios.get(`sermons?page=${page}`);
            // console.table(res.data);
            state.sermons = res.data.data
            return res.data
        },
        async getSermonById(context, id) {
            let res = await axios.get(`sermons/${id}`);
            return res.data
        },
    }
});