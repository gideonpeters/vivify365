import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        blogs: []
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
        async getBlogPostById(context, id) {
            let res = await axios.get(`blogs/${id}`);
            return res.data
        }
    }
});