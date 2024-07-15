<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    public function show(){
        $courses = Course::all();

        return view('dashboard.show-courses', ['courses' => $courses]);
    }
    public function create(){
        $courses = Course::all();
        $categories = Category::all();
        $instructors = Instructor::all();
        return view('dashboard.add-courses', 
        ['courses'=> $courses, 'categories' => $categories, 'instructors' => $instructors]);
    }
 
    public function store(){
    //     // Log the file details
    // if (request()->hasFile('imgPath')) {
    //     $file = request()->file('imgPath');
    //     \Log::info('File details:', [
    //         'original_name' => $file->getClientOriginalName(),
    //         'mime_type' => $file->getMimeType(),
    //         'size' => $file->getSize(),
    //     ]);
    // }
    // if (request()->hasFile('img_details')) {
    //     $file = request()->file('img_details');
    //     \Log::info('File details:', [
    //         'original_name' => $file->getClientOriginalName(),
    //         'mime_type' => $file->getMimeType(),
    //         'size' => $file->getSize(),
    //     ]);
    // }
    
        // Custom error messages
    $messages = [
        'course_name.required' => 'The course name is required.',
        'course_price.required' => 'The course price is required.',
        'course_price.numeric' => 'The course price must be a number.',
        'small_description.required' => 'The course description is required.',
        'image_course.image' => 'The file must be an image.',
        'image_course.required' => 'The Course image is required.',
        'image_course.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
        'image_course.max' => 'The image may not be greater than 2MB.',
        'category_name.required' => 'The category name is required.',
        'category_name.integer' => 'You have to make choose a category.',
        'instructor_name.required' => 'The instructor name is required.',
        'instructor_name.integer' => 'You have to make choose a instructor name.',
        'full_description.required' => 'The Course details description is required.',
        'img_details.image' => 'The file must be an image.',
        'img_details.required' => 'The Course details image is required.',
        'img_details.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
        'img_details.max' => 'The image may not be greater than 2MB.',
    ];

        // to validate the data
         request()->validate([
            'course_name' => ['required', 'max:100'],
            'course_price' => ['required', 'numeric'],
            'category_name' => ['required', 'integer'],
            'instructor_name' => ['required', 'integer'],
            'small_description' => ['required', 'min:15'],
            'full_description' => ['required', 'min:100'],
         ], $messages);

         // Store the image
    $image_course = null;
    if (request()->hasFile('imgPath')) {
        $image_course = request()->file('imgPath')->store('images', 'public');
    }
    $img_details = null;
    if (request()->hasFile('img_details')) {
        $img_details = request()->file('img_details')->store('images', 'public');
    }

        // get the data
        $course_name = request()->course_name;
        $course_price = request()->course_price;
        $small_description = request()->small_description;
        $image_course = request()->image_course;
        $category_name = request()->category_name;
        $instructor_name = request()->instructor_name;
        $Created_at = request()->Created_at;
        $img_details = request()->img_details;
        $full_description = request()->full_description;

        // store the data in the database
        Course::create([
            'name' => $course_name,
            'price' => $course_price,
            'small_description' => $small_description,
            'imgPath' => $image_course,
            'category_id' => $category_name,
            'instructor_id' => $instructor_name,
            'Created_at' => $Created_at,
            'img_details' => $img_details,
            'full_description' => $full_description,
        ]);

        // redirection to show course
        return to_route('dashboard.show');
    }
}
