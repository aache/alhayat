<div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-md-8">
                <input type="text" name="contact_name" id="contact_name" placeholder="Name" />
            </div>
            <div class="col-md-8">
                <input type="text" name="contact_no"  id="contact_no" placeholder="Number" />
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="send_sms.php">Add</a>
        </div>
      </div>
    </div>
  </div>