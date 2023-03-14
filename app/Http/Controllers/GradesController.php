<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Grades;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = new Grades;
        $grades->gNo = 1;
        $grades->esNo = 1;
        $grades->sNo = 1;
        $grades->prelim= 1.25;
        $grades->midterm = 1.50;
        $grades->final = 1.00;
        $grades->remarks = "Pass";
        $grades->save();

       echo "Grades data successfully saved in the database";
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
    public function show(string $id)
    {
        //
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
}
