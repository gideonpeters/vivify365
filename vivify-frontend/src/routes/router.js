import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

export default new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes: [{
        path: '',
        name: 'main.home',
        component: () => import('./../views/Home.vue')
    },
    {
        path: '/blog',
        name: 'main.blog',
        component: () => import('./../views/Blog.vue')
    },
    {
        path: '/blog/:id',
        name: 'main.blog.detail',
        component: () => import('./../views/BlogDetail.vue')
    }
        ,
    {
        path: '/devotional',
        name: 'main.devotional',
        component: () => import('./../views/Devotional.vue')
    },
    {
        path: '/podcasts',
        name: 'main.podcasts',
        component: () => import('./../views/Podcasts.vue')
    },
    {
        path: '/sermons',
        name: 'main.sermons',
        component: () => import('./../views/Sermons.vue')
    },
    {
        path: '/speakup',
        name: 'main.speakup',
        component: () => import('./../views/SpeakUp.vue')
    },
    {
        path: '/contact',
        name: 'main.contact',
        component: () => import('./../views/Contact.vue')
    }
    ],
    scrollBehavior: function (to) {
        if (to.hash) {
            return {
                selector: to.hash
            }
        }
    },
});