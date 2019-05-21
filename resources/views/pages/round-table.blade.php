@extends('layouts.web')

@section('content')

@include('partials._search')

<!-- page-banner start-->
<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Round Table</h3>
                <ul class="banner-link text-center">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <span class="active">Round Table</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- page-banner ends-->



@include('partials._actionmark')

@endsection