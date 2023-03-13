<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\EnrolledSubjects;

class EnrolledSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
        //
        $enrolledsubjects = new EnrolledSubjects;
        $enrolledsubjects->subjectCode = "IT Elect 3";
        $enrolledsubjects->description = "Web System and Technologies";
        $enrolledsubjects->units = 3;
        $enrolledsubjects->schedule = "TF 1:00 to 3:30 PM";
        $enrolledsubjects->save();

       echo "Enrolled subjects data successfully saved in the database";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
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
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
