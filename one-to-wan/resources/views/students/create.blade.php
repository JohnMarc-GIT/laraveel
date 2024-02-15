<!-- resources/views/students/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="age">Age:</label>
        <input type="number" name="age" required>
        
        <label for="address">Address:</label>
        <input type="text" name="address" required>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
