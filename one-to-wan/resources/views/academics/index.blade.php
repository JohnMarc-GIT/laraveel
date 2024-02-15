
@extends('layouts.app')

@section('content')
    <h1>Academic Information for {{ $student->name }}</h1>

    @if ($academic)
        <p>Course: {{ $academic->course }}</p>
        <p>Year: {{ $academic->year }}</p>
        <a href="{{ route('academics.edit', ['student' => $student->id, 'academic' => $academic->id]) }}" class="btn btn-warning">Edit Academic</a>
        <form action="{{ route('academics.destroy', ['student' => $student->id, 'academic' => $academic->id]) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Academic</button>
        </form>
    @else
        <p>No academic information available for {{ $student->name }}.</p>
        <a href="{{ route('academics.create', $student->id) }}" class="btn btn-success">Add Academic</a>
    @endif
@endsection
