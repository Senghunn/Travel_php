@extends('front_master')
@section('content')


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('partials.tourist_navbar')
        @include('partials.services_banner')
    </div>
    <!-- Navbar & Hero End -->



  <!-- Service Start -->
  @include('partials.services')
  <!-- Service End -->

  <!-- Testimonial Start -->
  @include('partials.testimonials')
  <!-- Testimonial End -->

@endsection
    
        

    