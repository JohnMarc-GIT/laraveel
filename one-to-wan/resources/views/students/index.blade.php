<!-- students/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Student Information</h1>

    <a href="{{ route('students.create') }}" class="btn btn-success">Add Student</a>

    @foreach($students as $student)
        <div>
            <h3>{{ $student->name }} - {{ $student->age }} years old</h3>
            <h3>Lives in {{ $student->address }}</h3>
            
            <div>
                <!-- Display academic information -->
                <h4>Academic Information</h4>
                @if($student->academic)
                    <p>Course: {{ $student->academic->course }}</p>
                    <p>Year: {{ $student->academic->year }}</p>
                    <a href="{{ route('academics.edit', [$student->id, $student->academic->id]) }}" class="btn btn-primary">Edit Academic information</a>
                @else
                    <p>No academic information available.</p>
                    <a href="{{ route('academics.create', $student->id) }}" class="btn btn-success">Add Academic Information</a>
                @endif
            </div>

            <div>
                <!-- Display country information -->
                <h4>Country Information</h4>
                @if($student->country)
                    <p>Continent: {{ $student->country->continent }}</p>
                    <p>Name: {{ $student->country->name }}</p>
                    <p>Capital: {{ $student->country->capital }}</p>
                    <a href="{{ route('countries.edit', [$student->id, $student->country->id]) }}" class="btn btn-primary">Edit Country information</a>
                @else
                    <p>No country information available.</p>
                    <a href="{{ route('countries.create', $student->id) }}" class="btn btn-success">Add Country Information</a>
                @endif
            </div>

            <!-- Edit and Delete buttons for Student -->
            <div>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit Student</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Student</button>
                </form>
            </div>
        </div>
        <hr>
    @endforeach
@endsection
