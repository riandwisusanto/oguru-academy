import {createRouter, createWebHistory } from "vue-router";
import Home from "../landing/Index.vue";
import Course from "../course/Index.vue";
import CourseDetail from "../course/Detail.vue";
import Registration from "../registration/Index.vue";
import Login from "../auth/Login.vue";
import Register from "../auth/Register.vue";

// about
import About from "../about/about.vue";
import Terms from "../about/terms.vue";
import Privacy from "../about/privacy.vue";
import Support from "../about/support.vue";

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
        path: "/registration-diklat-batch-2",
        name: "registration",
        component: Registration,
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
        path: "/about",
        name: "about",
        component: About,
    },
    {
        path: "/terms",
        name: "terms",
        component: Terms,
    },
    {
        path: "/privacy",
        name: "privacy",
        component: Privacy,
    },
    {
        path: "/support",
        name: "support",
        component: Support,
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;
