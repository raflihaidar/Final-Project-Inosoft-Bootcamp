import Example from "./components/ExampleComponent.vue";
import DetailsRafli from "./components/DetailsRafli.vue";

export const routes = [
    {
        path: "/",
        name: "example",
        component: Example,
    },
    {
        path: "/details_rafli",
        name: "details rafli",
        component: DetailsRafli,
    },
];
