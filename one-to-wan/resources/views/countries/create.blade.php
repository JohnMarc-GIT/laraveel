<!-- countries/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Country Record</h1>

    <form action="{{ route('countries.store', $student->id) }}" method="POST">
        @csrf
        <label for="continent">Continent:</label>
        <input type="text" name="continent" required>

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="capital">Capital:</label>
        <input type="text" name="capital" required>

        <button type="submit" class="btn btn-success">Create Country Record</button>
    </form>
@endsection
