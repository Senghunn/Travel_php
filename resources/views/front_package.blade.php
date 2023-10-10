@extends('front_master')
@section('content')


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('partials.tourist_navbar')
        @include('partials.package_banner')
    </div>
    <!-- Navbar & Hero End -->



    <!-- Package Start -->
    @include('partials.packages')
    <!-- Package End -->


    <!-- Booking Start -->
    @include('partials.booking')
    <!-- Booking Start -->

    <!-- Process Start -->
    @include('partials.process')
    <!-- Process Start -->
    
        
@endsection
    