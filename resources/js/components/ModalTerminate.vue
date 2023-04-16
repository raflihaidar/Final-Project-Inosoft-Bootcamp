<template>
    <div class="modal fade" id="modalTerminate" tabindex="-1" aria-labelledby="modalTerminate" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-3 px-2">
                <div class="border-0">
                    <p class="modal-title fs-5 text-center">
                        Reason of Cancelation
                    </p>
                </div>
                <div class="modal-body grid gap-2">
                    <div>
                        <p class="mb-0">Cancelled by</p>
                        <p>Rafli Admin</p>
                    </div>
                    <div class="mb-4">
                        <p class="mb-0">Description</p>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                    </div>
                    <div>
                        <p class="mb-0">Attachment</p>
                        <button style="background-color:#01bebe; border: none;" class="btn btn-secondary d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-lg align-middle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5H2a.5.5 0 0 1 0-1h5V2.5A.5.5 0 0 1 8 2z" />
                            </svg>
                            <span>Add Attachment</span>
                        </button>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" style="background-color:none; border: none;" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" style="background-color:#01bebe; border: none;" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</template>