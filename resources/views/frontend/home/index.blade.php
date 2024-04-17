@extends('frontend.layouts.master')

@section('content')
    <!--=============================BANNER START==============================-->
    @include('frontend.home.components.slider')
    <!--=============================BANNER END==============================-->


    <!--=============================WHY CHOOSE START==============================-->
    @include('frontend.home.components.why-choose-us')
    <!--=============================WHY CHOOSE END==============================-->


    <!--=============================OFFER ITEM START==============================-->
    @include('frontend.home.components.offer-item')

    <!-- CART POPUT START -->
    @include('frontend.home.components.cart-pop-up')
    <!-- CART POPUT END -->
    <!--=============================OFFER ITEM END==============================-->


    <!--============================= MENU ITEM START==============================-->
    @include('frontend.home.components.menu-item')
    <!--============================= MENU ITEM END==============================-->


    <!--============================= ADD SLIDER START ==============================-->
    @include('frontend.home.components.ad-slider')
    <!--=============================ADD SLIDER END ==============================-->


    <!--=============================TEAM START==============================-->
    @include('frontend.home.components.team-start')
    <!--=============================TEAM END==============================-->


    <!--=============================DOWNLOAD APP START==============================-->
    @include('frontend.home.components.download-app')
    <!--============================= DOWNLOAD APP END==============================-->


    <!--=============================TESTIMONIAL  START ==============================-->
    @include('frontend.home.components.testimonial')
    <!--============================= TESTIMONIAL END ==============================-->


    <!--=============================COUNTER START ==============================-->
    @include('frontend.home.components.counter-start')
    <!--============================= COUNTER END ==============================-->


    <!--============================= BLOG 2 START ==============================-->
    @include('frontend.home.components.blog2')
    <!--=============================BLOG 2 END ==============================-->
@endsection
