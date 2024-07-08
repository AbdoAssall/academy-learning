<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            "instructorCount" => Instructor::count('id'),
            "studentCount" => Student::count('id'),
            "courseCount" =>  Course::count('id'),
            "courses" => Course::select('*')->orderBy('id','desc')->take(3)->get()
            ];

            return view('index', $data);
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
