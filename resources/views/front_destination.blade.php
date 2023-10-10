@extends('front_master')
@section('content')


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('partials.tourist_navbar')
        @include('partials.destination_banner')
    </div>
    <!-- Navbar & Hero End -->



    <!-- Destination Start -->
    @include('partials.destination')
    <!-- Destination Start -->


    @endsection
        

   