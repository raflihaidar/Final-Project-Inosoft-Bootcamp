<template>
    <div class="border-bottom py-3">
        <div class="d-flex justify-content-sm-between">
            <div>
                <p>{{ this.items }}</p>
                <p>
                    <strong style="font-size: large">Item</strong>
                    <label>
                        <input
                            type="radio"
                            name="atab"
                            value="yes"
                            @click="show"
                        />
                        Yes
                    </label>
                    <label>
                        <input
                            type="radio"
                            name="atab"
                            value="no"
                            @click="block"
                        />
                        No
                    </label>
                </p>
            </div>
            <div class="itemSOH">
                <!-- Button trigger modal -->
                <span
                    class="btn btn-success"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                >
                    <i class="bi bi-plus"></i>
                    Add Item From SOH
                </span>

                <!-- Modal -->
                <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1
                                    class="modal-title fs-5"
                                    id="exampleModalLabel"
                                >
                                    Modal title
                                </h1>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">...</div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cost-item">
            <table style="margin-bottom: 10px; width: 100%">
                <thead>
                    <tr>
                        <th colspan="6">
                            <span class="required">*</span>Item Description
                        </th>
                        <th colspan="4">
                            <span class="required">*</span>Lot No.
                        </th>
                        <th><span class="required">*</span>Qty (PCS)</th>
                        <th>
                            <span class="required">*</span>Estimated Footage
                        </th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="custom-border"
                        v-for="(item, index) in items"
                        :key="index"
                    >
                        <!-- <td>  <input-field type="text" color="grey" width="150px" height="40px" placeholder="Enter description" v-model="item.description" /></td>
					<td><input-field type="number" color="grey" width="100px" height="40px" placeholder="Enter a number" v-model="item.qty" /></td> -->
                        <td colspan="6">
                            <select
                                name="description"
                                id="description"
                                v-model="item.description"
                                v-on:change="itemUpdated"
                                style="width: 100%"
                            >
                                <option value="">Enter Item Description</option>
                            </select>
                        </td>
                        <td colspan="4">
                            <input
                                style="width: 100%"
                                class="qty"
                                type="text"
                                name="lotno"
                                id="lotno"
                                placeholder="Enter Lot No"
                                v-model.number="item.lotno"
                                v-on:change="itemUpdated"
                            />
                        </td>
                        <td>
                            <input
                                style="width: 100%"
                                class="qty"
                                name="qty"
                                id="qty"
                                type="number"
                                placeholder="0"
                                v-model="item.qty"
                                v-on:change="itemUpdated"
                            />
                        </td>
                        <td>
                            <input
                                style="width: 100%"
                                class="unit-price"
                                name="footage"
                                id="footage"
                                type="number"
                                placeholder="0"
                                v-model.number="item.footage"
                                v-on:change="itemUpdated"
                            />
                        </td>

                        <td>
                            <button-component
                                icon="fa fa-minus "
                                width="50px"
                                height="50px"
                                color="grey"
                                @click="removeRow(index)"
                                :disabled="items.length === 1"
                            />
                        </td>
                        <td>
                            <button-component
                                icon="fa fa-plus"
                                width="50px"
                                height="50px"
                                color="blue"
                                @click="addRow"
                            />
                        </td>

                        <!-- <button-component text="-" color="grey" @click="removeRow(index)" :disabled="items.length === 1"/>
						<button-component text="+" color="green" @click="addRow"/> -->
                        <!-- <button @click="removeRow(index)" :disabled="items.length === 1">Remove Row</button>
						<button @click="addRow">Add Row</button> -->
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
// import { mapGetters, mapMutations } from "vuex";

export default {
    data() {
        return {
            items: [
                {
                    description: "",
                    lotno: "",
                    qty: "",
                    footage: "",
                },
            ],
            latestIndex: 0,
        };
    },
    computed: {},
    methods: {
        itemUpdated(){
			this.$emit('tableItem_update', this.items)

		},
        currencyTotals() {
            const currencyTotals = {};
            this.items.forEach((item) => {
                const currency = item.currency;

                if (!currencyTotals[item.currency]) {
                    currencyTotals[item.currency] = {
                        vatAmount: 0,
                        subTotal: 0,
                        total: 0,
                    };
                }
                currencyTotals[currency].vatAmount += Number(
                    this.getVatAmount(item)
                );
                currencyTotals[currency].subTotal += Number(
                    this.getSubTotal(item)
                );
                currencyTotals[currency].total += Number(this.getTotal(item));
            });
            return currencyTotals;
        },
        addRow() {
            this.items.push({
                description: "",
                lotno: "",
                qty: "SHP",
                footage: "",
            });
            this.latestIndex = this.items.length - 1;
        },
        removeRow(index) {
            this.items.splice(index, 1);
            this.latestIndex = this.items.length - 1;
        },
        getVatAmount(item) {
            return ((item.vatAmount / 100) * item.unitPrice * item.qty).toFixed(
                2
            );
        },
        getSubTotal(item) {
            return (item.unitPrice * item.qty).toFixed(2);
        },
        getTotal(item) {
            return (
                Number(this.getSubTotal(item)) + Number(this.getVatAmount(item))
            ).toFixed(2);
        },
        block() {
            const x = document.getElementsByClassName("cost-item");
            const y = document.getElementsByClassName("itemSOH");
            x[0].style.display = "none";
            y[0].style.display = "none";
        },
        show() {
            const x = document.getElementsByClassName("cost-item");
            const y = document.getElementsByClassName("itemSOH");
            x[0].style.display = "block";
            y[0].style.display = "block";
        },
    },
};
</script>

<style scoped>
label {
    display: inline-block;
    margin-right: 1px;
}

input[type="radio"] {
    display: inline-block;
    margin-right: 1px;
    margin-left: 20px;
}

.cost-item {
    display: none;
    width: 100%;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid black;
}

thead {
    background-color: #bbbfc7;
}

th .required {
    color: red;
    margin-right: 5px;
}

th {
    color: #feffff;
    font-size: 90%;
}

.custom-border {
    border-bottom: 1px solid black;
}

td {
    padding: 5px;
}

td input[type="text"],
td input[type="number"],
td select {
    padding: 10px;
    background-color: #fbfbfe;
    box-shadow: 0px 0px 5px #ccc;
    border-radius: 5px;
}

.description,
.qty,
.uom,
.unit-price,
.vat-amount,
.currency {
    flex: 1;
}

.qty,
.vat-amount {
    width: 100px;
}

.unit-price {
    width: 120px;
}

.sum {
    background-color: #f9f6fb;
}

.itemSOH {
    display: none;
}
</style>
