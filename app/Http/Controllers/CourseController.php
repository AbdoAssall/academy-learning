<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourses(){
        $courses = Course::paginate(3);

        // $category = Category::all();
        return view('courses.courses', ['courses'=> $courses]);
    }
    public function getCategry($catid){

        $courses = Course::where('category_id', $catid)->paginate(3);
        $category = Category::find($catid);

        return view('courses.courses', ['courses'=> $courses, 'category' => $category]);
    }
    public function getCourseDetails($courseid){

        $course = Course::where('id', $courseid)->first();

        return view('courses.course-details', ['course'=> $course]);
    }
}
