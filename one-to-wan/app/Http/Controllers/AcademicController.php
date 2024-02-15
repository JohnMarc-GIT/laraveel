<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\Student;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function index(Student $student)
    {
        $academic = $student->academic;
        return view('academics.index', compact('academic', 'student'));
    }

    public function create(Student $student)
    {
        return view('academics.create', compact('student'));
    }

    public function store(Request $request, Student $student)
    {
        $request->validate([
            'course' => 'required',
            'year' => 'required|integer',
        ]);

        $academic = new Academic($request->all());
        $student->academic()->save($academic);

        return redirect()->route('students.index')->with('success', 'Academic record created successfully');
    }

    public function edit(Student $student, Academic $academic)
    {
        return view('academics.edit', compact('student', 'academic'));
    }

    public function update(Request $request, Student $student, Academic $academic)
    {
        $request->validate([
            'course' => 'required',
            'year' => 'required|integer',
        ]);

        $academic->update($request->all());

        return redirect()->route('students.index')->with('success', 'Academic record updated successfully');
    }

    public function destroy(Student $student, Academic $academic)
    {
        $academic->delete();

        return redirect()->route('students.index')->with('success', 'Academic record deleted successfully');
    }
}

