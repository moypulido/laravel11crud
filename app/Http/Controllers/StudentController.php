<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
        ]);

        $student = new Student();
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->save();

        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
        ]);

        $student = Student::find($id);
        if ($student) {
            $student->name = $request->input('name');
            $student->age = $request->input('age');
            $student->save();
            return redirect()->route('students.index')->with('success', 'Student updated successfully');
        } else {
            return redirect()->route('students.index')->with('error', 'Student not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return redirect()->route('students.index')->with('success', 'Student deleted successfully');
        } else {
            return redirect()->route('students.index')->with('error', 'Student not found');
        }
    }
}
