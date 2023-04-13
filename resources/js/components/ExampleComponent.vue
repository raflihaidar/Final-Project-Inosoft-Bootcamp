<template>
    <div class="container">
        <div class="boxi">
            <header-component></header-component>
            <item-component></item-component>
            <transport-component></transport-component>
            <scope-of-work-table-component></scope-of-work-table-component>
            <cost-detail-component></cost-detail-component>
            <attachment-notes></attachment-notes>
            <div></div>
        </div>
    </div>
</template>

<script>
import TransportComponent from "./TransportComponent.vue";
export default {
    data() {
        return {
            age: TransportComponentnull,
        };
    },
    methods: {
        handleClick() {
            console.log("Button clicked!");
        },
    },
};
</script>

<style scoped>
.containe {
    display: flex;
    justify-content: center;
    background-color: #fbf8fd;
}

.boxi {
    width: 1400px;
    display: flex;
    flex-direction: column;
    padding: 30px;
    /* optional width, padding, margin */
    background-color: #fefefe;
}
.containe {
    min-height: 100vh;
}

.boxi {
    min-height: 80vh;
}
</style>
