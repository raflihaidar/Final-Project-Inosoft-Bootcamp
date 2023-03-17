<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">I'm an example component.</div>
                </div>
                <div>
                    <h1>{{ message }}</h1>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            message: "Halo aku yoga bhay",
        };
    },
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
