<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required',],
            'email'=>['required',],
            'roll'=>['required',],
            'reg'=>['required',],
            'password'=>['required'],
        ]);

        $user = Student::create([
            'name' => $request->name,
            'roll' => $request->roll,
            'reg' => $request->reg,
            'class' => $request->class,
            'gender' => $request->gender,
            'mobile_number' => $request->mobile_number,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        Auth::login($user);
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        $marks = [];
        $subjects = [];
        $results = Result::all();
        foreach ($results as $result) {
            if ($result->roll == $student->roll&&$result->reg == $student->reg) {
                $mark = $result->mark;
                $subject= $result->subject;
                array_push($marks,$mark); 
                array_push($subjects,$subject); 
            }
         
        }
        return view('student.details', compact('student','marks','subjects'));
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
