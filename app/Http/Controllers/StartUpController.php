<?php

namespace App\Http\Controllers;

use App\Models\StartUp;
use Illuminate\Http\Request;

class StartUpController extends Controller
{
    public function show($id)
    {
        $start_up = StartUp::find($id);

        return view('start_up.show', compact('start_up'));
    }
}
