@extends('layouts.app')

@section('title', 'Post Show')

@section('content')
    <div class="container mt-4">
        <h1>Post Details</h1>
        <div class="p-4 rounded shadow">
            <p><strong>ID:</strong> {{ $id }}</p>
            <p><strong>Livre:</strong> {{ $livre }}</p>
            <p><strong>Title:</strong> {{ $post['title'] }}</p> <!-- Now works! -->
            <p><strong>Content:</strong> {{ $post['livre'] }}</p>
        </div>
    </div>
@endsection