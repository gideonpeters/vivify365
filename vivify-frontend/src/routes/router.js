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
        path: 'blog',
        name: 'main.blog',
        component: () => import('./../views/Blog.vue')
    }
        ,
    {
        path: 'devotional',
        name: 'main.devotional',
        component: () => import('./../views/Devotional.vue')
    },
    {
        path: 'resources',
        name: 'main.resources',
        component: () => import('./../views/Resources.vue')
    },
    {
        path: 'speakup',
        name: 'main.speakup',
        component: () => import('./../views/SpeakUp.vue')
    },
    {
        path: 'contact',
        name: 'main.contact',
        component: () => import('./../views/Contact.vue')
    }
    ]
});