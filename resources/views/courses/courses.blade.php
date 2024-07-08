@extends('layouts.navbar')

@section('title') Our Courses @endsection
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
                        <h2>Our Courses</h2>
                        <p>Home<span>/</span>Courses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--::review_part start::-->
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>popular courses</p>
                    <h2>Special Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($courses as $course)
            <div class="col-sm-6 col-lg-4">
                <div class="single_special_cource">
                    <a href="{{route('courses.details', $course->id)}}">
                    <img src="{{asset('img')}}/{{$course->imgPath}}" class="special_img" alt="">
                    </a>
                    <div class="special_cource_text">
                        <a href="{{route('courses.categry', $course->category->id)}}" class="btn_4">{{$course->category->name}}</a>
                        <h4>{{$course->price}}</h4>
                        <a href="{{route('courses.details', $course->id)}}">
                            <h3>{{$course->name}}</h3>
                        </a>
                        <p>{{$course->small_description}}</p>
                        <div class="author_info">
                            <div class="author_img">
                                <img src="{{asset('img/author')}}/{{$course->instructor->imgPath}}" alt="">
                                <div class="author_info_text">
                                    <p>Conduct by:</p>
                                    <h5><a href="#">{{$course->instructor->name}}</a></h5>
                                </div>
                            </div>
                            <div class="author_rating">
                                <div class="rating">
                                    <a href="#"><img src="{{asset('img/icon/color_star.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/icon/color_star.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/icon/color_star.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/icon/color_star.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/icon/star.svg')}}" alt=""></a>
                                </div>
                                <p>3.8 Ratings</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="d-flex justify-content-center my-5">
{{ $courses->links() }}
</div>
<!--::blog_part end::-->

@endsection