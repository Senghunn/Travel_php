@extends('front_master')
@section('content')


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('partials.tourist_navbar')
        @include('partials.booking_banner')
    </div>
    <!-- Navbar & Hero End -->



    <!-- Process Start -->
    @include('partials.process')
    <!-- Process Start -->

    <!-- Booking Start -->
    @include('partials.booking')
    <!-- Booking Start -->


    @endsection
        

 