<template>
        <div class="container shadow-lg pb-5" style=" margin-top:30px; background-color: white">
            <article class="container">
                <nav class="grid" style="margin-bottom: 30px;">
                    <div class="row" style="margin-top:30px;">
                        <div class="col-10 flex align-items-center gap-1">
                            <button-component v-on:click="push()" cursor text="Back" icon="bi bi-chevron-left" warna="#00bfbf" color="none" style="margin-top: 10px; font-size:medium; color:black" bold/>
                        </div>
                    </div>
                </nav>
                <section class="mb-3 bdrtop bdrbottom bdrleft bdrright">
                    <div class="row">
                        <div class="col-8" style="">
                            <div class="row mt-3 ms-3">
                                <div class="col">
                                    <span>Type</span>
                                    <p>
                                        <b v-if="list[0].instruction_type=='Logistic Instruction'">
                                            <i style="color:#00bfbf" class="bi bi-truck icon"></i>
                                            {{list[0].instruction_type}}</b
                                        >
                                        <b v-else>
                                            <i style="color:#00bfbf" class="bi bi-person-fill-gear icon"></i>
                                            {{list[0].instruction_type}}</b
                                        >
                                    </p>
                                </div>
                                <div class="col">
                                    <span>LI No.</span>
                                    <p><b>{{list[0].instruction_id}}</b></p>
                                </div>
                                <div class="col">
                                    <span>Attention Of</span>
                                    <p><b>{{list[0].attention_of}}</b></p>
                                </div>
                            </div>
                            <div class="row ms-3 mt-5">
                                <div class="col">
                                    <span>Issued To</span>
                                    <p><b>{{list[0].assigned_vendor}}</b></p>
                                </div>
                                <div class="col">
                                    <span>Vendor Reference No.</span>
                                    <p><b>{{list[0].quotation_no}}</b></p>
                                </div>
                                <div class="col">
                                    <span>Vendor Address</span>
                                    <p><b>{{list[0].vendor_address}}</b></p>
                                </div>
                            </div>
                            <div class="row ms-3 mt-5">
                                <div class="col">
                                    <span>Invoice To</span>
                                    <p><b>{{list[0].invoice_to}}</b></p>
                                </div>
                                <div class="col"><span>Base</span></div>
                                <div class="col">
                                    <span>Delivery Date</span>
                                    <p><b>{{ list[0].attachment[0].created_at }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" style="">
                            <div class="row bdr-pts mt-3">
                                <div class="col">
                                    <span>Customer</span>
                                    <p>
                                        <b
                                            >{{list[0].customer_contract}}</b
                                        >
                                    </p>
                                </div>
                                <div class="col">
                                    <span style="margin-left: 30px"
                                        >Status</span
                                    >
                                    <p
                                        v-if="list[0].status=='Completed'"
                                        id="btn-cancel"
                                        style="position: relative"
                                    >
                                        <a href="#" class="btn-yoga1"
                                            >{{list[0].status}}</a
                                        >
                                    </p>
                                    <p
                                        v-else
                                        id="btn-cancel"
                                        style="position: relative"
                                    >
                                        <a href="#" class="btn-yoga disabled"
                                            >{{list[0].status}}</a
                                        >
                                        <a
                                            href="#"
                                            data-bs-toggle="popover"
                                            data-bs-placement="top"
                                            data-bs-content="Intinya mah cancel, jangan banyak tanya kamu ! xixi"
                                            style="
                                                position: absolute;
                                                margin-left: -28px;
                                                margin-top: 2px;
                                                background-color: blue;
                                                border: 1px solid black;
                                                border-radius: 50%;
                                                width: 25px;
                                                font-size: 14px;
                                                text-align: center;
                                                text-decoration: none;
                                                color: white;
                                            "
                                            >i</a>
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <span>Customer PO</span>
                                    <p><b>{{list[0].customer_po}}</b></p>
                                </div>
                                <div class="mb-4">
                                    <span>Customer Ref</span>
                                    <p><b></b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <div class="d-flex pt-3 bdrtop">
                            <div class="me-3">
                                <p><b>Item</b></p>
                            </div>
                            <div class="form-check me-3">
                                <label
                                    class="form-check-label"
                                >
                                    Yes
                                </label>
                                <input
                                    v-if="cost[0]._id!=null"
                                    class="form-check-input"
                                    disabled
                                    type="radio"
                                    checked
                                />
                                <input
                                    v-else
                                    class="form-check-input"
                                    disabled
                                    type="radio"
                                />
                            </div>
                            <div class="form-check">
                                <label
                                    class="form-check-label"
                                >
                                    No
                                </label>
                                <input
                                    v-if="cost[0]._id==null"
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                    checked
                                />
                                <input
                                    v-else
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                />
                            </div>
                            <div style="margin-left: auto; margin-top: -7px">
                                <button
                                    v-if="cost[0]._id!=null"
                                    class="btn btn6 btn-outline-success"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample5"
                                    aria-expanded="false"
                                    aria-controls="collapseExample"
                                >
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample5">
                            <div class="card card-body">
                                <table class="table bdrleft bdrright">
                                    <thead class="text-bg-secondary">
                                        <tr>
                                            <th>Item Description</th>
                                            <th class="text-end">Lot No.</th>
                                            <th class="text-end">Qty (PCS)</th>
                                            <th class="text-end">
                                                Estimate Footage
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Tubing, 4 1/2"", 12 PPF, 13CR80,
                                                JFE BEAR, R1
                                            </td>
                                            <td class="text-end">
                                                PO-200013-A
                                            </td>
                                            <td class="text-end">5.00</td>
                                            <td class="text-end">64.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div v-if="list[0].instruction_type!='Service Instruction'">
                        <div class="d-flex pt-3 bdrtop">
                            <div class="me-3">
                                <p><b>Transport</b></p>
                            </div>
                            <div class="form-check me-3">
                                <label
                                    class="form-check-label"
                                >
                                    Yes
                                </label>
                                <input 
                                    v-if="cost[0]._id!=null"
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                    checked                                    
                                />
                                <input 
                                    v-else
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                    
                                />
                            </div>
                            <div class="form-check">
                                <label
                                    class="form-check-label"
                                >
                                    No
                                </label>
                                <input
                                    v-if="cost[0]._id==null"
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                    checked
                                />
                                <input
                                    v-else
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                />
                            </div>
                            <div style="margin-left: auto; margin-top: -7px">
                                <button
                                    v-if="cost[0]._id!=null"
                                    class="btn btn7 btn-outline-success"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample6"
                                    aria-expanded="false"
                                    aria-controls="collapseExample"
                                >
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample6">
                            <div class="card card-body">
                                <table class="table bdrleft bdrright">
                                    <thead class="text-bg-secondary">
                                        <tr>
                                            <th>Transport Mode</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>sea</td>
                                            <td>FCL - Container</td>
                                            <td>Sea transportation</td>
                                        </tr>
                                        <tr>
                                            <td>land</td>
                                            <td>Truck</td>
                                            <td>Land transportation</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3 bdrtop">
                        <div class="d-flex">
                            <div class="me-3">
                                <p><b>Scope of Work</b></p>
                            </div>
                            <div class="form-check me-3">
                                <label
                                    class="form-check-label"
                                >
                                    Yes
                                </label>
                                <input
                                    v-if="cost[0]._id!=null"
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                    checked
                                />
                                <input
                                    v-else
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                />
                            </div>
                            <div class="form-check">
                                <input
                                    v-if="cost[0]._id==null"
                                    class="form-check-input"
                                    disabled
                                    type="radio"
                                    checked
                                />
                                <input
                                    v-else
                                    class="form-check-input"
                                    disabled
                                    type="radio"
                                />
                                <label
                                    class="form-check-label"
                                >
                                    No
                                </label>
                            </div>
                            <div style="margin-left: auto; margin-top: -7px">
                                <button
                                    v-if="cost[0]._id!=null"
                                    class="btn btn5 btn-outline-success"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample4"
                                    aria-expanded="false"
                                    aria-controls="collapseExample"
                                >
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                        </div>
                        <div class="collapse mb-3" id="collapseExample4">
                            <div class="card card-body">
                                <table class="table bdrleft bdrright">
                                    <thead class="text-bg-secondary">
                                        <tr>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>UOM</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-bottom: #e4e4e4">
                                                <b>Custom</b>
                                            </td>

                                            <td style="border-bottom: #e4e4e4">
                                                <b>Scopes</b>
                                            </td>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td style="border-bottom: #e4e4e4">
                                                <button
                                                    class="btn btn-secondary disabled"
                                                >
                                                    MHE & Equipment
                                                </button>
                                            </td>
                                            <td style="border-bottom: #e4e4e4">
                                                test
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td>
                                                <button
                                                    class="btn btn-secondary disabled"
                                                >
                                                    Other
                                                </button>
                                            </td>
                                            <td>test</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td style="border-bottom: #e4e4e4">
                                                <b>Documents</b>
                                            </td>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td style="border-bottom: #e4e4e4">
                                                <button
                                                    class="btn btn-secondary disabled"
                                                >
                                                    Copy of BL
                                                </button>
                                            </td>
                                            <td style="border-bottom: #e4e4e4">
                                                test
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td style="border-bottom: #e4e4e4">
                                                <button
                                                    class="btn btn-secondary disabled"
                                                >
                                                    Surrender BL
                                                </button>
                                            </td>
                                            <td style="border-bottom: #e4e4e4">
                                                test
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td style="border-bottom: #e4e4e4">
                                                <button
                                                    class="btn btn-secondary disabled"
                                                >
                                                    Original BL
                                                </button>
                                            </td>
                                            <td style="border-bottom: #e4e4e4">
                                                test
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td style="border-bottom: #e4e4e4">
                                                <button
                                                    class="btn btn-secondary disabled"
                                                >
                                                    Invoice
                                                </button>
                                            </td>
                                            <td style="border-bottom: #e4e4e4">
                                                test
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td style="border-bottom: #e4e4e4">
                                                <button
                                                    class="btn btn-secondary disabled"
                                                >
                                                    Packing List
                                                </button>
                                            </td>
                                            <td style="border-bottom: #e4e4e4">
                                                test
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td style="border-bottom: #e4e4e4">
                                                <button
                                                    class="btn btn-secondary disabled"
                                                >
                                                    Storage Compound
                                                </button>
                                            </td>
                                            <td style="border-bottom: #e4e4e4">
                                                test
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <button
                                                    class="btn btn-secondary disabled"
                                                >
                                                    Other
                                                </button>
                                            </td>
                                            <td>test</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3 bdrtop">
                        <div class="d-flex">
                            <div class="me-3">
                                <p><b>Cost Detail</b></p>
                            </div>
                            <div class="form-check me-3">
                                <label
                                    class="form-check-label"
                                >
                                    Yes
                                </label>
                                <input 
                                    v-if="cost[0]._id!=null"
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                    checked
                                />
                                <input 
                                    v-else
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                />
                            </div>
                            <div class="form-check">
                                <input
                                    v-if="cost[0]._id==null"
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                    checked
                                />
                                <input 
                                    v-else
                                    class="form-check-input"
                                    type="radio"
                                    disabled
                                />
                                <label
                                    class="form-check-label"
                                >
                                    No
                                </label>
                            </div>
                            <div style="margin-left: auto; margin-top: -7px">
                                <button
                                    v-if="cost[0]._id!=null"
                                    class="btn btn4 btn-outline-success"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample3"
                                    aria-expanded="false"
                                    aria-controls="collapseExample"
                                    v-on:click="jumlah()"
                                >
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                        </div>
                        <div
                            class="collapse mb-3 bdrright bdrleft bdrbottom bdrtop"
                            id="collapseExample3"
                        >
                            <div class="card card-body">
                                <table id="costable" class="table">
                                    <thead class="text-bg-secondary">
                                        <tr>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>UOM</th>
                                            <th>Unit Price</th>
                                            <th>GST/VAT(%)</th>
                                            <th>Currency</th>
                                            <th>VAT Amount</th>
                                            <th>Sub Total</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(item, index) in cost" v-bind:key="index">
                                            <td>{{item.description}}</td>
                                            <td>{{ item.qty }}</td>
                                            <td>{{item.uom}}</td>
                                            <td>{{item.unit_price}}</td>
                                            <td>{{item.gst_vat}}</td>
                                            <td>{{item.currency}}</td>
                                            <td>{{ item.gst_vat/100*item.unit_price*item.qty }}</td>
                                            <td>{{item.qty*item.unit_price}}</td>
                                            <td>{{(item.gst_vat/100*item.unit_price*item.qty)+(item.qty*item.unit_price)}}</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td
                                                style="border-bottom: #e4e4e4"
                                            ></td>
                                            <td class="table-active">
                                                {{cost[0].currency}}(total)
                                            </td>
                                            <td id="vat" class="table-active"></td>
                                            <td id="sub" class="table-active"></td>
                                            <td id="total" class="table-active"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <div class="row">
                                        <div class="col">Attachment</div>
                                        <div class="col">
                                            <span>Notes</span>
                                            <div>
                                                <div
                                                    style="
                                                        background-color: aliceblue;
                                                        width: 100%;
                                                        height: 100px;
                                                    "
                                                >
                                                    <p
                                                        style="
                                                            color: aliceblue;
                                                            border-bottom: 1px
                                                                solid white;
                                                        "
                                                    >
                                                        p
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 pt-3 bdrtop">
                        <div class="d-flex justify-content-between" style="">
                            <div>
                                <p>
                                    <b>Confirmation</b>
                                    <span class="badge bg-primary rounded-pill"
                                        >1</span
                                    >
                                </p>
                            </div>
                            <div
                                class="input mb-3"
                                style="width: 170px; margin-left: auto"
                            >
                                <label
                                    class="form-control"
                                    for="inputGroupFile03"
                                    style="
                                        background-color: #00bfbf;
                                        color: white;
                                    "
                                    >+ Add Confirmation</label
                                >
                                <input
                                    hidden
                                    type="file"
                                    class=""
                                    id="inputGroupFile03"
                                />
                            </div>
                            <div style="">
                                <button
                                    class="btn btn3 btn-outline-success"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample2"
                                    aria-expanded="false"
                                    aria-controls="collapseExample"
                                >
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body">
                                <table class="table bdrright bdrleft">
                                    <thead class="text-bg-secondary">
                                        <tr>
                                            <th class="">No</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <button
                                                    class="btn btn-sm btn-light"
                                                >
                                                    icon LC-2022-0060-A
                                                </button>
                                            </td>
                                            <td>Logistic Completed</td>
                                            <td>02/11/2022</td>
                                            <td>
                                                <p
                                                    style="
                                                        border-radius: 50px;
                                                        text-align: center;
                                                        width: 80%;
                                                        background-color: rgb(
                                                            201,
                                                            236,
                                                            201
                                                        );
                                                        color: green;
                                                    "
                                                >
                                                    Submitted
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div
                        class="py-3 text-light ps-3"
                        style="background-color: rgb(36, 39, 43)"
                    >
                        For Internal Only
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="mt-3 mb-3">
                                <span>Attachment</span>
                            </div>
                            <div>
                                <span>{{ list[0].attachment[0].file }}</span>
                            </div>
                            <div class="input mb-3" style="width: 170px">
                                <label
                                    class="form-control"
                                    for="inputGroupFile01"
                                    style="
                                        background-color: #00bfbf;
                                        color: white;
                                    "
                                    >+ Add Attachment</label
                                >
                                <input
                                    hidden
                                    type="file"
                                    class=""
                                    id="inputGroupFile01"
                                />
                            </div>
                        </div>
                        <div class="col-7 bdr-pts">
                            <div class="mt-3 mb-3">
                                <span>Internal Note</span>
                            </div>
                            <div class="input mb-3" style="width: 170px">
                                <label
                                    class="form-control"
                                    for="inputGroupFile01"
                                    style="
                                        background-color: #00bfbf;
                                        color: white;
                                    "
                                    >+ Add Internal Note</label
                                >
                                <input
                                    hidden
                                    type="file"
                                    class=""
                                    id="inputGroupFile01"
                                />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between" style="">
                            <div>
                                <p><b>View Activity Log</b></p>
                            </div>
                            <div style="">
                                <button
                                    class="btn btn1 btn-outline-success"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample"
                                    aria-expanded="false"
                                    aria-controls="collapseExample"
                                >
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                        </div>

                        <div
                            class="collapse mb-3 text-center"
                            id="collapseExample"
                        >
                            <div class="card card-body">No Activity Yet</div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between" style="">
                            <div>
                                <p><b>View Transaction Revision</b></p>
                            </div>
                            <div style="">
                                <button
                                    class="btn btn2 btn-outline-success"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample1"
                                    aria-expanded="false"
                                    aria-controls="collapseExample"
                                >
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                        </div>
                        <div class="collapse text-center" id="collapseExample1">
                            <div class="card card-body">No Transaction</div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
</template>

<script>
export default {
    data() {
    return {
      list: [],
      cost:[],
    };
    },
    methods:{
        push(){
            this.$router.go(-1)
        },
        jumlah(){
            var table = document.getElementById("costable"),vat=0,sub=0,total=0;
            
            for(var i = 1; i < table.rows.length-1; i++)
            {
                vat = vat + parseInt(table.rows[i].cells[6].innerHTML);
                sub = sub + parseInt(table.rows[i].cells[7].innerHTML);
                total = total + parseInt(table.rows[i].cells[8].innerHTML);
            }
            
            document.getElementById("vat").innerHTML = vat;
            document.getElementById("sub").innerHTML = sub;
            document.getElementById("total").innerHTML = total;
        },
        async fetchData(){
            let a = "http://127.0.0.1:8000/api/instruction/"
            let b = this.$route.query.ID;
            const response = await axios.get(a+b);
            this.list = response.data.data;
            this.cost = response.data.data[0].cost_detail;
        },
        // getChecked(){
        //     let item = true;
        //     let item_yes = document.getElementById("flexRadioDefault13");
        //     if (this.list[0].instruction_type=="Logistic Instruction"){
        //         item_yes.checked=true;
        //     }
        // },
    },
    mounted(){
        this.fetchData();
    },
}
</script>

<style scoped>
/* .bi1 a {
  text-decoration: none;
}
.bi1 a:hover {
  border: 1px solid #00bfbf;
  border-color: #00bfbf;
  border-radius: 5px;
} */

#collapseExample2 .card {
    border: none;
}

#collapseExample3 .card {
    border: none;
}

#collapseExample4 .card {
    border: none;
}

#collapseExample5 .card {
    border: none;
}

#collapseExample6 .card {
    border: none;
}

/* Custom */

.bdrtop {
    border-top: 1px solid silver;
}
.bdrbottom {
    border-bottom: 1px solid silver;
}
.bdrleft {
    border-left: 1px solid silver;
}
.bdrright {
    border-right: 1px solid silver;
}

.bdr-pts {
    border-left: 1px dashed #e4e4e4;
}

.btn {
    border-color: #00bfbf;
}

.btn-outline-yoga {
    color: #00bfbf;
    border: 1px solid #00bfbf;
}

.btn-outline-yoga:hover {
    color: #fff;
    background-color: #00bfbf;
    border-color: #00bfbf;
}

.btn-yoga1 {
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 2px;
    padding-bottom: 5px;
    border-radius: 50px;
    border: 1px solid #3da576;
    background-color: #3da576;
    text-decoration: none;
    color: white;
}
.btn-yoga {
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 2px;
    padding-bottom: 5px;
    border-radius: 50px;
    border: 1px solid rgb(164, 163, 163);
    background-color: rgb(164, 162, 162);
    text-decoration: none;
    color: white;
}

</style>
