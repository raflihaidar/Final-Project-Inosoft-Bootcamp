<template>
    <div class="modal fade" id="modalVendor" tabindex="-1" aria-labelledby="modalVendor" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-grid gap-3 mb-5 px-4">
                    <div class="grid gap-3">
                        <label>Vendor Invoice No.</label>
                        <input type="text" class="border bg-light px-2 outline-none" placeholder="Vendor Invoice No.">
                    </div>
                    <div>
                        <label class="mb-3">Invoice Attachment</label>
                        <button class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal"
                            data-bs-target="#modalVendor">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-lg align-middle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5H2a.5.5 0 0 1 0-1h5V2.5A.5.5 0 0 1 8 2z" />
                            </svg>
                            <span>Add Attachments</span>
                        </button>
                    </div>
                    <div>
                        <label class="mb-3">Supporting Document</label>
                        <button class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal"
                            data-bs-target="#modalVendor">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-lg align-middle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5H2a.5.5 0 0 1 0-1h5V2.5A.5.5 0 0 1 8 2z" />
                            </svg>
                            <span>Add Attachments</span>
                        </button>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>