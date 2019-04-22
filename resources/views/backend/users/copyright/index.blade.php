@extends('layouts.dashboard')

@section('content')


@include('backend.partials._errors')




@endsection

@section('scripts')

@include('backend.partials._datatablesjs')

@endsection


@section('stylesheets')

@include('backend.partials._datatablescss')
@endsection
