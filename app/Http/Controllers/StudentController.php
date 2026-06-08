<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function portal()
    {
        $enrolledCourses = Course::take(2)->get();
        return view('student.portal', compact('enrolledCourses'));
    }

    public function settings()
    {
        return view('student.settings');
    }

    public function academic()
    {
        return view('student.settings.academic');
    }

    public function notifications()
    {
        return view('student.settings.notifications');
    }

    public function billing()
    {
        return view('student.settings.billing');
    }
}
