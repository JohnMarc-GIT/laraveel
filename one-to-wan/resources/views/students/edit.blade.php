<!-- resources/views/students/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required>
        
        <label for="age">Age:</label>
        <input type="number" name="age" value="{{ $student->age }}" required>
        
        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ $student->address }}" required>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
