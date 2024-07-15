@extends('dashboard.layouts.app')

@section('page-title') Vision - Admin - Add Course @endsection

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

      @if ($errors->any())
      <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
      </ul>
      </div>
    @endif

      <h4 class="py-3 mb-4"><span class="text-muted fw-light">Courses/</span> Add Courses</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Add course</h5>
              <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
              <form  method="POST" action="{{route('dashboard.store')}}" >
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Course name</label>
                  <div class="col-sm-10">
                    <input type="text" name="course_name" class="form-control @error('instructor_name') is-invalid @enderror" id="basic-default-name"
                      placeholder="Course name" value="{{old('course_name')}}" />
                  </div>
                  <div class="invalid-feedback">
                        Please provide a course name.
                      </div>
                  @error('image_course')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                </div>
                <div class="row mb-3">
                  <div class="input-group col-sm-10">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Course price</label>
                    <span class="input-group-text rounded-start">$</span>
                    <input type="number" min="0" name="course_price" class="form-control" placeholder="Amount"
                      aria-label="Amount (to the nearest dollar)" />
                    <span class="input-group-text">.00</span>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                  <div class="col-sm-10">
                    <textarea id="basic-default-message" name="small_description" class="form-control"
                      placeholder="Description course" aria-label="Description course"
                      aria-describedby="basic-icon-default-message2">{{old('small_description')}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Image course</label>
                  <div class="col-sm-10">
                    <div class="input-group">
                      <input type="file" name="image_course" class="form-control  @error('image_course') is-invalid @enderror" />
                      <div class="invalid-feedback">
                        Please provide a course image.
                      </div>
                    </div>
                  </div>
                  
                  @error('image_course')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                </div>
                <div class="row mb-3">
                  <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Select category</label>
                  <div class="col-sm-10">
                    <select class="form-select @error('category_name') is-invalid @enderror" name="category_name" id="exampleFormControlSelect1"
                      aria-label="Default select example">
                      <option hidden>Categories</option>
                      @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                     @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Please provide a category.
                      </div>
                    @error('category_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Instructor name</label>
                  <div class="col-sm-10">
                    <select class="form-select @error('instructor_name') is-invalid @enderror" name="instructor_name" id="exampleFormControlSelect1"
                      aria-label="Default select example">
                      <option hidden>Instructor</option>
                      @foreach ($instructors as $instructor)
                          <option value="{{$instructor->id}}">{{$instructor->name}}</option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Please provide a instructor name.
                      </div>
                    @error('instructor_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="html5-date-input" class="col-md-2 col-form-label">Date Add</label>
                  <div class="col-md-10">
                    <input class="form-control" name="Created_at" type="date" disabled
                      value="{{now()->format('Y-m-d')}}" id="html5-date-input" />
                  </div>
                </div>
                <hr class="border-secondary-subtle">
                <!-- // card-heade -->
                <h5 class="mb-4">Course details</h5>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Main Image</label>
                  <div class="col-sm-10">
                    <div class="input-group">
                      <input type="file" name="img_details" class="form-control  @error('img_details') is-invalid @enderror" id="inputGroupFile02" />
                      <div class="invalid-feedback">
                        Please provide a course image details.
                      </div>
                      @error('image_course')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                  <div class="col-sm-10">
                    <textarea id="basic-default-message" name="full_description" class="form-control"
                      placeholder="Description course" aria-label="Description course"
                      aria-describedby="basic-icon-default-message2">{{old('full_description')}}</textarea>
                  </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

    @component('dashboard.components.footer')

    @endcomponent

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</div>
<!-- / Layout page -->

@endsection