@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="card bg-base-300">
        <div class="card-body">
            <form action="{{ route('tags.update', ['tag' => $tag]) }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Name</legend>
                    <input value="{{ old('name') ?? $tag->name }}" name="name" type="text"
                        class="input w-full @error('name') input-error @enderror" placeholder="Name" />
                    @error('name')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
