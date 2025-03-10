<?php

namespace App\Http\Controllers;

use App\Models\DinamicMenu;
use App\Models\StartUp;
use Illuminate\Http\Request;

class StartUpController extends Controller
{
    public function show($id)
    {
        $start_up = StartUp::find($id);

        $menus = DinamicMenu::all();

        return view('startup.show', compact('start_up','menus'));
    }
}
