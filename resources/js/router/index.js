import {createRouter, createWebHistory } from "vue-router";
import Home from "../landing/Index.vue";
import Course from "../course/Index.vue";
import CourseDetail from "../course/Detail.vue";
import Registration from "../registration/Index.vue";
import About from "../about/Index.vue";
import Login from "../auth/Login.vue";
import Register from "../auth/Register.vue";
import Dashboard from "../course/Dashboard.vue";
import Class from "../course/Class.vue";
import Certificate from "../certificate/Index.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
    },
    {
        path: "/course",
        name: "course",
        component: Course,
    },
    {
        path: "/course/:id",
        name: "course_detail",
        component: CourseDetail,
    },
    {
        path: "/dashboard",
        name: "dashboard",
        component: Dashboard,
    },
    {
        path: "/class",
        name: "class",
        component: Class,
    },
    {
        path: "/registration",
        name: "registration",
        component: Registration,
    },
    {
        path: "/about",
        name: "about",
        component: About,
    },
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: "/register",
        name: "register",
        component: Register,
    },
    {
        path: "/certificate",
        name: "certificate",
        component: Certificate,
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;
