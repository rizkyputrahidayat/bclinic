@extends( 'dashboard.layout.layout' )
@section( 'content' )
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
        <span class="caption-subject bold uppercase">Slider list</span>
      </div>
    </div>
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"></div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"></div>
    <div class="portlet-body">
      <div class="table-toolbar">
        <div class="row">
          <div class="col-md-6">
              <a href="{{ route('admin.cms.slider.create') }}" class="btn sbold green spawnModal" data-toggle="modal" data-target="#createModal">
                Add New
                <i class="fa fa-plus"></i>
              </a>
          </div>
        </div>
      </div>
      <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
        <thead>
          <tr>
            <th> Image </th>
            <th> Actions </th>
          </tr>
        </thead>
        <tbody>
       @foreach($slider as $data)
          <tr class="odd gradeX">
            <td class="sorting_1"><img src="{{asset($data->image)}}" class="img-circle" width="100" height="100"></td>
            <td align="center">
              <a href="{{ route('admin.cms.slider.delete', \Crypt::encrypt( $data->id )) }}" class="btn btn-danger btn-md spawnModal" data-toggle="modal" data-target="#deleteModal">Delete</a>
            </td>
          </tr>
        @endforeach 
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection


    