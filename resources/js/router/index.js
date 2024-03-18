import {createRouter, createWebHistory} from 'vue-router';
import HomveView from '@/views/HomeView.vue';

const routes = [
    {
        path: "/",
        name: "home",
        component: HomveView,
    },
    {
        path: "/login",
        name: "login",
        component: () => import("@/views/Auth/LoginView.vue"),
    },
    {
        path: "/signup",
        name: "signup",
        component: () => import("@/views/Auth/SignupView.vue"),
    },
    {
        path: "/forgot-password",
        name: "forgot-password",
        component: () => import("@/views/Auth/ForgotPasswordView.vue"),
    },
    {
        path: "/reset-password",
        name: "reset-password",
        component: () => import("@/views/Auth/ResetPasswordView.vue"),
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
})

export default router;
