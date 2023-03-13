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
        //$studentinfo = new StudentInfo;
        //$studentinfo->idNo = "C11-0433";
        //$studentinfo->firstName= "Kyle Bryant";
       // $studentinfo->middleName = "Mejares";
        //$studentinfo->lastName = "Melo";
       // $studentinfo->suffix = "";
       // $studentinfo->course = "BSIT";
       // $studentinfo->year = 3;
        //$studentinfo->birthDate = "2001-11-27";
       // $studentinfo->gender = "Male";
       // $studentinfo->save();

       // echo "Student information successfully saved in the database";

        //DELETE A RECORD
        //find() --- using the field name 'id' (default)
        //where() --- using another fireld name
        //SELECT * FROM studentinfo WHERE sno = 2
        
        //$studentinfo = StudentInfo::where('sno',2);
        //$studentinfo->delete();
        //echo "Student information has been deleted from the database";

        //UPDATE A RECORD
        //$studentinfo = StudentInfo::where('sno',1)->update(['firstName' =>'Kyle Byron']);
       // echo "Student information has been updated from the database";

        //RETRIEVE RECORDS
        $studentinfo = StudentInfo::all();
        return $studentinfo;

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
