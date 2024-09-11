<?php

namespace App\Http\Controllers;

use App\Models\CourseApplication;
use Illuminate\Http\Request;

class CourseApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'course_id' => 'required|exists:courses,id',
            'message' => 'nullable|string',
        ]);

        CourseApplication::create($validated);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
