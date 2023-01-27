import {createRouter, createWebHistory} from "vue-router";

import Home from './pages/Home.vue'
import About from './pages/About.vue'
import Contacts from './pages/Contacts.vue'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/chi-siamo',
            name: 'about',
            component: About
        },
        {
            path: '/contatti',
            name: 'contacts',
            component: Contacts
        },
    ]
});

export {router};
