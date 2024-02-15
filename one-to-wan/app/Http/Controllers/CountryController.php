<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Student;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Student $student)
    {
        $country = $student->country;
        return view('countries.index', compact('country', 'student'));
    }

    public function create(Student $student)
    {
        return view('countries.create', compact('student'));
    }

    public function store(Request $request, Student $student)
    {
        $request->validate([
            'continent' => 'required',
            'name' => 'required',
            'capital' => 'required',
        ]);

        $country = new Country($request->all());
        $student->country()->save($country);

        return redirect()->route('students.index')->with('success', 'Country record created successfully');
    }

    public function edit(Student $student, Country $country)
    {
        return view('countries.edit', compact('student', 'country'));
    }

    // Update country information
    public function update(Request $request, $student_id)
    {
        // Find the associated country for the student
        $country = Country::where('student_id', $student_id)->first();

        if (!$country) {
            return response()->json(['error' => 'Country record not found'], 404);
        }

        // Update the country information
        $country->update($request->all());

        return response()->json(['message' => 'Country record updated successfully']);
    }

     // Delete country information
     public function destroy($student_id)
     {
         // Find and delete the associated country for the student
         $country = Country::where('student_id', $student_id)->first();
 
         if (!$country) {
             return response()->json(['error' => 'Country record not found'], 404);
         }
 
         $country->delete();
 
         return response()->json(['message' => 'Country record deleted successfully']);
     }
}
