@extends('dashboard.layout.layout')   
@section('content')
<div class="page-content">
  <div class="page-head">
    <div class="page-title">
      <h1>Admin Dashboard
      </h1>
    </div>
  </div>
  <ul class="page-breadcrumb breadcrumb">
    <li>
      <a href="#">Home</a>
      <i class="fa fa-circle"></i>
    </li>
    <li>
      <span class="active">Dashboard</span>
    </li>
  </ul>
  <div class="portlet light bordered">
    <div class="portlet-title">
      <div class="caption font-dark">
        <i class="icon-settings font-dark"></i>
        <span class="caption-subject bold uppercase">Media list</span>
      </div>
    </div>
    <div class="portlet-body">
      <form enctype="multipart/form-data" action="{{route('admin.news.media.create.post')}}" method="post">
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
          <textarea id="summernote" name="description"></textarea>
          <script>
            $('#summernote').summernote({
              placeholder: 'Hello Bootstrap 4',
              tabsize: 2,
              height: 100
            });
          </script>
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
        <button type="submit" class="btn green">Submit</button>
      </div>
    </form>
  </div>
</div>

@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
