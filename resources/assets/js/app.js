
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var uiv = require('uiv');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('top', require('./components/Top.vue'));
Vue.component('panel', require('./components/Panel.vue'));
Vue.component('product-list', require('./components/products/ProductList.vue'));
Vue.component('category-list', require('./components/categories/CategoryList.vue'));

Vue.use(uiv, { prefix: 'uiv' })

const app = new Vue({
    el: '#app'
});
