<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\CourseApplication;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        ContactMessage::create($validated);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
