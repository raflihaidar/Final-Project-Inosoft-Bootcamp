<template>
    <div class="container mx-auto bg-light">
        <div class="w-100 bg-white p-4">

            <!-- TITLE START -->
            <p class="fs-3 fw-semibold mb-0">3rd Party Instruction</p>
            <div class="d-flex align-items-center gap-2">
                <div>Vendor Management</div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <div>3rd Party Instruction</div>
            </div>
            <!-- TITLE END -->


            <div class="mt-5 p-3 bg-white d-grid gap-4">

                <!-- NAVIGATION START -->
                <nav class="grid">
                    <div class="row">
                        <div class="col-10 flex align-items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                            </svg>
                            Back
                        </div>
                        <div class="col-2 flex justify-content-end gap-5">
                            <button class="bg-white">complete</button>
                            <button class="bg-white">delete</button>
                            <button class="bg-white" data-bs-toggle="modal" data-bs-target="#modalTerminate">
                                Terminate
                            </button>
                            <button class="bg-white">Modify</button>
                        </div>
                    </div>
                </nav>
                <!-- NAVIGATION END -->


                <!-- HEADER START -->
                <header class="grid border shadow-sm p-2">
                    <section class="row">
                        <div class="col-2">
                            <p class="mb-0">Type</p>
                            <p class="fw-bold fs-5">Logistic Instruction</p>
                        </div>
                        <div class="col-2">
                            <p class="mb-0">LI No.</p>
                            <p class="fw-bold fs-5">LI-2022-0058</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0">Attention Of</p>
                            <p class="fw-bold fs-5">Evie Transfer</p>
                        </div>
                        <div class="col-2 border-custom">
                            <p class="mb-0">Customer</p>
                            <p class="fw-bold fs-5">ABSCT - ABSOLUTE COMPLETION TECHNOLOGIES PTE LTD</p>
                        </div>
                        <div class="col-2">
                            <p class="mb-0">Status</p>
                            <div class="btn bg-info rounded-pill px-4 py-0" style="--bs-bg-opacity: .5">In Progress</div>
                        </div>
                    </section>
                    <section class="row">
                        <div class="col-2">
                            <p class="mb-0">Issued To</p>
                            <p class="fw-bold fs-5">Priyesh Thattarath</p>
                        </div>
                        <div class="col-2">
                            <p class="mb-0">Vendor Refrence No.</p>
                            <p class="fw-bold fs-5">3034</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0">Vendor Address</p>
                            <p class="fw-bold fs-5">Evie Test</p>
                        </div>
                        <div class="col-2 border-custom">
                            <p class="mb-0">Customer PO</p>
                            <p class="fw-bold fs-5">PO - 003</p>
                        </div>
                    </section>
                    <section class="row">
                        <div class="col-2">
                            <p class="mb-0">Invoice To</p>
                            <p class="fw-bold fs-5">Inosoft</p>
                        </div>
                        <div class="col-2">
                            <p class="mb-0">Base</p>
                            <p class="fw-bold fs-5">
                            </p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0">Delivery Data</p>
                            <p class="fw-bold fs-5">04/01/04
                            </p>
                        </div>
                        <div class="col-2 border-custom">
                            <p class="mb-0">Customer Ref</p>
                            <p class="fw-bold fs-5">REF - 003
                            </p>
                        </div>
                    </section>
                </header>
                <!-- HEADER END -->

                <!-- ITEM RADIO START -->
                <div class="border-top py-3">
                    <div class="flex gap-3 mb-3">
                        <label class="fw-bold">Item</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexItemRadio" id="flexItemRadio">
                            <label class="form-check-label" for="flexItemRadio">
                                Yes
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="flexItemRadio" id="flexItemRadio">
                            <label class="form-check-label" for="flexItemRadio">
                                No
                            </label>
                        </div>
                    </div>

                    <table class="table border">
                        <thead class="bg-secondary text-white fw-semibold">
                            <tr>
                                <th>Item Description</th>
                                <th>Lot No</th>
                                <th>Qty(pcs)</th>
                                <th>Estimate Footage</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td>
                                    <button class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-light" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- ITEM RADIO END -->

                <!-- TRANSPORT RADIO START -->
                <div class="border-top py-3">
                    <div class="flex gap-3 mb-3">
                        <label class="fw-bold">Transport</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexTransportRadio" id="flexTransportRadio">
                            <label class="form-check-label" for="flexTransportRadio">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexTransportRadio" id="flexTransportRadio">
                            <label class="form-check-label" for="flexTransportRadio">
                                No
                            </label>
                        </div>
                    </div>

                    <table class="table border">
                        <thead class="bg-secondary text-white fw-semibold">
                            <tr>
                                <th>Item Description</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexTransportRadio"
                                                id="flexTransportRadio">
                                            <label class="form-check-label" for="flexTransportRadio">
                                                Sea
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexTransportRadio"
                                                id="flexTransportRadio">
                                            <label class="form-check-label" for="flexTransportRadio">
                                                Land
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexTransportRadio"
                                                id="flexTransportRadio">
                                            <label class="form-check-label" for="flexTransportRadio">
                                                Air
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control"></td>
                                <td>
                                    <button class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </button>
                                </td>
                                <td><button class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- TRANSPORT RADIO END -->

                <!-- SCOPE OF WORK START -->
                <div class="border-top py-3">
                    <div class="flex gap-3 mb-3 ">
                        <label class="fw-bold">Scope of Work</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexTransportRadio" id="flexTransportRadio">
                            <label class="form-check-label" for="flexTransportRadio">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexTransportRadio" id="flexTransportRadio">
                            <label class="form-check-label" for="flexTransportRadio">
                                No
                            </label>
                        </div>
                    </div>

                    <table class="table border">
                        <thead class="bg-secondary text-white fw-semibold">
                            <tr>
                                <th>Scope of Work</th>
                                <th>Scope</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </button>
                                </td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- SCOPE OF WORK END -->


                <!-- COST DETAIL START -->
                <div>
                    <div class="flex gap-3 border-top py-3 mb-3">
                        <label class="fw-bold">Cost Detail</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexItemRadio" id="flexItemRadio">
                            <label class="form-check-label" for="flexItemRadio">
                                Yes
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="flexItemRadio" id="flexItemRadio">
                            <label class="form-check-label" for="flexItemRadio">
                                No
                            </label>
                        </div>
                    </div>
                    <table class="table table-borderless border py-2">
                        <thead class="bg-secondary text-white fw-semibold">
                            <tr>
                                <th>Description</th>
                                <th>QTY</th>
                                <th>UOM</th>
                                <th>Unit Price</th>
                                <th>Discount(%)</th>
                                <th>GST/VAT(%)</th>
                                <th>Currency</th>
                                <th>VAT AMOUNT</th>
                                <th>Sub Total</th>
                                <th>Total</th>
                                <th>Change To</th>
                            </tr>
                        </thead>
                        <tbody class="px-2">
                            <tr>
                                <td>Transportation from Rigsite</td>
                                <td>1</td>
                                <td>Trip</td>
                                <td>1,400.00</td>
                                <td>0</td>
                                <td>5</td>
                                <td>AED</td>
                                <td>70.00</td>
                                <td>1,400.00</td>
                                <td>1,470.00</td>
                                <td>MITME</td>
                            </tr>
                            <tr>
                                <td colspan="6">Exchange Rate 1 USD = 3.6275 AED</td>
                                <td class="text-bg-secondary">AED (Total)</td>
                                <td class="text-bg-secondary">70.000</td>
                                <td class="text-bg-secondary">1,400.00</td>
                                <td class="text-bg-secondary">1,470.00</td>
                            </tr>
                            <tr>
                                <td colspan="6"></td>
                                <td class="text-bg-secondary">USD (Total)</td>
                                <td class="text-bg-secondary">19.06</td>
                                <td class="text-bg-secondary">381.21</td>
                                <td class="text-bg-secondary">400.27</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="fw-semibold">Attachment</td>
                                <td>Notes</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div>
                                        <p class="fw-semibold mb-0">RRN-2021-0054-DN.pdf</p>
                                        <p>By james</p>
                                    </div>
                                    <button class="btn btn-success d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-plus-lg align-middle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5H2a.5.5 0 0 1 0-1h5V2.5A.5.5 0 0 1 8 2z" />
                                        </svg>
                                        <span class="align-middle">Add Attachment</span>
                                    </button>
                                </td>
                                <td colspan="7" class="bg-secondary">
                                    <div>
                                        <p>1x Desert Truck</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- COST DETAIL END -->
            </div>
        </div>

        <!-- FOR INTERNAL ONLY START -->
        <div class="bg-success px-4 py-2 w-100mb-2">
            <p class="text-white fw-semibold">For Internal Only</p>
        </div>
        <div class="grid">
            <div class="row">
                <div class="border-end col-5 ps-3">
                    <p>Attachment</p>
                    <button class="btn btn-success d-flex align-items-center" type="file">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-lg align-middle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5H2a.5.5 0 0 1 0-1h5V2.5A.5.5 0 0 1 8 2z" />
                        </svg>
                        <span>Add Attachment</span>
                    </button>
                </div>

                <div class="col-7 ps-3">
                    <p>Internal Note</p>
                    <button class="btn btn-success d-flex align-items-center" data-bs-toggle="modal"
                        data-bs-target="#modalInternalNote">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-lg align-middle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5H2a.5.5 0 0 1 0-1h5V2.5A.5.5 0 0 1 8 2z" />
                        </svg>
                        <span>Add Internal Note</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- FOR INTERNAL ONLY END -->
        <!-- MODAL -->
        <modal-terminate />
        <modal-internalNote />
    </div>
</template>

<style scoped>
.border-custom {
    border-left: 1px dotted gray;
}
</style>

<script>
export default {
    data() {
    return {
      list: [],
    };
    },
    mounted(){
        this.fetch();
    },
    methods:{
        async fetch(){
            const response = await axios.get("http://127.0.0.1:8000/api/instruction/");
            this.list = response.data.data;
        },
    }
}

</script>