import Vue from "vue";
import VueRouter from "vue-router";

import Home from "./pages/Home.vue";
import Index from "./pages/posts/Index.vue"
import About from "./pages/About.vue"
import Contacts from "./pages/Contacts.vue"

Vue.use(VueRouter);

const router = new VueRouter(
  {
    mode:'history',
    routes: [
      // dynamic segments start with a colon
      {
        path: '/',
        name: 'home',
        component: Home
      },
      {
        path: '/guest/posts',
        props: true,
        name: 'posts.index',
        component: Index
      },
      {
          path: 'about',
          name: 'about',
          component: About
      },
      {
          path: 'contacts',
          name: 'contacts',
          component: Contacts
      }
      //{
      //    path: '/*',
      //    name: 'catch err',
      //    component: NotFound
      //}
    ]
  }
)


export default router
