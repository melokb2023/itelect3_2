<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grades;
use App\Models\StudentInfo;
use App\Models\EnrolledSubjects;
class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


        $grades = Grades:: join('studentinfo', 'grades.sNo', '=', 'studentinfo.sno')->get();
        return view('grades.index', compact('grades'));
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

        $grades = new Grades();
        $grades->esNo = $request->xesNo;
        $grades->sNo = $request->xsNo;
        $grades->prelim = $request->xprelim;
        $grades->midterm = $request->xmidterm;
        $grades->final = $request->xfinal;
        $grades->remarks = $request->xremarks;
        $grades->save();
        return redirect()->route('grades');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $grades = Grades::where('gNo', $id)->get();
        return view('grades.show', compact('grades'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $grades = Grades::where('gNo', $id)->get();
        return view('grades.edit', compact('grades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $grades = Grades::where('gNo', $id)
        ->update(
            [
            'prelim'=> $request->xprelim,
            'midterm'=> $request->xmidterm,
            'final'=> $request->xfinal,
            'remarks'=>$request->xremarks,
            ]);
        return redirect()->route('grades');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $grades = Grades::where('gNo', $id);
        $grades->delete();
        return redirect()->route('grades');
    }
    public function getEnrolledSubjects(){
        $enrolledsubjects = EnrolledSubjects::all();
        $studentinfo = StudentInfo::all();
        return view('grades.add', compact('enrolledsubjects', 'studentinfo'));
    }

}
