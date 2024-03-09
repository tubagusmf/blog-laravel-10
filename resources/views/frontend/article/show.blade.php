@extends('frontend.layout.template')

@push('meta-seo')
    <meta name="author" content="{{ $article->User->name }}" />
    <meta name="description" value="{{ Str::limit(strip_tags($article->desc), 150, '...') }}">
    <meta name="keyword" value="{{ $article->title . ' - Tebe Blog' }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $article->title . ' - Tebe Blog' }}">
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="SITE NAME">
    <meta property="og:description" value="Article Tebe Blog, Seputar web yang memberika informasi menarik dan terakurat, serta sebagai media informasi yang memiliki banyak hiburan.">
    <meta property="og:image" value="{{ asset('storage/backend/'.$article->img) }}">
@endpush

@section('title', $article->title . ' - Tebe Blog')

@section('content')
    
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8" data-aos="fade-up">
            <!-- Featured blog post-->
            <div class="card shadow-sm mb-4">
                <a href="{{ url('p/'.$article->slug) }}">
                    <img class="card-img-top single-img" src="{{ asset('storage/backend/'.$article->img) }}" alt="{{ $article->title }}" /></a>
                <div class="card-body">
                    <div class="small text-muted">
                        <span class="ml-2">{{ $article->created_at->format('d-m-Y') }} | {{ $article->User->name }} | </span>
                        <span class="ml-2">
                            <a href="{{ url('category/'.$article->Category->slug) }}"> {{ $article->Category->name }}</a>
                        </span>
                        <span class="ml-2">{{ $article->views }}</span>x
                    </div>
                    <h1 class="card-title">{{ $article->title }}</h1>
                    <p class="card-text">{!! $article->desc !!}</p>

                    <div class="mt-4 mb-4">
                        <p style="font-size: 20px">Share this</p>
                        <a href="https://www.facebook.com/sharer.php?u={{ url()->current() }}" target="_blank" class="btn btn-primary btn-sm"><i class="fab fa-facebook"></i></a>
                        <a href="https://api.whatsapp.com/send?text={{ url()->current() }}" target="_blank" class="btn btn-success btn-sm"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- side widgets --}}
        @include('frontend.layout.side-widget')
    </div>
</div>

@endsection

        
        
