<template>
    <div class="container border-bottom d-flex flex-column p-3">
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
                            <a class="dropdown-item" href="#"
                                ><i class="bi bi-people"></i> Logistic
                                Instruction</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"
                                ><i class="bi bi-cart-plus-fill"></i> Service
                                Instruction</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9"></div>
        </div>

        <div class="row p-2">
            <div class="col-2"></div>
            <div class="col-2 d-flex flex-column">
                <label>Assigned Vendor</label>
                <select name="" id="" class="form-select">
                    <option value="">Select Assigned Vendor</option>
                    <option value="">Cek</option>
                </select>
            </div>
            <div class="col-2 d-flex flex-column">
                <label>Attention Off</label>
                <input
                    type="text"
                    placeholder="Enter Attention Off"
                    class="form-control"
                />
            </div>
            <div class="col-2 d-flex flex-column">
                <label>Quotation No</label>
                <input
                    type="number"
                    placeholder="Enter Quotation"
                    class="form-control"
                />
            </div>
            <div class="col-2 d-flex flex-column">
                <label>Invoice To</label>
                <select name="" id="" class="form-select">
                    <option value="">Select Options</option>
                    <option value="">Cek</option>
                </select>
            </div>
            <div class="col-2 d-flex flex-column">
                <label>Customers Contact</label>
                <select name="" id="" class="form-select">
                    <option value="">Select Customers</option>
                    <option value="">Cek</option>
                </select>
            </div>
        </div>

        <div class="row p-2">
            <div class="col-2"></div>
            <div class="col-8 d-flex flex-column">
                <label>Customers Contact</label>
                <select name="" id="" class="form-select">
                    <option value="">Select Customers</option>
                    <option value="">Cek</option>
                </select>
            </div>
            <div class="col-2 d-flex flex-column">
                <label>Customers PO No.</label>
                <input
                    type="number"
                    placeholder="Enter Customer PO"
                    class="form-control"
                />
            </div>
        </div>

        <div class="row p-3">
            <div class="col-2"></div>
            <div class="col-4">
                <label for="">Base</label>
                <select name="" id="" class="form-select">
                    <option value="">Select a Base</option>
                </select>
            </div>
            <div class="col-4">
                <label for="">Delivery Date</label>
                <input type="date" class="form-control" />
            </div>
            <div class="col-2">
                <label for="">Cutomer Ref</label>
                <input
                    type="text"
                    name=""
                    id=""
                    placeholder="Enter Customer Ref"
                    class="form-control"
                />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {},
};
</script>

<style></style>
