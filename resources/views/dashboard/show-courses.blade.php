@extends('dashboard.layouts.app')

@section('page-title') Vision - Admin - Show Courses @endsection

@section('content')

<!-- Layout container -->
<div class="layout-page">
    <!-- Navbar -->

    @component('dashboard.components.navbar')

    @endcomponent

    <!-- / Navbar -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-2"><span class="text-muted fw-light">Courses /</span> Show All Courses</h4>
            <a href="{{route('dashboard.create')}}" type="button" class="btn btn-success mb-4">Add Course</a>

            <div class="card">
                <h5 class="card-header">Courses</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Image / Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>instructor</th>
                                <th>description</th>
                                <th>Created_at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($courses as $course)
                            
                            <tr>
                                <td>{{$course->id}}</td>
                                <td>
                                    <img src="{{asset('img')}}/{{$course->imgPath}}" class=" img-flui border border-5 border-primary me-3" 
                                    style="width:60px; height: 60px;" alt="image">
                                    <span class="fw-medium">{{$course->name}}</span>
                                </td>
                                <td value="{{$course->category->id}}">{{$course->category->name}}</td>
                                <td>{{$course->price}}</td>
                                <td value="{{$course->instructor->id}}">{{$course->instructor->name}}</td>
                                <td>{{$course->small_description}}</td>
                                <td>{{$course->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item link-danger" href="javascript:void(0);"><i
                                                    class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- / Content -->

        </div>
        @component('dashboard.components.footer')

        @endcomponent

        <div class="content-backdrop fade"></div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->

    @endsection