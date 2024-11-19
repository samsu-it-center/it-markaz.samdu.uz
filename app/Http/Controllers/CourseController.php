<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Course $course, Lesson $lesson)
    {
        $lessons = $course->lessons;
        $lesson = $lessons[0] ?? $lessons->first();

        if ($request->get('lesson_id')) {
            $lesson = Lesson::find($request->get('lesson_id'));
        }

        return view('course.show',compact('lessons','course','lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function lesson(Lesson $lesson, Course $course)
    {
        return view('course.show',compact('lesson','course'));
    }
}
