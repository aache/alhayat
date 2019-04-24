<div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Popup Content</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-md-8 m-2">
                <input type="text" name="popup_title" id="popup_title" placeholder="Popup Title" class="form-control"/>
            </div>
            <div class="col-md-8 m-2">
                <textarea name="popup_content"  id="popup_content" placeholder="Content" style="height:250px" class="form-control"></textarea>
            </div>
            <div class="col-md-8 m-2">
            <input type="text" name="popup_footer" id="popup_footer" placeholder="Popup Footer" class="form-control"/>
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary"  onclick="updatePopup()">Add</a>
        </div>
      </div>
    </div>
  </div>