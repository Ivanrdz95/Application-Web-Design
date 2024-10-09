@extends('layouts.app')

@section('title', 'Superhero Details')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>{{ $superhero->superhero_name }} ({{ $superhero->real_name }})</h2>
            <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->superhero_name }}" class="img-fluid mb-3">
            <p><strong>Additional Info:</strong> {{ $superhero->additional_info }}</p>
            <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
