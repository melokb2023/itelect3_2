<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\StudentInfo;

class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
         // 
         
    {
       
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       
    $studentinfo = new StudentInfo();
    $studentinfo ->idNo=$request->xidNo;
    $studentinfo ->firstName=$request->xfirstName;
    $studentinfo ->middleName=$request->xmiddleName;
    $studentinfo ->lastName=$request->xlastName;
    $studentinfo ->suffix=$request->xsuffix;
    $studentinfo ->course=$request->xcourse;
    $studentinfo ->year=$request->xyear;
    $studentinfo ->birthDate=$request->xbirthDate;
    $studentinfo ->gender=$request->xgender;
    $studentinfo ->save();
    return redirect()->route('students');
    
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
