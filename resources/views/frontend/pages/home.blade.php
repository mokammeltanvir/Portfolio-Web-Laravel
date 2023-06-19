@extends('frontend.layouts.master')
@section('title', 'Home')

@section('content')
<!-- Banner-Area-Start -->
<!-- include header -->
@include('frontend.pages.widgets.hero')
<!-- Service-Area-Start -->
@include('frontend.pages.widgets.service')
<!-- Service-Area-End -->

<!-- About-Area-Start -->
@include('frontend.pages.widgets.about')
<!-- About-Area-End -->

<!-- Portfolio-Area-Start -->
@include('frontend.pages.widgets.portfolio')
<!-- Portfolio-Area-End -->

<!-- Skills-Area-Start -->
@include('frontend.pages.widgets.skills')
<!-- Skills-Area-End -->

<!-- Experience-Area-Start -->
@include('frontend.pages.widgets.experience')
<!-- Experience-Area-End -->

<!-- Testimonial-Area-Start -->
@include('frontend.pages.widgets.testimonial')
<!-- Testimonial-Area-End -->

<!-- Blog-Area-Start -->
@include('frontend.pages.widgets.blog')
<!-- Blog-Area-End -->

<!-- Contact-Area-Start -->
@include('frontend.pages.widgets.contact')
<!-- Contact-Area-End -->

@endsection