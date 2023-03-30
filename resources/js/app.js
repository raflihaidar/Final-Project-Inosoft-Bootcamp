/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component("example-component", require("./components/ExampleComponent.vue").default);
Vue.component("hello-component", require("./components/Hello.vue").default);
Vue.component("navbar", require("./components/Navbar.vue").default);
Vue.component("completed", require("./components/CompletedInstruction.vue").default);
Vue.component("detail-completed", require("./components/DetailCompleted.vue").default);
Vue.component("detail-cancelled", require("./components/DetailCancelled.vue").default);
Vue.component("button-component", require("./components/ButtonComponent.vue").default);
Vue.component("cost-detail", require("./components/CostDetailComponent.vue").default);
Vue.component("scope-of-work", require("./components/ScopeOfWorkComponent.vue").default);
Vue.component("input-field", require("./components/InputFieldComponent.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from "vue";
// import Vuex from "vuex";
// import store from "./store"
import VueRouter from "vue-router";
import { routes } from "./routes";

Vue.use(VueRouter);
const router = new VueRouter({
    mode: "history",
    routes,
});

// Vue.use(Vuex);
const app = new Vue({
    el: "#app",
    // store,
    router,
});
