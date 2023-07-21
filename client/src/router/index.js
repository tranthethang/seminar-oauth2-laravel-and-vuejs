import {createRouter, createWebHistory} from 'vue-router'
import LoginView from '@/views/LoginView.vue'

const Router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'home',
            component: LoginView
        },
        {
            path: '/profile',
            name: 'profile',
            // route level code-splitting
            // this generates a separate chunk (About.[hash].js) for this route
            // which is lazy-loaded when the route is visited.
            component: () => import('@/views/ProfileView.vue')
        }
    ]
})

export default Router
