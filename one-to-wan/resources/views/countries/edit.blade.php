<!-- resources/views/countries/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Country Record for {{ $student->name }}</h1>

    <form action="{{ route('countries.update', ['student' => $student->id, 'country' => $country->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="continent">Continent:</label>
        <input type="text" name="continent" value="{{ $country->continent }}" required>

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $country->name }}" required>

        <label for="capital">Capital:</label>
        <input type="text" name="name" value="{{ $country->capital }}" required>

        <button type="submit" class="btn btn-primary">Update Country Record</button>

        </form>
@endsection
