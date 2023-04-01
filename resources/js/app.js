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
Vue.component("modal-vendor", require("./components/ModalVendor.vue").default);
Vue.component(
    "modal-sendEmail",
    require("./components/ModalSendEmail.vue").default
);
Vue.component(
    "modal-terminate",
    require("./components/ModalTerminate.vue").default
);
Vue.component(
    "modal-internalNote",
    require("./components/ModalInternalNote.vue").default
);

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component("hello-component", require("./components/Hello.vue").default);
Vue.component("navbar", require("./components/Navbar.vue").default);
Vue.component(
    "completed",
    require("./components/CompletedInstruction.vue").default
);
Vue.component(
    "detail-completed",
    require("./components/DetailCompleted.vue").default
);
Vue.component(
    "detail-cancelled",
    require("./components/DetailCancelled.vue").default
);

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
