<?php

namespace App\Http\Controllers;

use App\Models\DinamicMenu;
use App\Models\Statistics;
use App\Http\Requests\StoreStatisticsRequest;
use App\Http\Requests\UpdateStatisticsRequest;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = DinamicMenu::all();

        $statistics = Statistics::first();

        return view('pages.statistics', compact('menus', 'statistics'));
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
    public function store(StoreStatisticsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Statistics $statistics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistics $statistics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStatisticsRequest $request, Statistics $statistics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistics $statistics)
    {
        //
    }
}
