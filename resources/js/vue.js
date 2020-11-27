window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import Join from './components/Join';
import Meeting from './components/Meeting';


const routes = [
  {
    path: '/simpozij/webinars/join',
    name: 'join',
    component: Join
  },
  {
    path: '/meeting/webinars/webinar',
    name: 'meeting',
    component: Meeting
  }
];

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');