@extends('layouts.navbar')

@section('title') Course Details @endsection
@section('menu') single_page_menu @endsection
@section('logo') 
<a class="navbar-brand logo_1" href="{{route('index')}}"> <img src="{{asset('img/single_page_logo.png')}}" alt="logo"> </a>
<a class="navbar-brand logo_2" href="{{route('index')}}"> <img src="{{asset('img/logo.png')}}" alt="logo"> </a>
@endsection

@section('header')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>{{$course->name}}</h2>
                            <p>Home<span>/</span>Course Details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{asset('img/single_cource.png')}}" alt="">
                    </div>
                    <div class="content_wrapper">
                        <!-- <h4 class="title_top">Objectives</h4> -->
                        <h3 class="title_top">{{$course->name}}</h3>
                        <div class="content">
                            <p>{{$course->full_description}}</p>
                        </div>

                        <h4 class="title">Eligibility</h4>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                        </div>

                        <a href="#" class="btn_1 w-5 mt-4">Enroll the course</a>
                       
                    </div>
                </div>


               
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->


@endsection