<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourses(){
        $courses = Course::paginate(3);

        return view('courses.courses', ['courses'=> $courses]);
    }
    public function getCategry($catid){

        $courses = Course::where('category_id', $catid)->paginate(3);

        return view('courses.courses', ['courses'=> $courses]);
    }
    public function getCourseDetails($courseid){

        $course = Course::where('id', $courseid)->first();

        return view('courses.course-details', ['course'=> $course]);
    }
}
