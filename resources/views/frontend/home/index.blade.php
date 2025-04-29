@extends('frontend.layouts.master')

@section('contents')
    <!--==========================
                    BANNER PART START
                ===========================-->
    @include('frontend.home.sections.banner-section')
    <!--==========================
                  BANNER PART END
              ===========================-->


    <!--==========================
                  CATEGORY SLIDER START
              ===========================-->
    @include('frontend.home.sections.category-slider-section')
    <!--==========================
                  CATEGORY SLIDER END
              ===========================-->


    <!--==========================
                  FEATURES PART START
              ===========================-->
    @include('frontend.home.sections.features-section')
    <!--==========================
                  FEATURES PART END
              ===========================-->


    <!--==========================
                  COUNTER PART START
              ===========================-->
    @include('frontend.home.sections.counter-section')
    <!--==========================
                  COUNTER PART END
              ===========================-->


    <!--==========================
                  OUR CATEGORY START
              ===========================-->
    @include('frontend.home.sections.our-category-section')

    <!--==========================
                  OUR CATEGORY END
              ===========================-->


    <!--==========================
                  OUR LOCATION START
              ===========================-->
    @include('frontend.home.sections.our-location-section')
    <!--==========================
                  OUR LOCATION END
              ===========================-->


    <!--==========================
                  FEATURED LISTING START
              ===========================-->
    @include('frontend.home.sections.featured-listing-section')
    <!--==========================
                  FEATURED LISTING END
              ===========================-->


    <!--==========================
                  OUR PACKAGE START
              ===========================-->
    @include('frontend.home.sections.our-package-section')
    <!--==========================
                  OUR PACKAGE END
              ===========================-->


    <!--============================
                  TESTIMONIAL PART START
              ==============================-->
    @include('frontend.home.sections.testimonial-section')
    <!--============================
                  TESTIMONIAL PART END
              ==============================-->


    <!--==========================
                  BLOG PART START
              ===========================-->
    @include('frontend.home.sections.blog-section')
    <!--==========================
                  BLOG PART END
              ===========================-->
@endsection
