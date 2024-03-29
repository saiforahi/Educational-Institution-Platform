/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
import axios from 'axios'
import VueAxios from 'vue-axios'
window.Vue = require('vue');
window.axios = require('axios');
window.$ = require('jquery');
window.jQuery = require('jquery');
Vue.use(VueAxios, axios)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('create-news-component', require('./components/newsfeed_components/CreateNews.vue').default);
Vue.component('show-news-component', require('./components/newsfeed_components/ShowNews.vue').default);
Vue.component('notification-phone', require('./components/notification/Phone.vue').default);
Vue.component('notification-desktop', require('./components/notification/Desktop.vue').default);
Vue.component('job-application', require('./components/career/JobApplication.vue').default);
Vue.component('job-list',require('./components/career/Jobs.vue').default);
Vue.component('job-detail-modal',require('./components/career/JobModal.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 
 * 
 */

const app=new Vue({
    el: '#app'
})





