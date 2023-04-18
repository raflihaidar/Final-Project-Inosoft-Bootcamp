require("./bootstrap");
window.Vue = require("vue").default;
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
Vue.component(
    "button-component",
    require("./components/ButtonComponent.vue").default
);
Vue.component(
    "cost-detail-component",
    require("./components/CostDetailComponent.vue").default
);
Vue.component(
    "scope-of-work-component",
    require("./components/ScopeOfWorkComponent.vue").default
);
Vue.component(
    "input-field",
    require("./components/InputFieldComponent.vue").default
);
Vue.component(
    "attachment-notes",
    require("./components/AttachmentAndNotes.vue").default
);
Vue.component(
    "header-component",
    require("./components/HeaderComponent.vue").default
);
Vue.component(
    "header-service-component",
    require("./components/HeaderServiceComponent.vue").default
);
Vue.component(
    "item-component",
    require("./components/ItemComponenet.vue").default
);
Vue.component(
    "transport-component",
    require("./components/TransportComponent.vue").default
);
Vue.component(
    "new-logistic-pages",
    require("./components/NewLogisticPage.vue").default
);
Vue.component(
    "new-service-pages",
    require("./components/NewServicePage.vue").default
);
Vue.component(
    "cost-detail",
    require("./components/TableCostDetail.vue").default
);
Vue.component(
    "header-logistic",
    require("./components/TableHeaderLogistic.vue").default
);
Vue.component(
    "header-service",
    require("./components/TableHeaderService.vue").default
);
Vue.component(
    "table-item",
    require("./components/TableItem.vue").default
);
Vue.component(
    "scope-of-work",
    require("./components/TableScopeOfWork.vue").default
);
Vue.component(
    "table-transport",
    require("./components/TableTransport.vue").default
);
Vue.component(
    "modal-delete",
    require("./components/ModalDelete.vue").default
);
Vue.component(
    "modal-complete",
    require("./components/ModalComplete.vue").default
);
Vue.component(
    "modal-cancelled",
    require("./components/ModalCancelled.vue").default
);
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
