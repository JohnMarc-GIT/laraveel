<!-- resources/views/countries/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Country Information for {{ $student->name }}</h1>

    @if ($country)
        <p>Continent: {{ $country->continent }}</p>
        <p>Name: {{ $country->name }}</p>
        <p>Capital: {{ $country->capital }}</p>
        <a href="{{ route('countries.edit', ['student' => $student->id, 'country' => $country->id]) }}" class="btn btn-warning">Edit Country</a>
        <form action="{{ route('countries.destroy', ['student' => $student->id, 'country' => $country->id]) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Country</button>
        </form>
    @else
        <p>No country information available for {{ $student->name }}.</p>
        <a href="{{ route('countries.create', $student->id) }}" class="btn btn-success">Add Country</a>
    @endif
@endsection
