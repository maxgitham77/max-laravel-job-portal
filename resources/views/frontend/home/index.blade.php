@extends('frontend.layouts.master')

@section('content')
    <div class="bg-homepage1"></div>

    <!-- Hero Section Starts -->
    @include('frontend.home.sections.hero-section')
    <!-- Hero Section Ends -->

    <div class="mt-100"></div>

    <!-- Category Section Starts -->
    @include('frontend.home.sections.category-section')
    <!-- Category Section Ends -->

    <!-- Featured Section Starts -->
    @include('frontend.home.sections.featured-job-section')
    <!-- Featured Section Ends -->

    <!-- Why Choose Us Section Starts -->
    @include('frontend.home.sections.why-choose-us-section')
    <!-- Why Choose Us Section Ends -->

    <!-- The Right Section Starts -->
    @include('frontend.home.sections.find-right-job-section')
    <!-- The Right Section Ends -->

    <!-- Counter Section Starts -->
    @include('frontend.home.sections.counter-section')
    <!-- Counter Section Ends -->

    <!-- Top Recruiter Section Starts -->
    @include('frontend.home.sections.top-recruiter-section')
    <!-- Top Recruiter Section Ends -->

    <!-- Pricing Plan Section Starts -->
    @include('frontend.home.sections.pricing-plan-section')
    <!-- Pricing Plan Section Ends -->

    <!-- Job Location Section Starts -->
    @include('frontend.home.sections.job-location-section')
    <!-- Job Location Section Ends -->

    <!-- Client Says Section Starts -->
    @include('frontend.home.sections.what-says-client-section')
    <!-- Client Says Section Ends -->

    <!-- News Blog Section Starts -->
    @include('frontend.home.sections.news-blog-section')
    <!-- News Blog Section Ends -->

    <!-- News Letter Section Starts -->
    @include('frontend.home.sections.newsletter-section')
    <!-- News Letter Section Ends -->

@endsection
