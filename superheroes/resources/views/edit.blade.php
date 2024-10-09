@extends('layouts.app')

@section('title', 'Edit Superhero')

@section('content')
<form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="real_name">Real Name</label>
        <input type="text" class="form-control" id="real_name" name="real_name" value="{{ $superhero->real_name }}" required>
    </div>

    <div class="form-group">
        <label for="superhero_name">Superhero Name</label>
        <input type="text" class="form-control" id="superhero_name" name="superhero_name" value="{{ $superhero->superhero_name }}" required>
    </div>

    <div class="form-group">
        <label for="photo_url">Photo URL</label>
        <input type="url" class="form-control" id="photo_url" name="photo_url" value="{{ $superhero->photo_url }}" required>
    </div>

    <div class="form-group">
        <label for="additional_info">Additional Info</label>
        <textarea class="form-control" id="additional_info" name="additional_info">{{ $superhero->additional_info }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update Superhero</button>
</form>
@endsection

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif