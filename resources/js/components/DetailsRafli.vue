<template>
    <div class="w-100 mx-auto bg-light">
        <p class="fs-3 fw-semibold mb-0">3rd Party Instruction</p>
        <div class="d-flex align-items-center gap-2">
            <div>Vendor Management</div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
            <div>3rd Party Instruction</div>
        </div>

        <div class="float-end flex gap-3">
            <button type="button" class="btn btn-light shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-send-fill d-inline" viewBox="0 0 16 16">
                    <path
                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                </svg>
                Send Email
            </button>
            <button type="button" class="btn btn-light shadow-sm">Export</button>
        </div>

        <div class="mt-5 p-3 bg-white shadow-sm d-grid gap-4">
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
                        <span class="pointer">Terminate</span>
                        <span>Modify</span>
                    </div>
                </div>
            </nav>

            <header class="grid border shadow-sm p-2">
                <section class="row">
                    <div class="col-2">
                        <p class="mb-0">Type</p>
                        <p class="fw-bold fs-5">Logistic Instruction</p>
                    </div>
                    <div class="col-2">
                        <p class="mb-0">LI No</p>
                        <p class="fw-bold fs-5">Logistic Instruction</p>
                    </div>
                    <div class="col-2">
                        <p class="mb-0">Transfer No</p>
                        <p class="fw-bold fs-5">Logistic Instruction</p>
                    </div>
                    <div class="col-2">
                        <p class="mb-0">Customer</p>
                        <p class="fw-bold fs-5">Logistic Instruction</p>
                    </div>
                    <div class="col-2">
                        <p class="mb-0">Customer PO</p>
                        <p class="fw-bold fs-5">Logistic Instruction</p>
                    </div>
                    <div class="col-2">
                        <p class="mb-0">Status</p>
                        <div class="btn bg-info rounded-pill px-4 py-0" style="--bs-bg-opacity: .5">In Progress</div>
                    </div>
                </section>
                <section class=" row">
                    <div class="col-2">
                        <p class="mb-0">Attention Of</p>
                        <p class="fw-bold fs-5">Logistic Instruction</p>
                    </div>
                    <div class="col-2">
                        <p class="mb-0">Assigned Vendor</p>
                        <p class="fw-bold fs-5">Logistic Instruction</p>
                    </div>
                    <div class="col-2">
                        <p class="mb-0">Type</p>
                        <p class="fw-bold fs-5">Logistic Instruction</p>
                    </div>
                    <div class="col-6">
                        <p class="mb-0">Vendor Address</p>
                        <p class="fw-bold fs-5">Logistic Instruction</p>
                    </div>
                </section>
            </header>

            <div class="w-100 my-5">
                <p class="fs-5 fw-bold">Cost Detail</p>
                <table class="table">
                    <thead class="bg-secondary text-white fw-semibold">
                        <tr>
                            <th scope="col">Description</th>
                            <th scope="col">QTY</th>
                            <th scope="col">UDM</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Discount(%)</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Currency</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Sub Total</th>
                            <th scope="col">Change To</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>