@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="card bg-base-300">
        <div class="card-body">
            <form action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Title</legend>
                    <input value="{{ old('name') }}" name="name" type="text"
                        class="input w-full @error('name') input-error @enderror" placeholder="Tag" />
                    @error('name')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <button class="btn btn-primary">Create</button>
        </div>
        </form>
    </div>
    </div>
@endsection
