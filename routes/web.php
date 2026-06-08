<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Models\Course;

Route::get('/', function () {
    $courses = Course::all();
    return view('home', compact('courses'));
})->name('home');

Route::get('/apply', function() {
    return view('apply');
})->name('apply');

Route::get('/portal/certificate', function() {
    return view('certificate');
})->name('certificate');

Route::get('/portal/notices', function() {
    return view('notices');
})->name('student.notices');

Route::get('/portal/schedule', function() {
    return view('schedule');
})->name('student.schedule');

Route::get('/portal/billing', function() {
    return view('billing');
})->name('student.billing');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses/{id}/learn', [CourseController::class, 'learn'])->name('courses.learn');
Route::get('/courses/{id}/assignments/{assignment_id}', [CourseController::class, 'submitAssignment'])->name('courses.assignments.submit');

use App\Http\Controllers\AuthController;
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

use App\Http\Controllers\StudentController;
Route::get('/portal', [StudentController::class, 'portal'])->name('student.portal');
Route::get('/portal/settings', [StudentController::class, 'settings'])->name('student.settings');
Route::get('/portal/settings/academic', [StudentController::class, 'academic'])->name('student.settings.academic');
Route::get('/portal/settings/notifications', [StudentController::class, 'notifications'])->name('student.settings.notifications');
Route::get('/portal/settings/billing', [StudentController::class, 'billing'])->name('student.settings.billing');

// Auth routes removed for stability as controllers were missing
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
