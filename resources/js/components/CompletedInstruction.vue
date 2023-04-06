<template>
  <div class="card mb-4 shadow">
    <div class="card-body">

      <ul class="nav nav-tabs">

        <!-- <li class="nav-item">
          <router-link to="/open" class="nav-link customOpen teal" id="open">Open</router-link>
          <a id="open" class="nav-link active" href="#">Open</a>
        </li> -->

        <li class="nav-item">
          <!-- <router-link to="/completed" class="nav-link customCompleted" id="completed">Completed</router-link> -->

          <!-- manatau butuh -->
          <!-- <a id="completed" class="nav-link cursor-pointer" aria-current="page" v-on:click="getData()">Get</a> -->
        </li>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
          <div class="input-group input-group-sm">
            <span class="input-group-text" id="inputGroup-sizing-sm">
              <i id="biru" class="fas fa-search">
              </i>
            </span>
            <input class="form-control"  type="text" v-model="search" id="search" placeholder="Search" @input="fetchData" />
          </div>
        </form>


        <li class="nav-item" style="float: right;">
          <button style="border-color:#d4d4d4; font-weight:bold" id="putih" class="btn btn-outline-secondary btn-sm"
            v-on:click="ExportExcel('tcomplete', 'Tab-complete')"><i id="biru" class="fa-solid fa-file-export"></i>
            Export
          </button>
        </li>

      </ul>


      <!-- tempat tabel complete -->

      <div class="overflow-auto">
        <!-- <div class="table-responsive ">   -->

        <table id="tcomplete" class="sortable batas table table-hovers text-nowrap">

          <thead class="text-bg-secondary">
            <tr>
              <th>Instruction ID
                <div class="btn-group-vertical cursor-pointer" role="group">
                  <div style="font-size: xx-small; padding-left: 2px;" class="btn1 btn-group-vertical" role="group"
                    aria-label="Vertical radio toggle button group">
                    <i style="color:white" class="bi bi-caret-up-fill sort-up" v-on:click="sortRecordsAsc(0)"></i>
                    <a style="color:white" class="bi bi-caret-down-fill sort-down" v-on:click="sortRecordsDesc(0)"></a>
                  </div>
                </div>
              </th>
              <th>Link To
                <div class="btn-group-vertical cursor-pointer" role="group">
                  <div style="font-size: xx-small; padding-left: 5px;" class="btn2 btn-group-vertical" role="group"
                    aria-label="Vertical radio toggle button group">
                    <i style="color:white" class="bi bi-caret-up-fill sort-up" v-on:click="sortRecordsAsc(1)"></i>
                    <a style="color:white" class="bi bi-caret-down-fill sort-down" v-on:click="sortRecordsDesc(1)"></a>
                  </div>
                </div>
              </th>
              <th>Instruction Type
                <div class=" btn-group-vertical cursor-pointer" role="group">
                  <div style="font-size: xx-small; padding-left: 5px;" class="btn3 btn-group-vertical" role="group"
                    aria-label="Vertical radio toggle button group">
                    <i style="color:white" class="bi bi-caret-up-fill sort-up" v-on:click="sortRecordsAsc(2)"></i>
                    <a style="color:white" class="bi bi-caret-down-fill sort-down" v-on:click="sortRecordsDesc(2)"></a>
                  </div>
                </div>
              </th>
              <th>Issued To
                <div class=" btn-group-vertical cursor-pointer" role="group">
                  <div style="font-size: xx-small; padding-left: 5px;" class="btn4 btn-group-vertical" role="group"
                    aria-label="Vertical radio toggle button group">
                    <i style="color:white" class="bi bi-caret-up-fill sort-up" v-on:click="sortRecordsAsc(3)"></i>
                    <a style="color:white" class="bi bi-caret-down-fill sort-down" v-on:click="sortRecordsDesc(3)"></a>
                  </div>
                </div>
              </th>
              <th>Issued Date
                <div class=" btn-group-vertical cursor-pointer" role="group">
                  <div style="font-size: xx-small; padding-left: 5px;" class="btn5 btn-group-vertical" role="group"
                    aria-label="Vertical radio toggle button group">
                    <i style="color:white" class="bi bi-caret-up-fill sort-up" v-on:click="sortRecordsAsc(4)"></i>
                    <a style="color:white" class="bi bi-caret-down-fill sort-down" v-on:click="sortRecordsDesc(4)"></a>
                  </div>
                </div>
              </th>
              <th>Attention Of
                <div class=" btn-group-vertical cursor-pointer" role="group">
                  <div style="font-size: xx-small; padding-left: 5px;" class="btn6 btn-group-vertical" role="group"
                    aria-label="Vertical radio toggle button group">
                    <i style="color:white" class="bi bi-caret-up-fill sort-up" v-on:click="sortRecordsAsc(5)"></i>
                    <a style="color:white" class="bi bi-caret-down-fill sort-down" v-on:click="sortRecordsDesc(5)"></a>
                  </div>
                </div>
              </th>
              <th>Quotation No.
                <div class=" btn-group-vertical cursor-pointer" role="group">
                  <div style="font-size: xx-small; padding-left: 5px;" class="btn7 btn-group-vertical" role="group"
                    aria-label="Vertical radio toggle button group">
                    <i style="color:white" class="bi bi-caret-up-fill sort-up" v-on:click="sortRecordsAsc(6)"></i>
                    <a style="color:white" class="bi bi-caret-down-fill sort-down" v-on:click="sortRecordsDesc(6)"></a>
                  </div>
                </div>
              </th>
              <th>Customer PO
                <div class=" btn-group-vertical cursor-pointer" role="group">
                  <div style="font-size: xx-small; padding-left: 5px;" class="btn8 btn-group-vertical" role="group"
                    aria-label="Vertical radio toggle button group">
                    <i style="color:white" class="bi bi-caret-up-fill sort-up" v-on:click="sortRecordsAsc(7)"></i>
                    <a style="color:white" class="bi bi-caret-down-fill sort-down" v-on:click="sortRecordsDesc(7)"></a>
                  </div>
                </div>
              </th>
              <th style="text-align: center;">Status
                <div class=" btn-group-vertical cursor-pointer" role="group">
                  <div style="font-size: xx-small; padding-left: 5px;" class="btn9 btn-group-vertical" role="group"
                    aria-label="Vertical radio toggle button group">
                    <i style="color:white" class="bi bi-caret-up-fill sort-up" v-on:click="sortRecordsAsc(8)"></i>
                    <a style="color:white" class="bi bi-caret-down-fill sort-down" v-on:click="sortRecordsDesc(8)"></a>
                  </div>
                </div>
              </th>
            </tr>
          </thead>

          <tbody class="cursor-pointer">
            <tr v-for="(item, index) in items" v-bind:key="index">
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.instruction_id }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.link_to }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'" class="mid">
                <i v-if="item.instruction_type == 'Logistic Instruction'" class="bi bi-truck icon"></i>
                <i v-else class="bi bi-person-fill-gear icon"></i>
                {{ item.instruction_type }}
              </td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.invoice_to }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.attachment[0].created_at }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.attention_of }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.quotation_no }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.customer_po }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'">
                <p id="btn-cancel" v-if="item.status == 'Completed'" class="btn btn-success badge badge-pill bg-success"
                  v-on:click="pushComplete(item.instruction_id)">{{ item.status }}</p>
                <!-- <button style="font-size: x-small;" id="btn-cancel" v-if="item[8]=='Completed'" class="btn btn-success btn-sm">{{ item[8] }}</button> -->

                <span style="margin-bottom: 0px; position:relative" v-if="item.status == 'Cancelled'">
                  <p id="btn-cancel" class="btn btn-secondary badge badge-pill bg-secondary"
                    v-on:click="pushCancel(item.instruction_id)">{{ item.status }}
                    <a data-bs-toggle="popover" data-bs-placement="top" style="
                                                  position: absolute;
                                                  margin-left: 10px;
                                                  margin-top: -1px;
                                                  background-color:#0F6EC4
                                                  border: 1px solid black;
                                                  border-radius: 50%;
                                                  width: 15px;
                                                  font-size: 12px;
                                                  text-align: center;
                                                  text-decoration: none;
                                                  color: white;
                                              ">i
                    </a>
                  </p>
                </span>
              </td>
              <!-- <td v-for="(rowItem, rowIndex) in item" v-bind:key="rowIndex">                           
                {{ rowItemb }}                       
              </td>         -->
            </tr>
          </tbody>

        </table>

      </div>
    </div>
  </div>
</template>

<script>
// import { mapGetters } from 'vuex'


// var popoverTriggerList = [].slice.call(
//   document.querySelectorAll('[data-bs-toggle="popover"]')
// );
// var popoverList = popoverTriggerList.map(function (
//   popoverTriggerEl
// ) {
//   return new bootstrap.Popover(popoverTriggerEl);
// });


export default {


  computed: {
    // ...mapGetters({
    //   list :'example/getData'
    // })
  },

  mounted() {
    this.fetchData();
    // this.fetchTemplates();

    let completed = document.getElementById("completed");
    let open = document.getElementById("open");
    completed.addEventListener("click", function () {
      completed.classList.toggle("nav-link active");
      open.classList.toggle("nav-link active");
    });
  },


  methods: {

    async fetchData() {
      if (this.search.length === 0) {
        // Jika input kosong, ambil data dari API show
        const response = await axios.get("http://127.0.0.1:8000/api/instruction/");
        this.items = response.data.data;
      } else {
        // Jika input tidak kosong, ambil data dari API search
        const response = await axios.get("http://127.0.0.1:8000/api/instruction/search/", {
          params: {
            key: this.search,
          },
        });
        this.items = response.data.data;
      }
    },
    

    // fetchTemplates() {
    //   axios.get('http://127.0.0.1:8000/api/instruction')
    //     .then(response => {
    //       console.log(response.data.data);
    //       this.items=response.data.data;
    //       // this.items=response.data.data;
    //     })
    //     .catch(error => {
    //       console.log(error);
    //     });
    // },

    pushComplete(index) {
      this.$router.push({ path: "/detailcomplete", query: { InstructionID: index } })
    },

    pushCancel(index) {
      this.$router.push({ path: "/detailcancel", query: { InstructionID: index } })
    },

    addToggleIconListener(buttonClass) {
      const button = document.querySelector(buttonClass);
      button.addEventListener("click", function () {
        const icon = button.querySelector("i");
        const icon2 = button.querySelector("a");
        icon.classList.remove("bi-caret-up-fill");
        // icon.classList.add("bi-caret-up-fill");
        icon2.classList.add("bi-caret-down-fill");
        // icon2.classList.add("bi-caret-down");
      });
    },
    addToggleIconListener2(buttonClass) {
      const button = document.querySelector(buttonClass);
      button.addEventListener("click", function () {
        const icon = button.querySelector("i");
        const icon2 = button.querySelector("a");
        icon.classList.add("bi-caret-up-fill");
        // icon.classList.add("bi-caret-up");
        // icon2.classList.remove("bi-caret-down");
        icon2.classList.remove("bi-caret-down-fill");
      });
    },


    ExportExcel(tableID, filename = '') {
      var downloadLink;
      var dataType = 'application/vnd.ms-excel';
      var tableSelect = document.getElementById(tableID);
      var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

      filename = filename ? filename + '.xls' : 'excel_data.xls';

      downloadLink = document.createElement("a");

      document.body.appendChild(downloadLink);

      if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['\ufeff', tableHTML], {
          type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
      }

      else {
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        downloadLink.download = filename;

        downloadLink.click();
      }

    },


    sortRecordsAsc(index) {
      this.addToggleIconListener(".btn1");
      this.addToggleIconListener(".btn1");
      this.addToggleIconListener(".btn2");
      this.addToggleIconListener(".btn3");
      this.addToggleIconListener(".btn4");
      this.addToggleIconListener(".btn5");
      this.addToggleIconListener(".btn6");
      this.addToggleIconListener(".btn7");
      this.addToggleIconListener(".btn8");
      this.addToggleIconListener(".btn9");
      this.items = this.items.sort(
        (itemA, itemB) => {
          return itemB[index] < (itemA[index]) ? 1 : -1;
        }
      )
    },

    sortRecordsDesc(index) {
      this.addToggleIconListener2(".btn1");
      this.addToggleIconListener2(".btn2");
      this.addToggleIconListener2(".btn3");
      this.addToggleIconListener2(".btn4");
      this.addToggleIconListener2(".btn5");
      this.addToggleIconListener2(".btn6");
      this.addToggleIconListener2(".btn7");
      this.addToggleIconListener2(".btn8");
      this.addToggleIconListener2(".btn9");
      this.items = this.items.sort(
        (itemA, itemB) => {
          return itemA[index] < (itemB[index]) ? 1 : -1;
        }
      )
    },
  },

  data() {
    return {
      term: '',
      fields: [
        "Instruction ID",
        "Link To",
        "Instruction Type",
        "Issued To",
        "Issued Date",
        "Attention Of",
        "Quotation No.",
        "Customer PO",
        "Status"
      ],
      items: [],
      search: ""
    }
  }
}
</script>

<style scoped>
.btn:hover {
  color: #00bfbf !important;
}

.table-hovers tbody tr:hover td,
.table-hover tbody tr:hover th {
  color: #00bfbf !important;
}

td {
  font-weight: 600;
  color: #949494;
}

.teal {
  color: #00bfbf;
}

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}

.mid {
  text-align: center;
}

#warna {
  background-color: #585759;
}

.warna {
  background-color: #585759;
}

#biru {
  color: #14cedb;
}

#putih {
  background-color: white;
  color: black;
}

#tcomplete th,
td {
  font-size: small;
  text-align: center;
}



.batas {
  margin-top: 30px;
}

.cursor-pointer {
  cursor: pointer;
}

.icon {
  padding-right: 5px;
}

#btn-cancel {
  --bs-btn-padding-y: none;
  padding-left: 30px;
  padding-right: 30px;
  border-radius: 50px;
}

.sort-up {
  position: absolute;
  margin-top: -8px;
}

.sort-down {
  position: absolute;
  margin-top: 8px;
}</style>