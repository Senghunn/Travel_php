@extends('front_master')
@section('content')




    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('partials.tourist_navbar')
        @include('partials.error_banner')
    </div>
    <!-- Navbar & Hero End -->



  @include('partials.error')



  @endsection