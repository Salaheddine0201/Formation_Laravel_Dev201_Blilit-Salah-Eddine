@extends('layouts.app')

@section('title', 'Post Show')

@section('content')
    <div class="container mt-4">
        <h1>Post Details</h1>
        <div class="p-4 rounded shadow">
            <p>{{ $data['title'] ?? 'Post not found' }}</p>
        </div>
    </div>
@endsection