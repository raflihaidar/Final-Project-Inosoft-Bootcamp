<template>
	<div>
		<p>
			<strong style="font-size: large;">Cost Detail</strong>
			<label>
				<input type="radio" name="tab" value="yes" @click="show" />
				Yes
			</label>
			<label>
				<input type="radio" name="tab" value="no" @click="block" />
				No
			</label>
		</p>

  <div class="table-data">
			<table>
				<thead>
					<tr>
					<th><span class="required">*</span>Description</th>
					<th><span class="required">*</span>QTY</th>
					<th><span class="required">*</span>UOM</th>
					<th><span class="required">*</span>Unit Price</th>
					<th>GST/VAT(%)</th>
					<th></th>
					<th><span class="required">*</span>Currency</th>
					<th>VAT Amount</th>
					<th>Sub Total</th>
					<th>Total</th>
					<th></th>
					<th></th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="(item, index) in items" :key="index">
					<!-- <td>  <input-field type="text" color="grey" width="150px" height="40px" placeholder="Enter description" v-model="item.description" /></td>
					<td><input-field type="number" color="grey" width="100px" height="40px" placeholder="Enter a number" v-model="item.qty" /></td> -->
					<td><input class="description" type="text" placeholder="Enter Description" v-model="item.description"></td>
					<td><input class="qty" type="number" placeholder="Enter QTY" v-model.number="item.qty"></td>
					<td>
						<select v-model="item.uom">
						<option value="SHP">SHP</option>
						<option value="TON">TON</option>
						<option value="ANN">ANN</option>
						</select>
					</td>
					<td><input class="unit-price" type="number" placeholder="Enter Unit Price" v-model.number="item.unitPrice"></td>
					
					<td><input  class="vat-amount" type="number" v-model.number="item.vatAmount"></td>
					<td><i class="fa fa-arrow-right"></i></td>
					<td>
						<select v-model="item.currency">
						<option value="USD">USD</option>
						<option value="AED">AED</option>
						<option value="AOA">AOA</option>
						</select>
					</td>
					<td>{{ getVatAmount(item) }}</td>
					<td>{{ getSubTotal(item) }}</td>
					<td>{{ getTotal(item) }}</td>
					<td>
						<button-component icon="fa fa-minus " width="50px"  height="50px" color="grey" @click="removeRow(index)"  :disabled="items.length === 1" /></td>
						<td>
						<button-component icon="fa fa-plus" width="50px"  height="50px" color="blue" @click="addRow" /></td>
						
						<!-- <button-component text="-" color="grey" @click="removeRow(index)" :disabled="items.length === 1"/>
						<button-component text="+" color="green" @click="addRow"/> -->
						<!-- <button @click="removeRow(index)" :disabled="items.length === 1">Remove Row</button>
						<button @click="addRow">Add Row</button> -->
					
					
					</tr>
					
					<tr v-for="(total, currency) in currencyTotals()" :key="currency">
					<td colspan="5"></td>
					<td class="sum">{{ currency }}</td>
					<td class="sum">{{ total.vatAmount.toFixed(2) }}</td>
					<td class="sum">{{ total.subTotal.toFixed(2) }}</td>
					<td class="sum">{{ total.total.toFixed(2) }}</td>
					<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</template>

<script>
import { mapGetters, mapMutations } from "vuex";

export default {
	data() {
		return {
		items: [{ description: '', qty: '', uom: 'SHP', unitPrice: '', vatAmount: 0, currency: 'USD' }],
		latestIndex: 0
		}
	},
	computed:{
		
  },
	methods: {
		currencyTotals() {
      const currencyTotals = {};
      this.items.forEach((item) => {
		const currency = item.currency;

        if (!currencyTotals[item.currency]) {
          currencyTotals[item.currency] = {
            vatAmount: 0,
            subTotal: 0,
            total: 0
          };
        }
        currencyTotals[currency].vatAmount += Number(this.getVatAmount(item));
    currencyTotals[currency].subTotal += Number(this.getSubTotal(item));
    currencyTotals[currency].total += Number(this.getTotal(item));
      });
      return currencyTotals;
    },
		addRow() {
		this.items.push({
			description: '',
			qty: '',
			uom: 'SHP',
			unitPrice: '',
			vatAmount: 0,
			currency: 'USD'
		})
		this.latestIndex = this.items.length - 1
		},
		removeRow(index) {
		this.items.splice(index, 1)
		this.latestIndex = this.items.length - 1
		},
		getVatAmount(item) {
		return ((item.vatAmount / 100) * item.unitPrice * item.qty).toFixed(2)
		},
		getSubTotal(item) {
		return (item.unitPrice * item.qty).toFixed(2)
		},
		getTotal(item) {
		return (Number(this.getSubTotal(item)) + Number(this.getVatAmount(item))).toFixed(2)
		},
		block() {
			const x = document.getElementsByClassName('table-data');
			x[0].style.display = 'none';
		},
		show() {
			const x = document.getElementsByClassName('table-data');
			x[0].style.display = 'block';
		}
	}
	}
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

.table-data {
	display: none;
}

table {
	border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid black;
}

thead{
	background-color: #bbbfc7;
}

th .required{
  color: red;
  margin-right: 5px;
}

th{
	color: #feffff;
	font-size: 90%;
}

tr{
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
.vat-amount{
	width:100px
}

.unit-price{
	width:120px
}

.sum {
  background-color: #f9f6fb;
}
</style>