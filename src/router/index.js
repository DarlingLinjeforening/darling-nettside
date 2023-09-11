import { createRouter, createWebHistory } from "vue-router";
import HomePage from "../views/HomePage.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "/",
      component: HomePage,
    },
    {
      path: "/about",
      name: "about",
      component: () => import("../views/AboutUsPage.vue"),
    },

    {
      path: "/events",
      name: "events",
      component: () => import("../views/EventsPage.vue"),
    },
    {
      path: "/job-offers",
      name: "joboffers",
      component: () => import("../views/JobOffersPage.vue"),
    },
    {
      path: "/contact",
      name: "contact",
      component: () => import("../views/ContactPage.vue"),
    },
  ],
});

export default router;
