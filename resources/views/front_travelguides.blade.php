@extends('front_master')
@section('content')


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('partials.tourist_navbar')
        @include('partials.travelguide_banner')
    </div>
    <!-- Navbar & Hero End -->



    <!-- team start -->
    @include('partials.team')
    <!-- team end -->

    


    @endsection
        

 