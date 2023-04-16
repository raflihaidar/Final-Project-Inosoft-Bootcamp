<template>
    <div class="modal fade" id="modalInternalNote" tabindex="-1" aria-labelledby="modalInternalNote" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-3 px-2">
                <div class="border-0">
                    <p class="modal-title fs-5 text-center">
                        Internal Note
                    </p>
                </div>
                <div class="modal-body grid gap-2">
                    <div class="mb-4">
                        <p class="mb-0 fs-6">By Rafli Admin</p>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
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