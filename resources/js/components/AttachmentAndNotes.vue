<template>
    <div class="container">
      <div class="left">
        <div style="margin-bottom: 10px;">
          <h6 >Attachments</h6>
          <h6 v-if="fileName" class="file-name">
            <span class="green">{{ fileName }}</span><br>
            <span class="black"> by {{ uploader }} on {{ uploadDate }}</span>
          </h6>
        </div>
        <input type="file" ref="fileInput" class="file-input" style="display:none;" @change="onFileChange">
        <button-component  icon="fa fa-plus" text="Add Attachment" font-size="15" width="200px" height="37px" color="blue" @click.native="openFileInput"/>
      </div>
      <div class="right">
        <h6>Notes</h6>
        <textarea placeholder="Enter your notes here"></textarea>
      </div>
    </div>
  </template>
  
  <script>
  import ButtonComponent from './ButtonComponent.vue';
  
  export default {
    components: {
      ButtonComponent
    },
    data() {
      return {
        fileName: '',
        uploader: '',
        uploadDate: ''
      };
    },
    methods: {
      openFileInput() {
        this.$refs.fileInput.click();
      },
      // onFileChange(event) {
      //   const file = event.target.files[0];
      //   this.fileName = file.name;
      //   // Handle the file as needed, for example, by uploading it to a server
      // }
      onFileChange(e) {
        const file = e.target.files[0];
        if (file) {
          const now = new Date();
          const month = now.getMonth() + 1;
          const day = now.getDate();
          const year = now.getFullYear();
          const hours = now.getHours();
          const minutes = now.getMinutes();
          const formattedDate = `${month}/${day}/${year} ${hours}:${minutes}`;
          this.fileName = file.name;
          this.uploader = 'Rizky W';
          this.uploadDate = formattedDate;
        }
      }
    }
  }
  </script>
  
  <style>
  
  .container {
    display: flex;
  }
  
  .left, .right{
    height: 100px;
  }
  
  .left {
    flex: 1;
    margin-right: 20px;
    
  }
  
  .right {
    flex: 1;
  }
  
  textarea {
    width: 100%;
    height: 100px;
    background: rgb(255, 252, 252);
    border: 1px solid rgb(219, 216, 216);
  }
  .green {
    color: green;
  }
  .black {
    color: black;
  }
  </style>
  