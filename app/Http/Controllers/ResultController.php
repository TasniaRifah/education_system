<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results=Result::all();
        return view('result.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('result.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'roll'=>['required',],
            'reg'=>['required',],
            'subject'=>['required'],
            'mark'=>['required'],
        ]);
        $students = Student::all();
       $id=0;
        foreach ($students as $student) {
            // dd($student->roll);
            if ($student->roll == $request->roll) {
              
                $id = $student->id;
                // dd( $id);
            }
        }

        // dd($id);
        $result = Result::create([
            'roll' => $request->roll,
            'reg' => $request->reg,
            'mark' => $request->mark,
            'subject' => $request->subject,
            'student_id'=>$id
        ]);

      return redirect('/results');

    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        //
    }
}
