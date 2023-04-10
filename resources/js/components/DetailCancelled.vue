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
                            style="color: rgb(58, 209, 58)"
                        >
                            3rd Party Instruction
                        </li>
                    </ol>
                </nav>
                <div style="text-align: right">
                    <button type="button" class="btn btn-outline-dark">
                        Export
                    </button>
                </div>
            </header>
        </div>
        <div class="container shadow-lg pb-5" style="background-color: white">
            <article class="container">
                <div class="mb-5 mt-3 pt-3 bi1">
                    <a style="text-decoration: none" href="">
                        <i class="bi bi-chevron-left" style="color: green"></i>
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
                                    <p><b>LI-2022-0058</b></p>
                                </div>
                                <div class="col">
                                    <span>Attention Of</span>
                                    <p><b>Vts</b></p>
                                </div>
                            </div>
                            <div class="row ms-3 mt-4">
                                <div class="col">
                                    <span>Issued To</span>
                                    <p><b>ALPHA - ALPHATRANS PTE LTD</b></p>
                                </div>
                                <div class="col">
                                    <span>Vendor Reference No.</span>
                                    <p><b>q01</b></p>
                                </div>
                                <div class="col">
                                    <span>Vendor Address</span>
                                    <p><b> jakarta </b></p>
                                </div>
                            </div>
                            <div class="row ms-3 mt-3">
                                <div class="col">
                                    <span>Invoice To</span>
                                    <p><b>TESTTT</b></p>
                                </div>
                                <div class="col"><span>Base</span></div>
                                <div class="col">
                                    <span>Delivery Date</span>
                                    <p><b>09/09/2022</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" style="">
                            <div class="row bdr-pts mt-3">
                                <div class="col">
                                    <span>Customer</span>
                                    <p><b>AAR - C.V. ANUGRAH ALAM RAYA</b></p>
                                </div>
                                <div class="col">
                                    <span style="margin-left: 30px"
                                        >Status</span
                                    >
                                    <p
                                        id="btn-cancel"
                                        style="position: relative"
                                    >
                                        <a href="#" class="btn-yoga disabled"
                                            >Cancelled</a
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
                                            >i</a
                                        >
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <span>Customer PO</span>
                                </div>
                                <div class="mb-4">
                                    <span>Customer Ref</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="d-flex pt-3 mb-3 bdrtop bdrbottom" style="">
                        <div class="me-3">
                            <p><b>Item</b></p>
                        </div>
                        <div class="form-check me-3">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault5"
                                id="flexRadioDefault15"
                                disabled
                            />
                            <label
                                class="form-check-label"
                                for="flexRadioDefault15"
                            >
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <label
                                class="form-check-label"
                                for="flexRadioDefault13"
                            >
                                No
                            </label>
                            <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault3"
                                id="flexRadioDefault13"
                                checked
                            />
                        </div>
                    </div>
                    <div class="d-flex mb-3 bdrbottom">
                        <div class="me-3">
                            <p><b>Transport</b></p>
                        </div>
                        <div class="form-check me-3">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault1"
                                disabled
                            />
                            <label
                                class="form-check-label"
                                for="flexRadioDefault1"
                            >
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <label
                                class="form-check-label"
                                for="flexRadioDefault12"
                            >
                                No
                            </label>
                            <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault12"
                                id="flexRadioDefault12"
                                checked
                            />
                        </div>
                    </div>
                    <div>
                        <div class="d-flex">
                            <div class="me-3">
                                <p><b>Scope of Work</b></p>
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
                                            <td></td>
                                            <td>No Data</td>
                                            <td></td>
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
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="flexRadioDefault"
                                    id="flexRadioDefault1"
                                    disabled
                                />
                                <label
                                    class="form-check-label"
                                    for="flexRadioDefault1"
                                >
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <label
                                    class="form-check-label"
                                    for="flexRadioDefault14"
                                >
                                    No
                                </label>
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="flexRadioDefault14"
                                    id="flexRadioDefault14"
                                    checked
                                />
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
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>No Data</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
                                <p><b>Confirmation</b></p>
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
                                            <td></td>
                                            <td></td>
                                            <td>No Data</td>
                                            <td></td>
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

<style scoped>
#collapseExample2 .card {
    border: none;
}

#collapseExample3 .card {
    border: none;
}

#collapseExample4 .card {
    border: none;
}
#collapseExample2 .card {
    border: none;
}

#collapseExample3 .card {
    border: none;
}

#collapseExample4 .card {
    border: none;
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
