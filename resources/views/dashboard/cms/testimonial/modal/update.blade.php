<form enctype="multipart/form-data" action="{{route('admin.cms.testimonial.update.post', \Crypt::encrypt($testimonial->id))}}" method="post">  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Testimonial update</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control" required="required" value="{{$testimonial->name}}">
        </div>
        <div class="form-group">
          <label>image</label>
          <input type="file" name="image" class="form-control" value="{{$testimonial->image}}">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" name="description">{{$testimonial->description}}</textarea>
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
        <button type="submit" class="btn green">Submit</button>
      </div>
    </div>
  </div>
</form>