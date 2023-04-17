<template>
    <div class="modal fade" id="modalComplete" tabindex="-1" aria-labelledby="modalInternalNote" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-3 px-2">
                <div class="border-0">
                    <p class="modal-title fs-5 text-center" style="margin-top: 45px; margin-bottom: 10px;">
                        <i class="fa-solid fa-circle-check fa-beat-fade fa-3x" style="color: #01bebe;"></i>
                    </p>
                </div>
                <div class="modal-body grid gap-2">
                    <div class="mb-2">
                        <div>
                            <p class="modal-title fs-5 text-center">Are you sure to complete this transaction?</p>
                            <p class="mb-0 mt-2 fs-6 text-center">Once confirmed, the 3rd Party Instruction will be Completed</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" style="background-color:none; border: none;" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" style="background-color:#01bebe; border: none;" class="btn btn-secondary">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</template>