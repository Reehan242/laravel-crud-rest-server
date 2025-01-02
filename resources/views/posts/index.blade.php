@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <div class="row {{ $posts ? 'justify-content-start' : 'justify-content-center' }}">
            @forelse ($posts as $post)
                <div class="col-lg-4 mx-2 my-2">
                    <div class="card">
                        <div class="card-header">
                            <h2>{{ $post->title }}</h2>
                        </div>
                        <div class="card-body">
                            <p>{{ $post->body }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center">
                    <h1>No Post Found...</h1>
                </div>
            @endforelse
        </div>
    </div>

    <div style="height: 600px;">
        
    </div>
@endsection
