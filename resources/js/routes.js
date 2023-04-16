import DetailsRafli from "./components/ExampleComponent.vue";
import completedInstruction from "./components/CompletedInstruction.vue";
import openInstruction from "./components/OpenInstruction.vue";
import detailCompleted from "./components/DetailCompleted.vue";
import detailCancelled from "./components/DetailCancelled.vue";
import navbar from "./components/Navbar.vue";
import newInstruction from "./components/newInstructionPages.vue";
import NewServiceInstruction from "./components/NewServiceInstruction.vue";

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
        path: "/new_logistic",
        name: "new logistic instruction",
        component: newInstruction,
    },
    {
        path: "/new_service",
        name: "new service instruction",
        component: NewServiceInstruction,
    },
];
