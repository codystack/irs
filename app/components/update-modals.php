    <!-- Meal Delete Modal Start-->
    <div class="modal fade" id="monitoringUpdateModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/img/caution.png" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want <br>to take ownership of this case?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-update-monitoring">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="form-update-monitoring" name="take_ownership_btn" class="btn btn-lg text-white btn-success">Confirm Ownership</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Meal Delete Modal End-->