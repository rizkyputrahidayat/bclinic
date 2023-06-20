<form enctype="multipart/form-data" action="{{route('admin.cms.promo.create.post')}}" method="post">  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Promo create</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" name="description"></textarea>
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