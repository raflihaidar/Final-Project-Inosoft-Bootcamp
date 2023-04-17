<template>
    <div class="modal fade" id="modalCancelled" tabindex="-1" aria-labelledby="modalTerminate" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-3 px-2">
                <div class="border-0">
                    <p class="modal-title fs-5 text-center">
                        Reason of Rejection
                    </p>
                </div>
                <div class="modal-body grid gap-2">
                    <div>
                        <p class="mb-0">Cancelled by</p>
                        <p>Rafli Admin</p>
                    </div>
                    <div class="mb-2">
                        <p class="mb-0">Description</p>
                        <div class="form-floating disabled">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                    </div>
                    <div>
                        <p class="mb-5">Attachment</p>
                    </div>
                </div>
                <div class="modal-content border-0">
                    <p class="modal-title fs-5 text-center mt-5">
                        <button type="button" style="background-color:#01bebe; width:200px; border: none;" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>