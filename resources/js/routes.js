import DetailsRafli from "./components/DetailsRafli.vue";
import completedInstruction from "./components/CompletedInstruction.vue";
import openInstruction from "./components/OpenInstruction.vue";
import detailCompleted from "./components/DetailCompleted.vue";
import detailCancelled from "./components/DetailCancelled.vue";
import navbar from "./components/Navbar.vue";
import newInstruction from "./components/NewInstruction.vue"
import notFound from "./components/Hello.vue";

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
                path: "/completed",
                component: completedInstruction,
            },
            {
                path: "/detailcomplete",
                name: detailCompleted,
                component: detailCompleted,
            },
            {
                path: "/details_rafli",
                name: "details rafli",
                component: DetailsRafli,
            },
            {
                path: "/new",
                name: "new instruction",
                component: newInstruction,
            },
        ],
    },
    {
        path: "/detailcomplete",
        name: detailCompleted,
        component: detailCompleted,
    },
    {
        path: "/detailcancel",
        name: detailCancelled,
        component: detailCancelled,
    },
    {
        path: "/details_rafli",
        name: "details rafli",
        component: DetailsRafli,
    },
    {
        path: "*",
        name: "404 Not Found",
        component: notFound,
    },
];
