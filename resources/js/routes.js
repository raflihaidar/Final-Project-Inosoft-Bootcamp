import DetailsRafli from "./components/DetailsRafli.vue";
import completedInstruction from "./components/CompletedInstruction.vue";
import openInstruction from "./components/OpenInstruction.vue";
import detailCompleted from "./components/DetailCompleted.vue";
import detailCancelled from "./components/DetailCancelled.vue";
import navbar from "./components/Navbar.vue";
import notFound from "./components/Hello.vue";
import newLogisticPage from "./components/NewLogisticPage.vue";
import newServicePage from "./components/NewServicePage.vue";


export const routes = [
    {
        path: "/",
        component: navbar,
        children: [
            {
                path: "/open",
                component: openInstruction,
            },
            {
                path: "/instruction",
                component: completedInstruction,
            },
            {
                path: "/detailcomplete",
                name: "detailCompleted",
                component: detailCompleted,
            },
            {
                path: "/details_rafli",
                name: "details rafli",
                component: DetailsRafli,
            },
            {
                path: "/new_logistic",
                component: newLogisticPage,
            },
            {
                path: "/new_service",
                component: newServicePage
            },
        ],
    },
    {

        path: "*",
        name: "404 Not Found",
        component: notFound,

    },
];
