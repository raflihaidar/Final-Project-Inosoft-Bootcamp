<template>
    <body style="background-color: rgba(0, 0, 0, 0.03)">
        <div class="container">
            <header class="pt-5" style="width: 100%">
                <h1>3rd Party Instruction</h1>
                <nav
                    style="--bs-breadcrumb-divider: '>'"
                    aria-label="breadcrumb"
                >
                    <ol class="breadcrumb" style="font-size: 0.8em">
                        <li class="breadcrumb-item">
                            <a
                                href="#"
                                style="text-decoration: none; color: slategray"
                                >Vendor Management</a
                            >
                        </li>
                        <li
                            class="breadcrumb-item active"
                            aria-current="page"
                            style="color: #00bfbf"
                        >
                            3rd Party Instruction
                        </li>
                    </ol>
                </nav>
                <div class="d-flex flex-row-reverse">
                    <div>
                        <button
                            type="button"
                            class="btn"
                            style="
                                background-color: white;
                                border: 1px solid #e4e4e4;
                            "
                        >
                            <b> Export </b>
                        </button>
                    </div>
                    <div class="me-3">
                        <button
                            type="button"
                            class="btn"
                            style="
                                background-color: white;
                                border: 1px solid #e4e4e4;
                            "
                        >
                            <b> Send Email </b>
                        </button>
                    </div>
                </div>
            </header>
        </div>
        <div class="container shadow-lg pb-5" style="background-color: white">
            <article class="container">
                <div class="mb-5 mt-3 pt-3 bi1">
                    <a>
                        <i
                            class="bi bi-chevron-left"
                            style="color: #00bfbf"
                        ></i>
                        <router-link to="/completed" style="color: #00bfbf"
                            >Back</router-link
                        ></a
                    >
                </div>
                <section class="mb-3 bdrtop bdrbottom bdrleft bdrright">
                    <div class="row">
                        <div class="col-8" style="">
                            <div class="row mt-3 ms-3">
                                <div class="col">
                                    <span>Type</span>
                                    <p>
                                        <b>
                                            <i class="bi bi-truck icon"></i>
                                            Logistic Intruction</b
                                        >
                                    </p>
                                </div>
                                <div class="col">
                                    <span>LI No.</span>
                                    <p><b>LI-2022-0060</b></p>
                                </div>
                                <div class="col">
                                    <span>Attention Of</span>
                                    <p><b>MR Customer X</b></p>
                                </div>
                            </div>
                            <div class="row ms-3 mt-5">
                                <div class="col">
                                    <span>Issued To</span>
                                    <p><b>ALPHA - ALPHATRANS PTE LTD</b></p>
                                </div>
                                <div class="col">
                                    <span>Vendor Reference No.</span>
                                    <p><b>Q12345</b></p>
                                </div>
                                <div class="col">
                                    <span>Vendor Address</span>
                                    <p><b>Big Street 1 </b></p>
                                </div>
                            </div>
                            <div class="row ms-3 mt-5">
                                <div class="col">
                                    <span>Invoice To</span>
                                    <p><b>MITA</b></p>
                                </div>
                                <div class="col"><span>Base</span></div>
                                <div class="col">
                                    <span>Delivery Date</span>
                                    <p><b>26/09/2022</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" style="">
                            <div class="row bdr-pts mt-3">
                                <div class="col">
                                    <span>Customer</span>
                                    <p>
                                        <b
                                            >ACCLTD - AUTHENTIC CONSTRUCTION
                                            COMPANY LIMITED</b
                                        >
                                    </p>
                                </div>
                                <div class="col">
                                    <span style="margin-left: 30px"
                                        >Status</span
                                    >
                                    <p
                                        id="btn-cancel"
                                        style="position: relative"
                                    >
                                        <a href="#" class="btn-yoga1"
                                            >Completed</a
                                        >
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <span>Customer PO</span>
                                    <p><b>CPO23456</b></p>
                                </div>
                                <div class="mb-4">
                                    <span>Customer Ref</span>
                                    <p><b>CREF23456</b></p>
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
                                    for="flexRadioDefault13"
                                >
                                    Yes
                                </label>
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="flexRadioDefault13"
                                    id="flexRadioDefault13"
                                    checked
                                />
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    disabled
                                    type="radio"
                                    name="flexRadioDefault"
                                    id="flexRadioDefault1"
                                />
                                <label
                                    class="form-check-label"
                                    for="flexRadioDefault1"
                                >
                                    No
                                </label>
                            </div>
                            <div style="margin-left: auto; margin-top: -7px">
                                <button
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
                    <div>
                        <div class="d-flex pt-3 bdrtop">
                            <div class="me-3">
                                <p><b>Transport</b></p>
                            </div>
                            <div class="form-check me-3">
                                <label
                                    class="form-check-label"
                                    for="flexRadioDefault12"
                                >
                                    Yes
                                </label>
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="flexRadioDefault12"
                                    id="flexRadioDefault12"
                                    checked
                                />
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    disabled
                                    type="radio"
                                    name="flexRadioDefault"
                                    id="flexRadioDefault1"
                                />
                                <label
                                    class="form-check-label"
                                    for="flexRadioDefault1"
                                >
                                    No
                                </label>
                            </div>
                            <div style="margin-left: auto; margin-top: -7px">
                                <button
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
                                    for="flexRadioDefault18"
                                >
                                    Yes
                                </label>
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="flexRadioDefault18"
                                    id="flexRadioDefault18"
                                    checked
                                />
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    disabled
                                    type="radio"
                                    name="flexRadioDefault"
                                    id="flexRadioDefault1"
                                />
                                <label
                                    class="form-check-label"
                                    for="flexRadioDefault1"
                                >
                                    No
                                </label>
                            </div>
                            <div style="margin-left: auto; margin-top: -7px">
                                <button
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
                                    for="flexRadioDefault1"
                                >
                                    Yes
                                </label>
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="flexRadioDefault"
                                    id="flexRadioDefault1"
                                    checked
                                />
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="flexRadioDefault14"
                                    id="flexRadioDefault14"
                                    disabled
                                />
                                <label
                                    class="form-check-label"
                                    for="flexRadioDefault14"
                                >
                                    No
                                </label>
                            </div>
                            <div style="margin-left: auto; margin-top: -7px">
                                <button
                                    class="btn btn4 btn-outline-success"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample3"
                                    aria-expanded="false"
                                    aria-controls="collapseExample"
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
                                <table class="table">
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
                                        <tr>
                                            <td>Sea trans</td>
                                            <td>1</td>
                                            <td>SHP</td>
                                            <td>1,500.00</td>
                                            <td>10</td>
                                            <td>USD</td>
                                            <td>150.00</td>
                                            <td>1,500.00</td>
                                            <td>1,650.00</td>
                                        </tr>
                                        <tr>
                                            <td>Land trans</td>
                                            <td>1</td>
                                            <td>SHP</td>
                                            <td>500.00</td>
                                            <td>10</td>
                                            <td>USD</td>
                                            <td>50.00</td>
                                            <td>500.00</td>
                                            <td>550.00</td>
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
                                                USD(total)
                                            </td>
                                            <td class="table-active">200.00</td>
                                            <td class="table-active">
                                                2,000.00
                                            </td>
                                            <td class="table-active">
                                                2,200.00
                                            </td>
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
    </body>
</template>

<script>
export default {};
</script>

<style>
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
    border: 1px solid green;
    background-color: green;
    text-decoration: none;
    color: white;
}
</style>
