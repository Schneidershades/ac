@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">All Registered Users </h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-discount"><a href="javaScript:void();">Achievers Hub</a></li>
      <li class="breadcrumb-discount"><a href="javaScript:void();">Dashboard</a></li>
      <li class="breadcrumb-discount active" aria-current="page">All Registered Users</li>
    </ol>
  </div>
  <div class="col-sm-3">
   <div class="btn-group float-sm-right">
    <a href=""><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Create Service Details</button></a>
  </div>
</div>
</div>
<!-- End Breadcrumb-->
@include('backend.partials._errors')

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> All Registered Users
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>Users</th>
                <th>User Role</th>
                <th>Joined</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach($users as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->package->name}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                  <a href="{{route('admin-users.edit', $user->id)}}" class="btn btn-dark btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-edit"></i></a>
                  <a href="{{route('admin-users.show', $user->id)}}" class="btn btn-warning btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-eye"></i></a>
                  <a href="{{route('admin-users.destroy', $user->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Users</th>
                <th>User Role</th>
                <th>Joined</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Row-->





@endsection

@section('scripts')

@include('backend.partials._datatablesjs')

@endsection


@section('stylesheets')

@include('backend.partials._datatablescss')
@endsection
