<template>
  <div  class="border-bottom py-3">

      <strong style="font-size: large;">Scope of Work</strong>
      <label>
        <input type="radio" name="tab" value="yes" @click="show" />
        Yes
      </label>
      <label>
        <input type="radio" name="tab" value="no" @click="block" />
        No
        
      </label>
      <a style="float: right;" class="button" href="#open-modal">modify</a>

  <div class="scope-table">
    <table>
        <thead>
          <tr>
            <th>Scope of Work</th>
            <th>Scope</th>
            <th>Description</th>
          </tr>  
        </thead>
        <tbody>
          <tr>
            <td rowspan="2">
              <select v-model="displayedTemplate" @change="updateDisplayedTemplateItems" v-on:change="itemUpdated">
                <option value="">Choose Template</option>
                <option v-for="(displayedTemplate, displayIndex) in templates" :key="displayIndex" :value="displayedTemplate">{{ displayedTemplate.name }}</option>
              </select>
            </td>
            <td>
              <div v-for="(displayedSection, displayedSectionIndex) in selectedTemplateItems" :key="displayedSectionIndex">
                <p>{{ displayedSection.name }}</p>
                
                      <tr  v-for="(displayedItem, displayedItemIndex) in displayedSection.items" :key="displayedItemIndex">
                          <div>
                              <td style="border: 1px solid black; padding: 3px; text-align: center; background: rgb(251, 248, 253);" v-if="displayedItem.checked">{{ displayedItem.text }}</td>
                              <td  v-if="displayedItem.checked">{{ displayedItem.description }}</td>
                              
                          </div>
                      </tr>
              </div>
            </td>
          </tr>
        </tbody>
    </table>




  </div>
    
    

      <div id="open-modal" class="overlay">
          <div class="popup">
              <p>Scope of Workqq</p>
              <a class="close" href="#">&times;</a>
              <div class="content">
              <p for="template">Name</p>
              <div style="margin-bottom: 40px;">
                  <select class="custom-select" id="template" v-model="selectedTemplate" @change="updateSelectedTemplateItems">
                      <option v-for="(template, index) in templates" :key="index" :value="template">{{ template.name }}</option>
                  </select>
                </div>

                  <div class="custommade" v-for="(section, sectionIndex) in selectedTemplateItems" :key="sectionIndex">
                  <p>{{ section.name }}</p>
           
                  <table >
                      <thead>

                      </thead>
                      <tbody >
                      <tr class="tr-box"  v-for="(item, itemIndex) in section.items" :key="itemIndex">
                          <div  class="box">
                              <td  class="divider"><input type="checkbox" v-model="item.checked"></td>
                              <td class="custom-cell">{{ item.text }}</td>
                              <td  v-if="item.description"><input-field color="grey" width="180px" height="30px" v-model="item.description" /></td>
                              <td  v-else></td>
                              
                          </div>
                          
                      </tr>
                      
                      </tbody>
                  </table>
                
                  </div>
                  <div style="float: right; ">
                   <button style="background: #01bebe; width: 150px; height: 40px; border-radius: 5px;"><a href="#">cancel</a></button>
                  <button-component style="display: inline-block;" width="150px"  height="40px" color="transparent" text="Submit" @click="equalDisplay"/>
                </div>
              </div>
              </div>
            </div>
</div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      templates: [],
      displayedTemplate:[],
      displayedScope: [],
      selectedTemplate: [],
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
      

    
    };
  },

  methods: {
    itemUpdated(){
      const payload = {
          displayedTemplate: this.displayedTemplate,
          displayedItems: []
      };
      this.selectedTemplateItems.forEach((section) => {
          section.items.forEach((item) => {
          if (item.checked) {
              payload.displayedItems.push({
              text: item.text,
              description: item.description
              })
          }
          });
      });
			this.$emit('scopeOfWork_update', this.displayedTemplate)

		},

    updateScope() {
    console.log("save changes selectedscope", this.selectedScope)
    console.log("save changes selectedtemplateitem: ", this.selectedTemplateItems)
    // Update selectedScope based on the selectedTemplateItems
this.selectedScope = this.selectedTemplateItems
console.log("save changes selectedscope", this.selectedScope)
  .filter(item => item.checked)
  .map(item => item.text);

// Code to save changes to template and template items goes here
this.isModalOpen = false;
    // Code to save changes to template and template items goes here
    // this.updateScope();
    // this.isModalOpen = false;
  },
      saveChanges() {
    // Update selectedScope based on the selectedTemplateItems
this.selectedTemplate = this.selectedTemplateItems
  .filter(item => item.checked)
  .map(item => item.scope);
},
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

    updateSelectedTemplateItems() {
    const selectedTemplateScopes = this.selectedTemplate.fields.map(scope => scope.scope);
  

    this.selectedTemplateItems.forEach((itemGroup) => {
      itemGroup.items.forEach((item) => {
        item.checked = selectedTemplateScopes.includes(item.text);
      });
    });
  },
  updateDisplayedTemplateItems() {
    const selectedTemplateScopes = this.displayedTemplate.fields.map(scope => scope.scope);

    this.selectedTemplateItems.forEach((itemGroup) => {
      itemGroup.items.forEach((item) => {
        item.checked = selectedTemplateScopes.includes(item.text);
      });
    });
  },
  equalDisplay(){
    this.displayedTemplate = this.selectedTemplate
  },

    updateTemplateData() {
      const updatedScopes = this.selectedTemplateItems.filter(item => item.checked).map(item => {
        return {
          scope: item.text,
          description: item.description,
        };
      });

      const updatedTemplate = {
        ...this.selectedTemplate,
        scopes: updatedScopes,
      };

      axios.patch(`/api/patchData/${this.selectedTemplate.id}`, updatedTemplate)
        .then(response => {
          console.log(response.data);
        })
        .catch(error => {
          console.log(error);
        });
    },
    block() {
    const x = document.getElementsByClassName('scope-table');
    x[0].style.display = 'none';
  },
  show() {
    const x = document.getElementsByClassName('scope-table');
    x[0].style.display = 'block';
  }
  },

  mounted() {
    this.fetchTemplates();
  },
};
</script>

<style scoped>

.scope-table {
display: none;
}

.custom-select {
  width: 400px; /* set the width */
  height: 30px; /* set the height */
  background-color: #eff1f5; /* set the background color */
  border: none; /* remove the border */
  border-radius: 5px; /* add border radius */
  padding: 5px; /* add padding */
  font-size: 16px; /* set the font size */
  color: #333; /* set the font color */
}

/* .custommade{

} */
/* table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid black;
}

th:nth-child(1) {
width: 20%;
}

th:nth-child(2) {
width: 30%;
}

th:nth-child(3) {
width: 50%;
}

td{
border: 1px solid black;
} */

/* table{
 
} */

.tr-box {
  display: inline-block;

}

.custom-cell {
max-width: 300px; /* Set the maximum width of the cell */
word-wrap: break-word; /* Wrap the text when it exceeds the cell width */
white-space: normal; /* Allow wrapping of long words */
width: 150px;

}


.box {
display: flex;
flex-direction: row;
justify-content: left;
align-items: center;
width: 300px;
height: 55px;


}

td{
  padding: 5px;
  
}

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
</style>