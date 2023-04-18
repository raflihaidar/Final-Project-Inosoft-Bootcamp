<template style="background-color: #24236b;">
    <div class="text-center">
        <img src="https://img.freepik.com/free-vector/error-404-concept-illustration_114360-1811.jpg?w=740&t=st=1680964034~exp=1680964634~hmac=ec252b904239bbf278c466b63efdad759698aee74341adb00baab8676ce95268" class="img-fluid">
        
        <button v-on:click="push()" style="position:absolute; color: none;" class="btn btn-lg"><i class="fa-solid fa-backward fa-shake fa-8x" style="color: #f24551;"></i> </button>

    </div>
</template>

<script>
export default {
    methods:{
        push(){
        this.$router.go(-1)
    },
    }

}
</script>

<style>

</style>
