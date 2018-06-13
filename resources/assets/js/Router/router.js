import Vue from "vue";
import VueRouter from "vue-router";
import Login from "../components/Login/login.vue";
import Signup from "../components/Login/signup.vue";
import Forum from "../components/forum/forum.vue";
import Logout from "../components/login/Logout.vue";

Vue.use(VueRouter);


const routes = [
  { path: "/login", component: Login },
  { path: "/logout", component: Logout },
  { path: "/signup", component: Signup },
  { path: "/forum", component: Forum , name: 'forum'},
  
];

const router = new VueRouter({
  routes, // short for `routes: routes`
  hashbang: false,
  mode: 'history'
});

export default router;