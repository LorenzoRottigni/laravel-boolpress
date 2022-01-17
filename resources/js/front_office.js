window.vue = require('vue')

import Vue from 'vue'
import App from './views/GuestHome'

const app = new Vue({
    el: '#root',
    render: h => h(App)
})
