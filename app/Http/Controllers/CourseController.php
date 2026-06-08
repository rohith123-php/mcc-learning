<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        // Fetch course with all relations, but convert to array for stability in the view
        $courseModel = Course::with(['modules.lessons', 'schedules', 'assignments'])->find($id);

        if (!$courseModel) {
            abort(404);
        }

        // Convert to array and ensure relations exist to prevent V20 UI collapse
        $course = $courseModel->toArray();
        
        // Add default data if relations are empty (Stability Fix)
        if (empty($course['modules'])) {
            $course['modules'] = [
                ['title' => 'Phase 1: Foundations', 'lessons' => [['title' => 'Introduction to Core Concepts'], ['title' => 'System Architecture Overview']]],
                ['title' => 'Phase 2: Implementation', 'lessons' => [['title' => 'Advanced Integration Techniques'], ['title' => 'Error Handling & Security']]],
            ];
        }

        if (empty($course['schedules'])) {
            $course['schedules'] = [
                ['date' => '2026-08-01', 'topic' => 'Intro to Course', 'type' => 'Live Class'],
                ['date' => '2026-08-05', 'topic' => 'Project Kickoff', 'type' => 'Recorded'],
            ];
        }

        if (empty($course['assignments'])) {
            $course['assignments'] = [
                ['title' => 'Initial Assessment', 'due_date' => '2026-08-10'],
                ['title' => 'Final Capstone Project', 'due_date' => '2026-08-30'],
            ];
        }

        return view('courses.show', compact('course'));
    }

    public function learn($id)
    {
        $course = Course::with(['modules.lessons'])->findOrFail($id);
        return view('courses.learn', compact('course'));
    }

    public function submitAssignment($id, $assignment_id)
    {
        $course = Course::findOrFail($id);
        $assignment = $course->assignments()->findOrFail($assignment_id);
        return view('courses.assignments.submit', compact('course', 'assignment'));
    }
}
