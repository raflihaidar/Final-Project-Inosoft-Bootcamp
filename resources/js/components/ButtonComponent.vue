<template>
    <button :class="['button', { 'button-icon-only': !text }, color]" :style="{ width: width, height: height }" @click="buttonClick" >
      <i v-if="icon" :class="icon"></i>
      <span v-if="text" :class="{'bold': bold}">{{ text }}</span>
    </button>
  </template>
  
  <script>
  export default {
    props: {
      icon: {
        type: String,
        default: ''
      },
      text: {
        type: String,
        default: ''
      },
      bold: {
        type: Boolean,
        default: false
      },
      width: {
        type: String,
        default: 'auto'
      },
      height: {
        type: String,
        default: 'auto'
      },
      color:{
        type: String,
        default: ""
        }
    },
    methods:{
        buttonClick(){
            this.$emit('click')
        }
    }
  }
  </script>
  
  <style scoped>
  .button {
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    border-radius: 5px;
    background-color: #3498db;
    color: #fff;
    font-size: 16px;
  }
  
  .button-icon-only {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .bold {
    font-weight: bold;
  }

.red{
    background: red;
}
.blue{
    background: #06bdbe;
}

.grey{
    background: #faf7fa;
}

.white{
    background: white;
}
  </style>
  