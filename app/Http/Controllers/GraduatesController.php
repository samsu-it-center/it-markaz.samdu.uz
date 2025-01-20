<?php

namespace App\Http\Controllers;

use App\Models\DinamicMenu;
use App\Models\Graduates;
use App\Http\Requests\StoreGraduatesRequest;
use App\Http\Requests\UpdateGraduatesRequest;

class GraduatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = DinamicMenu::all();

       $graduates = Graduates::orderBy('graduation_date', 'desc')->paginate(6);

        return view('pages.graduates',compact('menus','graduates'));
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
    public function store(StoreGraduatesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Graduates $graduates,$id)
    {
       $graduate = Graduates::find($id);

       $menus = DinamicMenu::all();

       return view('graduates.show',compact('graduate','menus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Graduates $graduates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGraduatesRequest $request, Graduates $graduates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Graduates $graduates)
    {
        //
    }
}
