<!-- academics/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Academic Record</h1>

    <form action="{{ route('academics.store', $student->id) }}" method="POST">
        @csrf
        <label for="course">Course:</label>
        <input type="text" name="course" required>

        <label for="year">Year:</label>
        <input type="number" name="year" required>

        <button type="submit" class="btn btn-success">Create Academic Record</button>
    </form>
@endsection
