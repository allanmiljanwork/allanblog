@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="card bg-base-300 shadow-sm">
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p>{!! $post->displayBody !!}</p>
            <div class="card-actions justify-end">
            </div>
        </div>
    </div>
@endsection
