<template>
  <div class="container-box">
      <div class="content-box">
          <div  style="margin-bottom: 10px;" class="scope-of-work">

                  <strong style="font-size: large;">Scope of Work</strong>
                  <label>
                  <input type="radio" name="SoW" value="yes" @click="show_SoW" />
                  Yes
                  </label>
                  <label>
                  <input type="radio" name="SoW" value="no" @click="block_SoW" />
                  No
                  
                  </label>
              
              <a class="button"  style="float: right;"  href="#scope-modal">modify</a>
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
                                  <select v-model="displayedTemplate" @change="updateDisplayedTemplateItems">
                                  <option value="">Choose Template</option>
                                  <option v-for="(displayedTemplate, displayIndex) in templates" :key="displayIndex" :value="displayedTemplate">{{ displayedTemplate.name }}</option>
                                  </select>
                              </td>
                              <td>
                                  <div v-for="(displayedSection, displayedSectionIndex) in selectedTemplateItems" :key="displayedSectionIndex">
                                      <p><strong>{{ displayedSection.name }}</strong></p>
                                      <tr  v-for="(displayedItem, displayedItemIndex) in displayedSection.items" :key="displayedItemIndex">
                                          <div>
                                              <td  v-if="displayedItem.checked"  style="border: 1px solid black; padding: 3px; text-align: center; background: #fbf8fd;">{{ displayedItem.text }}</td>
                                              
                                              <td  v-if="displayedItem.checked">{{ displayedItem.description }}</td>
                                              
                                          </div>
                                      </tr>
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div id="scope-modal" class="overlay">
                  <div class="popup">
                      <p>Scope of Work</p>
                      <a class="close" href="#">&times;</a>
                      <div class="content">
                          <div class="SoW-content">
                              <p for="template">Name</p>
                              <div style="margin-bottom: 40px;">
                                  <select class="SoW-selectedTemplate" id="template" v-model="selectedTemplate" @change="updateSelectedTemplateItems">
                                      <option v-for="(template, index) in templates" :key="index" :value="template">{{ template.name }}</option>
                                  </select>
                              </div>
                              <div v-for="(section, sectionIndex) in selectedTemplateItems" :key="sectionIndex">
                                  <p>ini adalah{{ section.name }}</p>
                                  <table >
                                      <thead>
                                      </thead>
                                      <tbody >
                                          <tr class="SoW-tr-box"  v-for="(item, itemIndex) in section.items" :key="itemIndex">
                                              <div  class="SoW-box">
                                                  <td class="divider"><input type="checkbox" v-model="item.checked"></td>
                                                  <td class="SoW-custom-td">{{ item.text }}</td>
                                                  <td  v-if="item.description"><input-field color="grey" width="180px" height="30px" v-model="item.description" /></td>
                                                  <td  v-else></td>
                                              </div>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              <div style="float: right; ">
          
                                  <button-component  style="display: inline-block; margin-right: 10px;" width="150px"  height="40px" color="blue" :font-color="'black'" text="Cancel" @click="closemodal" />
                                  <button-component style="display: inline-block;" width="150px"  height="40px" color="transparent" text="Submit" @click="selectTemplate" />
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<!--                                        section break line                                -->
          <div class="cost-detail">
              <p>
                  <strong style="font-size: large;">Cost Detail</strong>
                  <label>
                      <input type="radio" name="cost-detail" value="yes" @click="show_costDetail" />
                      Yes
                  </label>
                  <label>
                      <input type="radio" name="cost-detail" value="no" @click="block_costDetail" />
                      No
                  </label>
              </p>

              <div class="cost-detail-table">
                  <table style="margin-bottom: 40px;">
                      <thead>
                          <tr>
                              <th><span class="required">*</span>Description</th>
                              <th><span class="required">*</span>QTY</th>
                              <th><span class="required">*</span>UOM</th>
                              <th><span class="required">*</span>Unit Price</th>
                              <th>GST/VAT(%)</th>
                              <th></th>
                              <th><span class="required">*</span>Currency</th>
                              <th>VAT Amount</th>
                              <th>Sub Total</th>
                              <th>Total</th>
                              <th></th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr class="custom-border" v-for="(item, index) in items" :key="index">
                              <!-- <td>  <input-field type="text" color="grey" width="150px" height="40px" placeholder="Enter description" v-model="item.description" /></td>
                              <td><input-field type="number" color="grey" width="100px" height="40px" placeholder="Enter a number" v-model="item.qty" /></td> -->
                              <td><input class="description" type="text" placeholder="Enter Description" v-model="item.description"></td>
                              <td><input class="qty" type="number" placeholder="Enter QTY" v-model.number="item.qty"></td>
                              <td>
                                  <select v-model="item.uom">
                                      <option value="SHP">SHP</option>
                                      <option value="TON">TON</option>
                                      <option value="ANN">ANN</option>
                                  </select>
                              </td>
                              <td><input class="unit-price" type="number" placeholder="Enter Unit Price" v-model.number="item.unitPrice"></td>
                              
                              <td><input  class="vat-amount" type="number" v-model.number="item.vatAmount"></td>
                              <td><i class="fa fa-arrow-right"></i></td>
                              <td>
                                  <select v-model="item.currency">
                                      <option value="USD">USD</option>
                                      <option value="AED">AED</option>
                                      <option value="AOA">AOA</option>
                                  </select>
                              </td>
                              <td>{{ getVatAmount(item) }}</td>
                              <td>{{ getSubTotal(item) }}</td>
                              <td>{{ getTotal(item) }}</td>
                              <td>
                                  <button-component icon="fa fa-minus " width="50px"  height="50px" color="grey" @click="removeRow(index)"  :disabled="items.length === 1" /></td>
                                  <td>
                                  <button-component icon="fa fa-plus" width="50px"  height="50px" color="blue" @click="addRow" />
                              </td>
                          </tr>
                          
                          <tr v-for="(total, currency) in currencyTotals()" :key="currency">
                              <td colspan="6"></td>
                              <td class="sum">{{ currency }}<small>(total)</small></td>
                              <td class="sum">{{ total.vatAmount.toFixed(2) }}</td>
                              <td class="sum">{{ total.subTotal.toFixed(2) }}</td>
                              <td class="sum">{{ total.total.toFixed(2) }}</td>
                              <td></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>

          <!--                                        section break line                                -->
          <div class="attachment-and-notes" style="margin-bottom: 50px;"> 
              <div class="container">
                  <div class="left">
                      <div>
                          <h6 >Attachments</h6>
                          <h6 v-if="fileName" class="file-name">
                          <span class="green">{{ fileName }}</span><br>
                          <span class="black"> by {{ uploader }} on {{ uploadDate }}</span>
                          </h6>
                      </div>
                      <input type="file" ref="fileInput" class="file-input" style="display:none;" @change="onFileChange">
                      <button-component  icon="fa fa-plus" text="Add Attachment" width="200px" height="37px" color="blue" @click.native="openFileInput"/>
                  </div>
                  <div class="right">
                      <h6>Notes</h6>
                      <textarea placeholder="Enter your notes here"></textarea>
                  </div>
              </div>
          </div>
          <div class="buttons" style="display: flex; flex-direction: row; justify-content: flex-end;">
              <button-component  style="margin: 5px;" width="150px"  height="40px" color="white" :font-color="'black'" text="Cancel" @click="closemodal" />
              <button-component style="border: 1px solid black; margin: 5px;" width="150px"  height="40px" color="white" :font-color="'black'" text="Save as Draft" @click="submitFormDraft" />
              <button-component style=" margin: 5px;" width="150px"  height="40px" color="blue" text="Submit" @click="submitFormCompleted" />
          </div>
      </div>
  </div>
</template>



<script>
import axios from 'axios';

export default {
  data() {
    return {
      // scope of work data section
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

      // cost detail data section
      items: [{ description: '', qty: '', uom: 'SHP', unitPrice: '', vatAmount: 0, currency: 'USD' }],
  latestIndex: 0,

      // attachment and notes data section
      fileName: '',
      uploader: '',
      uploadDate: ''
    
    };
  },

  methods: {
       // scope of work method section
      block_SoW() {
    const x = document.getElementsByClassName('scope-table');
    x[0].style.display = 'none';
  },
  show_SoW() {
    const x = document.getElementsByClassName('scope-table');
    x[0].style.display = 'block';
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
          console.log("ini", this.selectedTemplate)

          this.selectedTemplateItems.forEach((itemGroup) => {
              itemGroup.items.forEach((item) => {
              item.checked = selectedTemplateScopes.includes(item.text);
              });
          });
      },

      updateDisplayedTemplateItems() {
          const selectedTemplateScopes = this.displayedTemplate.fields.map(scope => scope.scope);
          console.log("ini display", this.displayedTemplate)

          this.selectedTemplateItems.forEach((itemGroup) => {
              itemGroup.items.forEach((item) => {
              item.checked = selectedTemplateScopes.includes(item.text);
              });
          });
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
      selectTemplate() {
          this.displayedTemplate = this.selectedTemplate;
          window.location.hash = '';
      },
      closemodal(){
          window.location.hash = '';
      },

      

      // cost detail method section

      block_costDetail() {
    const x = document.getElementsByClassName('cost-detail-table');
    x[0].style.display = 'none';
  },

  show_costDetail() {
    const x = document.getElementsByClassName('cost-detail-table');
    x[0].style.display = 'block';
  },

      getVatAmount(item) {
  return ((item.vatAmount / 100) * item.unitPrice * item.qty).toFixed(2)
  },

  getSubTotal(item) {
  return (item.unitPrice * item.qty).toFixed(2)
  },

  getTotal(item) {
  return (Number(this.getSubTotal(item)) + Number(this.getVatAmount(item))).toFixed(2)
  },

      addRow() {
  this.items.push({
    description: '',
    qty: '',
    uom: 'SHP',
    unitPrice: '',
    vatAmount: 0,
    currency: 'USD'
  })
  this.latestIndex = this.items.length - 1
  },

  removeRow(index) {
  this.items.splice(index, 1)
  this.latestIndex = this.items.length - 1
  },

      currencyTotals() {
      const currencyTotals = {};
      this.items.forEach((item) => {
  const currency = item.currency;

      if (!currencyTotals[item.currency]) {
        currencyTotals[item.currency] = {
          vatAmount: 0,
          subTotal: 0,
          total: 0
        };
      }
      currencyTotals[currency].vatAmount += Number(this.getVatAmount(item));
      currencyTotals[currency].subTotal += Number(this.getSubTotal(item));
      currencyTotals[currency].total += Number(this.getTotal(item));
      });
      return currencyTotals;
      },

      // attachment and notes method section
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
      },
      async submitFormCompleted() {
          const payload = {
          status: 'completed',
          items: this.items,
          fileName: this.fileName,
          uploader: this.uploader,
          uploadDate: this.uploadDate,
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

    // Mock response data
    const responseData = {
      success: true,
      message: 'Data submitted successfully',
    };

    try {
      const response = await axios.post('api/postData', payload);
      console.log("data di post", payload)
      console.log(response.data);
      // Handle successful response
    } catch (error) {
      console.error(error);
      // Handle error response
    }
  },

  async submitFormDraft() {
          const payload = {
          status: 'draft',
          items: this.items,
          fileName: this.fileName,
          uploader: this.uploader,
          uploadDate: this.uploadDate,
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

    // Mock response data
    const responseData = {
      success: true,
      message: 'Data submitted successfully',
    };

    try {
      const response = await axios.post('api/postData', payload);
      console.log("data di post", payload)
      console.log(response.data);
      // Handle successful response
    } catch (error) {
      console.error(error);
      // Handle error response
    }
  },
  },

  mounted() {
    this.fetchTemplates();
  },
};
</script>

<style scoped>

/* CSS for container */
.container-box{
display: flex;
justify-content: center;
background-color: #fbf8fd;
min-height: 100vh;
}

.content-box{
width: 1400px;
display: flex;
flex-direction: column;
padding: 30px;
background-color: #fefefe;
min-height: 80vh;
}

/* CSS for SoW */
.scope-table {
display: none;
}

.scope-table table {
  border-collapse: collapse;
border-spacing: 0;
width: 100%;
}

.scope-table th:nth-child(1) {
width: 50px; /* set the width to 200 pixels */
}
.scope-table th:nth-child(2) {
width: 100px; /* set the width to 200 pixels */
}
.scope-table th:nth-child(3) {
width: 100px; /* set the width to 200 pixels */
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

.SoW-selectedTemplate {
  width: 400px; /* set the width */
  height: 30px; /* set the height */
  background-color: #eff1f5; /* set the background color */
  border: none; /* remove the border */
  border-radius: 5px; /* add border radius */
  padding: 5px; /* add padding */
  font-size: 16px; /* set the font size */
  color: #333; /* set the font color */
}

.SoW-tr-box {
  display: inline-block;

}

.SoW-box {
display: flex;
flex-direction: row;
justify-content: left;
align-items: center;
width: 300px;
height: 55px;
}

.SoW-custom-td {
max-width: 300px; /* Set the maximum width of the cell */
word-wrap: break-word; /* Wrap the text when it exceeds the cell width */
white-space: normal; /* Allow wrapping of long words */
width: 150px;

}
.SoW-content td {
  padding: 5px;

}

/* CSS for Cost Detail */

.cost-detail-table{
  display: none;
}
.cost-detail-table label {
display: inline-block;
margin-right: 1px;
}

.cost-detail-table input[type="radio"] {
display: inline-block;
margin-right: 1px;
margin-left: 20px;
}

.cost-detail-table .cost-data {
display: none;
}

.cost-detail-table table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid black;
}

.cost-detail-table thead {
background-color: #bbbfc7;
}

.cost-detail-table th .required {
color: red;
margin-right: 5px;
}

.cost-detail-table th {
color: #feffff;
font-size: 90%;
}

.cost-detail-table .custom-border {
border-bottom: 1px solid black;
}

.cost-detail-table td {
padding: 5px;
}

.cost-detail-table td input[type="text"],
.cost-detail-table td input[type="number"],
.cost-detail-table td select {
padding: 10px;
background-color: #fbfbfe;
box-shadow: 0px 0px 5px #ccc;
border-radius: 5px;
}

.cost-detail-table .description,
.cost-detail-table .qty,
.cost-detail-table .uom,
.cost-detail-table .unit-price,
.cost-detail-table .vat-amount,
.cost-detail-table .currency {
flex: 1;
}

.cost-detail-table .qty,
.cost-detail-table .vat-amount {
width:100px
}

.cost-detail-table .unit-price {
width:120px
}

.cost-detail-table .sum {
background-color: #f9f6fb;
}

/* CSS for attachment and notes */

.attachment-and-notes .container {
display: flex;
}

.attachment-and-notes .left, .attachment-and-notes .right{
height: 100px;
}

.attachment-and-notes .left {
flex: 1;
margin-right: 20px;
}

.attachment-and-notes .right {
flex: 1;
}

.attachment-and-notes textarea {
width: 100%;
height: 100px;
background: rgb(255, 252, 252);
border: 1px solid rgb(219, 216, 216);
}

.attachment-and-notes .green {
color: green;
}

.attachment-and-notes .black {
color: black;
}


</style>