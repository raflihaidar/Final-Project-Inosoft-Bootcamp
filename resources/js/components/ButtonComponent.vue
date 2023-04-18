<template>
  <!-- <button-component icon="fa fa-minus" text="grey" width="50px"  height="50px" color="grey" @click="removeRow(index)" /> button example use-->
  <button :class="['button', { 'button-icon-only': !text }, color]" :style="{ width: width, height: height, color: fontColor, fontSize: fontSize + 'px' }" @click="buttonClick">
    <i v-if="icon" :class="icon" style="margin-right: 5px;"></i>
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
    },
    fontColor: {
      type: String,
      default: "white"
    },
    fontSize: {
      type: Number,
      default: 16
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
  background: #01bebe;
}

.grey{
  background: #faf7fa;
}

.white{
  background: white;
}

.black{
  color: black;
}
</style>