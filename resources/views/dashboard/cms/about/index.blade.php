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
        <span class="caption-subject bold uppercase">About Information</span>
      </div>
    </div>
    <div class="portlet-body">
      <div class="table-toolbar">
      </div>
      <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
        <thead>
          <tr>
            <th> Description </th>
            <th> Actions </th>
          </tr>
        </thead>
        <tbody>
        @foreach($about as $data )
          <tr class="odd gradeX">
            <td class="sorting_1">{!! $data->description !!}</td>
            <td align="center">
              <a href="{{ route('admin.cms.about.update', \Crypt::encrypt( $data->id )) }}" class="btn btn-warning btn-md">Update</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"></div>
@endsection


    