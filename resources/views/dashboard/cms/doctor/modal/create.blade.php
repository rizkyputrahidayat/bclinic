<form enctype="multipart/form-data" action="{{route('admin.cms.doctor.create.post')}}" method="post">  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Doctor create</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label>Certificate</label>
          <input type="text" name="certificate" class="form-control" required="required">
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
        <button type="submit" class="btn green">Save changes</button>
      </div>
    </div>
  </div>
</form>