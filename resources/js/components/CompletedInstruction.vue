<template>
<div style="margin-top:30px;" class="card mb-4 shadow">
<div class="card-body">

                        <!-- nav header -->
                            <ul class="tabs nav nav-tabs">
                                <li id="switch1" class="nav-item active">
                                    <span role="button" class="aw active customOpen " id="open" v-on:click="tabOpen()">Open</span>
                                </li>
                                <li id="switch2" class="nav-item">
                                    <span role="button" class="aw customCompleted teal2 " id="completed" v-on:click="tabComplete()">Completed</span>
                                </li>
                                <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                                    <div class="input-group input-group-sm">
                                        <span style="background-color:#f6f6f5;" class="input-group-text" id="inputGroup-sizing-sm">
                                            <i id="biru" class="fas fa-search">
                                            </i>
                                        </span>
                                        <input class="form-control" style="background-color: #f6f6f5; width:250px;"  type="text" v-model="search" id="search" placeholder="Search" @input="fetchData" />
                                    </div>
                                </form>

                                <li class="nav-item" style="float: right; margin-bottom: 10px;">
                                    <button style="border-color:#d4d4d4; width:100px; border-radius: 5px; font-weight:bold" id="putih" class="export btn btn-outline-secondary btn-sm"
                                    v-on:click="ExportExcel()"><i id="biru" class="fa-solid fa-file-export"></i>
                                    Export
                                    </button>
                                </li>
                            </ul>

<div class="overflow-auto"> 

    <!-- buttton create 3rd party -->
    <div id="btn-create" class="dropdown-center" style="float: right; margin-top: 20px; margin-right: 3px;">
      <button type="button" data-bs-toggle="dropdown" aria-expanded="false"
        style="border-color:#00bfbf; width:230px; height:35px; border-radius: 5px; background-color: #00bfbf; font-weight: 500;"
        class="btn btn-primary btn-sm">
        <i class="fa fa-plus"></i> Create 3rd Party Instruction
      </button>
      <ul class="dropdown-menu" style="width: 230px;">
        <li><a class="dropdown-item" role="button" style="font-size: small; font-weight: 500;" v-on:click="createLI()"><i
              id="biru" class="bi bi-truck icon" style="margin-right: 15px; font-size: larger;"></i>Logistic
            Instruction</a></li>
        <li><a class="dropdown-item" role="button" style="font-size: small; font-weight: 500;" v-on:click="createSI()"><i
              id="biru" class="bi bi-person-fill-gear icon" style="margin-right: 15px; font-size: larger;"></i>Service
            Instruction</a>
        </li>
      </ul>
    </div>

        <!-- tempat tabel -->
        <table id="tcomplete" class="sortable batas table table-hovers text-nowrap">

          <thead style="background-color: #b6bbc1; color:white">
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
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.assigned_vendor }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.attachment[0].created_at }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.attention_of }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.quotation_no }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'"> {{ item.customer_po }}</td>
              <td v-if="item.status=='Completed'||item.status=='Cancelled'">
                <p id="btn-complete" v-if="item.status == 'Completed'" class="btn badge badge-pill"
                  v-on:click="pushComplete(item._id)">{{ item.status }}</p>
                <!-- <button style="font-size: x-small;" id="btn-cancel" v-if="item[8]=='Completed'" class="btn btn-success btn-sm">{{ item[8] }}</button> -->

                <span style="margin-bottom: 0px; position:relative" v-if="item.status == 'Cancelled'">
                  <p id="btn-cancel" class="btn badge badge-pill"
                    v-on:click="pushComplete(item._id)">{{ item.status }}
                  </p>
                  <a data-bs-toggle="modal" data-bs-target="#modalCancelled" style="
                                                  position: absolute;
                                                  margin-left: -21px;
                                                  margin-top: 3px;
                                                  background-color:#4594d6
                                                  border: 1px solid black;
                                                  border-radius: 50%;
                                                  width: 20px;
                                                  font-size: 12px;
                                                  text-align: center;
                                                  text-decoration: none;
                                                  color: white;
                                              ">i
                    </a>
                </span>
              </td>
              <!-- <td v-for="(rowItem, rowIndex) in item" v-bind:key="rowIndex">                           
                {{ rowItemb }}                       
              </td>         -->
            </tr>
          </tbody>

        </table>

      <table id="topen" class="sortable batas table table-hovers text-nowrap">

      <thead style="background-color: #b6bbc1; color:white">
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
          <td v-if="item.status == 'In Progress' || item.status == 'Draft'"> {{ item.instruction_id }}</td>
          <td v-if="item.status == 'In Progress' || item.status == 'Draft'"> {{ item.link_to }}</td>
          <td v-if="item.status == 'In Progress' || item.status == 'Draft'" class="mid">
            <i v-if="item.instruction_type == 'Logistic Instruction'" class="bi bi-truck icon"></i>
            <i v-else class="bi bi-person-fill-gear icon"></i>
            {{ item.instruction_type }}
          </td>
          <td v-if="item.status == 'In Progress' || item.status == 'Draft'"> {{ item.assigned_vendor }}</td>
          <td v-if="item.status == 'In Progress' || item.status == 'Draft'"> {{ item.attachment[0].created_at }}</td>
          <td v-if="item.status == 'In Progress' || item.status == 'Draft'"> {{ item.attention_of }}</td>
          <td v-if="item.status == 'In Progress' || item.status == 'Draft'"> {{ item.quotation_no }}</td>
          <td v-if="item.status == 'In Progress' || item.status == 'Draft'"> {{ item.customer_po }}</td>
          <td v-if="item.status == 'In Progress' || item.status == 'Draft'">
            <p id="btn-progress" v-if="item.status == 'In Progress'" class="btn badge badge-pill"
              v-on:click="pushProgress(item._id)">{{ item.status }}</p>
            <!-- <button style="font-size: x-small;" id="btn-cancel" v-if="item[8]=='Completed'" class="btn btn-success btn-sm">{{ item[8] }}</button> -->
            <p id="btn-draft" v-if="item.status == 'Draft'" class="btn badge badge-pill"
              v-on:click="pushDraft(item._id)">{{ item.status }}</p>

          </td>
          <!-- <td v-for="(rowItem, rowIndex) in item" v-bind:key="rowIndex">                           
                {{ rowItemb }}                       
              </td>         -->
        </tr>
      </tbody>

      </table>

</div>
</div>

    <!-- tempat modal -->
    <modal-cancelled />

</div>
  
</template>

<script>
export default {

  data() {
    return {
      search: "",
      items: [],
    };
    },

  mounted() {
    this.fetchData();
    this.tabOpen();
    // this.fetchTemplates();
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
    pushComplete(index) {
      this.$router.push({ path: "/detailcomplete", query: { ID: index } })
    },

    pushCancel(index) {
      this.$router.push({ path: "/detailcancel", query: { ID: index } })
    },

    createLI() {
      this.$router.push({ path: "/new_logistic" })
    },

    createSI() {
      this.$router.push({ path: "/new_service" })
    },

    pushProgress(index) {
      this.$router.push({ path: "/details_rafli", query: { ID: index } })
    },

    pushDraft(index) {
      this.$router.push({ path: "/details_rafli", query: { ID: index } })
    },
    tabOpen(){
      const x = document.getElementById('topen');
      const y = document.getElementById('tcomplete');
      const z = document.getElementById('btn-create');
			x.style.display = 'inline-table';
      y.style.display = 'none';
      z.style.display = 'block';

      let completed = document.getElementById("completed");
      let open = document.getElementById("open");
        completed.classList.add("customCompleted");
        open.classList.add("teal");
      let open2 = document.getElementById("switch1");
      let completed2 = document.getElementById("switch2");
        completed2.classList.remove("active");
        open2.classList.add("active");
    },
    tabComplete(){
      const x = document.getElementById('topen');
      const y = document.getElementById('tcomplete');
      const z = document.getElementById('btn-create');
			x.style.display = 'none';
      y.style.display = 'inline-table';
      z.style.display = 'none';

      let completed = document.getElementById("completed");
      let open = document.getElementById("open");
        completed.classList.remove("customCompleted");
        open.classList.remove("teal");
      let open2 = document.getElementById("switch1");
      let completed2 = document.getElementById("switch2");
        completed2.classList.add("active");
        open2.classList.remove("active");
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
    ExportExcel(type, fn, dl) {
        var date = new Date().toLocaleDateString();
        var workbook = XLSX.utils.book_new();

        var ws1 = XLSX.utils.table_to_sheet(document.getElementById('topen'));
        XLSX.utils.book_append_sheet(workbook, ws1, "Open Instruction");
          
        var ws2 =  XLSX.utils.table_to_sheet(document.getElementById('tcomplete'));
        XLSX.utils.book_append_sheet(workbook, ws2, "Complete Instruction");
         
        return dl ?
        XLSX.write(workbook, { bookType: type, bookSST: true, type: 'base64' }) :
        XLSX.writeFile(workbook,fn || ('Instruction - '+date+ '.' + (type || 'xlsx')));

    },
  },

}
</script>

<style scoped>
.teal {
    color: #00bfbf;
    font-weight:500;
    font-size: large;
    margin-right: 30px;
    margin-left: 20px;
}

.teal2 {
    color: #00bfbf;
    font-weight:500;
    font-size: large;
}

.nav li.active {
    border-bottom: #00bfbf 3px solid;
}

.aw:hover{
  color: #00bfbf !important;
}

.customCompleted {
    font-weight:500;
    font-size: large;
    color: #adadad;
}

.customOpen {
    color: #adadad;
    font-weight:500;
    font-size: large;
    margin-right: 30px;
    margin-left: 20px;
  }

.table-hovers tbody tr:hover td,
.table-hover tbody tr:hover th {
  color: #00bfbf !important;
}

td {
  font-weight: 600;
  color: #5c5c5c;
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

#topen th,
td {
  font-size: small;
  text-align: center;
}

.batas {
  margin-top: 20px;
}

.cursor-pointer {
  cursor: pointer;
}

.icon {
  padding-right: 5px;
}

#btn-complete {
  --bs-btn-padding-y: none;
  width: 120px;
  border-radius: 50px;
  height:20px;
  color: white;
  background-color: #3da576;
}

#btn-cancel {
  --bs-btn-padding-y: none;
  width: 120px;
  border-radius: 50px;
  height:20px;
  color: white;
  background-color: #a2aab2;
}

#btn-progress {
  --bs-btn-padding-y: none;
  width: 120px;
  border-radius: 50px;
  height: 20px;
  color: #5a5a5a;
  background-color: #e1e7f3;
}

#btn-draft {
  --bs-btn-padding-y: none;
  width: 120px;
  border-radius: 50px;
  height: 20px;
  color: #5a5a5a;
  background-color: #f5f5f5;
}

#btn-complete:hover{
  color:none;
  background-color:#0a9d5bc9;
}

#btn-cancel:hover{
  color:none;
  background-color:#a2aab2c7;
}

.sort-up {
  position: absolute;
  margin-top: -8px;
}

.sort-down {
  position: absolute;
  margin-top: 8px;
}

.export:hover {
    color: #00000069 !important;
}
</style>