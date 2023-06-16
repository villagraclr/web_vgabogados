<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePracticeAreaRequest;
use App\Http\Requests\UpdatePracticeAreaRequest;
use App\Models\PracticeArea;

class PracticeAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return PracticeArea::all();
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
    public function store(StorePracticeAreaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PracticeArea $practiceArea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PracticeArea $practiceArea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePracticeAreaRequest $request, PracticeArea $practiceArea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PracticeArea $practiceArea)
    {
        //
    }
}
