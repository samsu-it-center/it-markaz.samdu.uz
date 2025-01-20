<?php

namespace App\Http\Controllers;

use App\Models\DinamicMenu;
use App\Models\TalantedStudents;
use App\Http\Requests\StoreTalanteStudentsRequest;
use App\Http\Requests\UpdateTalanteStudentsRequest;

class TalantedStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $menus = DinamicMenu::all();

       $talantedstudents = TalantedStudents::paginate(6);

        return view('pages.talantedstudents',compact('menus','talantedstudents'));
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
    public function store(StoreTalanteStudentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TalantedStudents $talanteStudents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TalantedStudents $talanteStudents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTalanteStudentsRequest $request, TalantedStudents $talanteStudents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TalantedStudents $talanteStudents)
    {
        //
    }
}
