import Example from "./components/ExampleComponent.vue";
import Index from "./components/Index.vue";
import Cancel from "./components/DetailCancel.vue";
import Completed from "./components/DetailCompleted.vue";

export const routes = [
    {
        path: "/example",
        name: "example",
        component: Example,
    },
    {
        path: "/",
        name: "index",
        component: Index,
    },
    {
        path: "/cancel",
        name: "cancel",
        component: Cancel,
    },
    {
        path: "/completed",
        name: "completed",
        component: Completed,
    },
];
