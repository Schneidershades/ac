@extends('layouts.dashboard')

@section('content')
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">All Event Applications </h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">ACCi Hub</a></li>
        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Event Applications</li>
     </ol>
  </div>
</div>
@include('backend.partials._errors')

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> All Registered transactions
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>Transaction ID</th>
                <th>transaction Role</th>
                <th>Joined</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach($transactions as $transaction)
              <tr>
                <td>{{$transaction->identifier}}</td>
                <td>{{$transaction->user->name}}</td>
                <td>{{$transaction->created_at}}</td>
                <td>{{$transaction->status}}</td>
                <td>
                  <!-- <a href="{{route('admin-event-transactions.show', $transaction->id)}}" class="btn btn-warning btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-eye"></i></a>
                  <a href="{{route('admin-event-transactions.destroy', $transaction->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a> -->
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>transactions</th>
                <th>transaction Role</th>
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

