<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about_us', [HomeController::class, 'about'])->name('about');
Route::get('/contact_us', [HomeController::class, 'contact'])->name('contact');
Route::get('/courses', [CourseController::class, 'getCourses'])->name('courses');
Route::get('/courses/{id}', [CourseController::class, 'getCategry'])->name('courses.categry');
Route::get('/courses/{id}/details', [CourseController::class, 'getCourseDetails'])->name('courses.details');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// --- Dashboard ---

Route::get('/dashboard', [DashboardController::class, 'indexDashboard'])->name('dashboard.index');

// --- Dashboard ---