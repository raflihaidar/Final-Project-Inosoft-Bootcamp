<template>
    <div class="inputfield">
      <input :type="type" :style="{ width: width, height: height }" :class="color" :placeholder="placeholder">
    </div>
  </template>
  
  <script>
  export default {
    name: 'Inputfield',
    props: {
      type: {
        type: String,
        default: 'text'
      },
      width: {
        type: String,
        default: '100%'
      },
      height: {
        type: String,
        default: '40px'
      },
      placeholder: {
        type: String,
        default: ''
      },
      color:{
          type: String,
          default: ""
          }
    },
    data() {
      return {
        inputValue: ''
      }
    }
  }
  </script>
  
  <style scoped>
  .inputfield {
    display: inline-block;
  }
  input{
    border: 1px solid #f0f0f1;
  }
  .grey{
    background-color: #fbfbfe;
  }
  </style>
  