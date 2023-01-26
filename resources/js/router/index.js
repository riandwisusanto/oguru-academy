import {createRouter, createWebHistory } from "vue-router";
import Home from "../landing/Index.vue";
import Course from "../course/Index.vue";
import CourseDetail from "../course/Detail.vue";

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
        path: "/course/detail",
        name: "course_detail",
        component: CourseDetail,
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;