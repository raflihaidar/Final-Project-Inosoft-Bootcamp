<template>
    <div class="modal fade" id="sendEmail" tabindex="-1" aria-labelledby="sendEmail" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-3 px-2">
                <div class="border-0">
                    <p class="modal-title fs-5 text-center">Send Email</p>
                </div>
                <div class="modal-body">
                    <div class="flex justify-content-between">
                        <div>
                            <p class="mb-2">Contractor</p>
                            <p>Qube Logistic</p>
                        </div>
                        <div>
                            <p class="mb-2">Contractor Email</p>
                            <p>Undefined</p>
                        </div>
                    </div>
                    <select class="form-select mt-4" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <button class="btn btn-primary d-flex align-items-center mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-lg align-middle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5H2a.5.5 0 0 1 0-1h5V2.5A.5.5 0 0 1 8 2z" />
                        </svg>
                        <span>Add Attachment</span>
                    </button>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</template>