import Vue from "vue";
import VueRouter from "vue-router";
import { routes } from "./routes";

require("./bootstrap");
window.Vue = require("vue").default;
Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component(
    "details-rafli",
    require("./components/DetailsRafli.vue").default
);
Vue.component("navbar-component", require("./components/Navbar.vue").default);

Vue.use(VueRouter);
const router = new VueRouter({
    mode: "history",
    routes,
});

const app = new Vue({
    el: "#app",
    router,
});
