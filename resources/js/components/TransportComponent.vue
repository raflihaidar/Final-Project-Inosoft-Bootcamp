<template>
    <div class="py-3 border-bottom">
        <div>
            <p>
                <strong style="font-size: large">Transport</strong>
                <label>
                    <input type="radio" name="ttab" value="yes" @click="show" />
                    Yes
                </label>
                <label>
                    <input type="radio" name="ttab" value="no" @click="block" />
                    No
                </label>
            </p>
        </div>

        <div class="transport-item">
            <table style="margin-bottom: 10px; width: 100%">
                <thead>
                    <tr>
                        <th colspan="6">
                            <span class="required">*</span>Transport Mode
                        </th>
                        <th colspan="4"><span class="required">*</span>Type</th>
                        <th><span class="required">*</span>Description</th>
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
                            <input type="radio" name="" id="" /><label for=""
                                >Sea</label
                            >
                            <input type="radio" name="" id="" /><label for=""
                                >Land</label
                            >
                            <input type="radio" name="" id="" /><label for=""
                                >Air</label
                            >
                        </td>
                        <td colspan="4">
                            <select name="" id="" style="width: 100%">
                                <option value="">Select a type</option>
                            </select>
                        </td>
                        <td>
                            <input
                                style="width: 100%"
                                class="unit-price"
                                type="text"
                                placeholder="0"
                                v-model.number="item.unitPrice"
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
                    qty: "",
                    uom: "SHP",
                    unitPrice: "",
                    vatAmount: 0,
                    currency: "USD",
                },
            ],
            latestIndex: 0,
        };
    },
    computed: {},
    methods: {
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
                qty: "",
                uom: "SHP",
                unitPrice: "",
                vatAmount: 0,
                currency: "USD",
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
            const x = document.getElementsByClassName("transport-item");
            x[0].style.display = "none";
        },
        show() {
            const x = document.getElementsByClassName("transport-item");
            x[0].style.display = "block";
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

.transport-item {
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
</style>
