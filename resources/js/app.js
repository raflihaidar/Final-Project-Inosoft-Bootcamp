import Vue from "vue";
import VueRotuer from "vue-router";
import { routes } from "./routes";

Vue.use(VueRotuer);
const router = new VueRotuer({
    mode: "history",
    routes,
});

const app = new Vue({
    el: "#app",
    router,
});
