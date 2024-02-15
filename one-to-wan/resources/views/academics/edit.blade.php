<!-- resources/views/academics/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Academic Record for {{ $student->name }}</h1>

    <form action="{{ route('academics.update', ['student' => $student->id, 'academic' => $academic->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="course">Course:</label>
        <input type="text" name="course" value="{{ $academic->course }}" required>

        <label for="year">Year:</label>
        <input type="number" name="year" value="{{ $academic->year }}" required>

        <button type="submit" class="btn btn-primary">Update Academic Record</button>
    </form>
@endsection
