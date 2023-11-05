<!-- Withdraw Modal -->


<div class="modal bg-white fade" id="withdrawModal" tabindex="-1" aria-labelledby="withdrawModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="withdrawModalLabel">Withdraw Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your withdrawal confirmation message here -->
                Are you sure you want to withdraw funds?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <!-- Add your withdraw button here -->
                <button type="button" class="btn btn-primary" id="confirmWithdraw">Withdraw</button>
            </div>
        </div>
    </div>
</div>



{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        const confirmWithdrawButton = document.getElementById("confirmWithdraw");
        const withdrawModal = new bootstrap.Modal(document.getElementById("withdrawModal"));
 
        confirmWithdrawButton.addEventListener("click", function () {
            // Add your withdrawal logic here
            // For example, make an AJAX request to process the withdrawal
            // Once the withdrawal is successful, close the modal
            // If using AJAX, you can place the modal close logic in your AJAX success callback
 
            // For now, let's just close the modal
            withdrawModal.hide();
        });
    });
 </script> --}}

