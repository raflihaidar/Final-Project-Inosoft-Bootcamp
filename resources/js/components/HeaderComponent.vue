<template>
    <div class="container border-bottom d-flex flex-column py-3">
        <div class="row p-2">
            <div class="col-3">
                <div class="dropdown">
                    <button
                        class="btn dropdown-toggle border"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="bi bi-people"></i> Logistic Instruction
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <router-link class="dropdown-item" to="/new_service"
                                ><i class="bi bi-cart-plus-fill"></i> Service
                                Instruction</router-link
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9"></div>
        </div>

        <div class="row p-2">
            <div class="col-2"></div>
            <div class="col-3 d-flex flex-column">
                <label>Link To </label>
                <select
                    name="linkto"
                    id="linkto"
                    class="form-select"
                    v-model="linkto"
                >
                    <option value="">Select Link To</option>
                    <option value="LI-2022-0060">LI-2022-0060</option>
                </select>
            </div>
            <div class="col-3 d-flex flex-column">
                <label>Attention Off</label>
                <input
                    type="text"
                    placeholder="Enter Attention Off"
                    id="attentionof"
                    name="attentionof"
                    class="form-control"
                    v-model="attentionof"
                />
            </div>
            <div class="col-2 d-flex flex-column">
                <label>Invoice To</label>
                <select
                    name="invoiceto"
                    id="invoiceto"
                    v-model="invoiceto"
                    class="form-select"
                >
                    <option value="">Select An Option</option>
                    <option value="Inosoft">Inosoft</option>
                    <option value="Mita">Mita</option>
                    <option value="Test">Test</option>
                </select>
            </div>
            <div class="col-2 d-flex flex-column">
                <label>Customers Contact</label>
                <select
                    name="customercontact"
                    id="customercontact"
                    v-model="customercontact"
                    class="form-select"
                >
                    <option value="">Select Customers</option>
                    <option value="Mita">Mita</option>
                    <option value="AWW - 9399 - AA">AWW - 9399 - AA</option>
                    <option value="AAT - 9399 - AA">AAT - 9399 - AA</option>
                </select>
            </div>
        </div>

        <div class="row p-2">
            <div class="col-2"></div>
            <div class="col-3 d-flex flex-column">
                <label>Issued To </label>
                <select
                    name="issuedto"
                    id="issuedto"
                    v-model="issuedto"
                    class="form-select"
                >
                    <option value="">Select Issued To</option>
                    <option value="ALPHA - ALPHATRANS PTE LTD">
                        ALPHA - ALPHATRANS PTE LTD
                    </option>
                    <option value="AMARIT AND ASSOCIATES LOGISTICS CO.LTD">
                        AMARIT AND ASSOCIATES LOGISTICS CO.LTD
                    </option>
                </select>
            </div>
            <div class="col-3 d-flex flex-column">
                <label>Vendor Address</label>
                <select
                    name="vendoraddress"
                    id="vendoraddress"
                    v-model="vendoraddress"
                    class="form-select"
                >
                    <option value="">Select Vendor Address</option>
                    <option value="Tunjungan">Tunjungan</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Gebang">Gebang</option>
                </select>
            </div>
            <div class="col-2 d-flex flex-column">
                <label>Vendor Reference No.</label>
                <input
                    type="text"
                    name="vendorreference"
                    id="vendorreference"
                    v-model="vendorreference"
                    class="form-control"
                    placeholder="Enter Vendor Reference No"
                />
            </div>
            <div class="col-2 d-flex flex-column">
                <label>Customer PO No.</label>
                <input
                    type="text"
                    name="customerpo"
                    id="customerpo"
                    v-model="customerpo"
                    class="form-control"
                    placeholder="Enter Customer No"
                />
            </div>
        </div>

        <div class="row p-3">
            <div class="col-2"></div>
            <div class="col-4">
                <label for="">Base</label>
                <select
                    name="base"
                    id="base"
                    v-model="base"
                    class="form-select"
                >
                    <option value="">Select Base</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Malaysia">Malaysia</option>
                </select>
            </div>
            <div class="col-4">
                <label for="">Delivery Date</label>
                <input
                    type="date"
                    name="date"
                    id="date"
                    v-model="date"
                    class="form-control"
                />
            </div>
            <div class="col-2">
                <label for="">Cutomer Ref</label>
                <input
                    type="text"
                    name="customerref"
                    id="customerref"
                    v-model="customerref"
                    placeholder="Enter Customer Ref"
                    class="form-control"
                />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            linkto: "",
            attentionof: "",
            invoiceto: "",
            customercontact: "",
            issuedto: "",
            vendoraddress: "",
            vendorreference: "",
            customerpo: "",
            base: "",
            date: "",
            customerref: "",
        };
    },
    methods() {
        const changeroute = (url) => {
            route.push(url);
        };
    },
};
</script>

<style></style>
