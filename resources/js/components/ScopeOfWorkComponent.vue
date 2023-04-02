<template>
    <div>
       <a class="button" href="#popup2">Let me Pop up</a>

       <div id="popup2" class="overlay">
           <div class="popup">
               <p>Scope of Work</p>
               <a class="close" href="#">&times;</a>
               <div class="content">

                   

                   <label for="template">Select Template:</label>
                   <select id="template" v-model="selectedTemplate" @change="updateSelectedTemplateItems">
                       <option v-for="(template, index) in templates" :key="index" :value="template">{{ template.name }}</option>
                   </select>

                   <div v-for="(section, sectionIndex) in selectedTemplateItems" :key="sectionIndex">
                   <h3>{{ section.name }}</h3>
                   <table>
                       <thead>

                       </thead>
                       <tbody>
                       <tr v-for="(item, itemIndex) in section.items" :key="itemIndex">
                           <div  class="box">
                               <td class="divider"><input type="checkbox" v-model="item.checked"></td>
                               <td class="custom-cell">{{ item.text }}</td>
                               <td v-if="item.description"><input-field color="grey" width="180px" height="30px" v-model="item.description" /></td>
                               <td v-else></td>
                           </div>
                       </tr>
                       </tbody>
                   </table>
                   </div>
               </div>
           </div>
       </div>




   
 </div>
</template>

<script>


export default {
   data() {
     return {
       templates: [],
       selectedTemplate: [],
       selectedScope: [],
       selectedTemplateItems: [
       {
           name: 'Scopes',
           items: [
           { text: 'Freight term', checked: false, description: ' ' },
           { text: 'Custom clearance', checked: false, description: '' },
           { text: 'Direct loading', checked: false, description: '' },
           { text: 'MHE & equipment', checked: false, description: ' ' },
           { text: 'Manpower', checked: false, description: ' ' },
           { text: 'Others', checked: false, description: ' ' },
           ]
       },
       {
           name: 'Documents',
           items: [
           { text: 'Copy of BL', checked: false, description: ' ' },
           { text: 'Surrender BL', checked: false, description: ' ' },
           { text: 'Original BL', checked: false, description: ' ' },
           { text: 'Invoice', checked: false, description: ' ' },
           { text: 'Packing List', checked: false, description: ' ' },
           { text: 'Storage Compound', checked: false, description: ' ' },
           { text: 'Others', checked: false, description: ' ' },
           ]
       }
       ],

     selectedScope: [],
     };
   },

   methods:{
       fetchTemplates() {
       axios.get('/api/getAllData')
         .then(response => {
           this.templates = response.data.templates;
           this.selectedTemplate = this.templates[0];
           this.updateSelectedTemplateItems();
         })
         .catch(error => {
           console.log(error);
         });
     },

//       updateSelectedTemplateItems() {
//         const selectedTemplateScopes = this.selectedTemplate.items.reduce((acc, curr) => {
//     return [...acc, ...curr.items.map(item => item.text)];
//   }, []);

//   this.selectedTemplateItems = this.selectedTemplateItems.map(section => {
//     section.items = section.items.map(item => {
//       item.checked = selectedTemplateScopes.includes(item.text);
//       return item;
//     });
//     return section;
//   });
//       },
updateSelectedTemplateItems() {
       const selectedTemplateScopes = this.selectedTemplate.fields.map(scope => scope.scope);
console.log("selectedtemplatescope:", selectedTemplateScopes)
 this.selectedTemplateItems = this.selectedTemplateItems.map(item => {
   item.checked = selectedTemplateScopes.includes(item.text);
   return item;
 });

   }},

   mounted() {
     this.fetchTemplates();
   },

}
</script>


<style scoped>
.overlay {
 position: fixed;
 top: 0;
 bottom: 0;
 left: 0;
 right: 0;
 background: rgba(0, 0, 0, 0.7);
 transition: opacity 500ms;
 visibility: hidden;
 opacity: 0;
 z-index: 999999;
}
.overlay:target {
 visibility: visible;
 opacity: 1;
}

.popup {
 margin: 70px auto;
 padding: 20px;
 background: #fff;
 border-radius: 5px;
 width: 82%;
 position: relative;
 transition: all 5s ease-in-out;
}

.popup h2 {
 margin-top: 0;
 color: #333;
 font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
 position: absolute;
 top: 20px;
 right: 30px;
 transition: all 200ms;
 font-size: 30px;
 font-weight: bold;
 text-decoration: none;
 color: #333;
}
.popup .close:hover {
 color: #06D85F;
}
.popup .content {
 max-height: 30%;
 overflow: auto;
}

@media screen and (max-width: 700px){
 .popup{
   width: 70%;
 }
}

table{
   border: 1px solid black;
}

tr {
   display: inline-block;
   
 }

 .custom-cell {
 max-width: 300px; /* Set the maximum width of the cell */
 word-wrap: break-word; /* Wrap the text when it exceeds the cell width */
 white-space: normal; /* Allow wrapping of long words */
 width: 150px;
 border: 2px solid black;
}


.box {
 display: flex;
 flex-direction: row;
 justify-content: left;
 align-items: center;
 width: 300px;
 border: 2px solid black;

}

td{
   padding: 5px;
}
</style>