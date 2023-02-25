import {createRouter, createWebHistory } from "vue-router";
import Home from "../landing/Index.vue";
import Course from "../course/Index.vue";
import CourseDetail from "../course/Detail.vue";
import Registration from "../registration/Index.vue";
import Login from "../auth/Login.vue";
import Register from "../auth/Register.vue";
import Dashboard from "../course/Dashboard.vue";
import Class from "../course/Class.vue";

// about
import About from "../about/About.vue";
import Terms from "../about/Terms.vue";
import Privacy from "../about/Privacy.vue";
import Support from "../about/Support.vue";

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
    history: createWebHistory(),
    routes,
});

export default router;
