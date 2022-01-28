window.vue = require('vue')

import Vue from 'vue'
import App from './layouts/App.vue'
import VueRouter from 'vue-router'
import router from './router'

const app = new Vue({
    el: '#root',
    router,
    render: h => h(App)
})
