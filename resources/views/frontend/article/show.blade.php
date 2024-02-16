@extends('frontend.layout.template')

@section('content')
    
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card shadow-sm mb-4">
                <a href="{{ url('p/'.$article->slug) }}">
                    <img class="card-img-top single-img" src="{{ asset('storage/backend/'.$article->img) }}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ $article->created_at->format('d-m-Y') }}</div>
                    <h1 class="card-title">{{ $article->title }}</h1>
                    <p class="card-text">{!! $article->desc !!}</p>
                </div>
            </div>
        </div>
        
        {{-- side widgets --}}
        @include('frontend.layout.side-widget')
    </div>
</div>

@endsection

        
        
