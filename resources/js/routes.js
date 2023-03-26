import Example from "./components/ExampleComponent.vue";
import Hello from "./components/Hello.vue";

import completedInstruction from "./components/CompletedInstruction.vue";
import openInstruction from "./components/OpenInstruction.vue";
import navbar from "./components/Navbar.vue";

export const routes = [
    {
        path: "/",
        name: "navbar",
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
];
