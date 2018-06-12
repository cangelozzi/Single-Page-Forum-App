import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

export default router;

const routes = [
   // { path: "/login", component: Login },

];

const router = new VueRouter({
    routes // short for `routes: routes`
});