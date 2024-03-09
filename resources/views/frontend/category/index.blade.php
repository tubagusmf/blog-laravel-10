@extends('frontend.layout.template')

@push('meta-seo')
    <meta name="description" value="Category Tebe Blog, Seputar web yang memberika informasi menarik dan terakurat.">
    <meta name="keyword" value="Tebe Blog, tebe blog teknologi, tebe games, tebe sport, kategori tebe blog">
    <meta property="og:title" content="Category {{ $category . " - Tebe Blog"}} ">
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="SITE NAME">
    <meta property="og:description" value="Category Tebe Blog, Seputar web yang memberika informasi menarik dan terakurat, serta sebagai media informasi yang memiliki banyak hiburan.">
    <meta property="og:image" value="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png">
@endpush

@section('title', 'Category ' . $category . ' - Tebe Blog')

@section('content')
    
<!-- Page content-->
<div class="container">
    <div class="mb-4">
        <form action="{{ url('articles/search') }}" method="POST">
            @csrf
            <div class="input-group">
                <input class="form-control" name="keyword" type="text" placeholder="Search articles..."/>
                <button class="btn btn-primary" id="button-search" type="submit">Search</button>
            </div>
        </form>
    </div>

        <p>Showing articles with category : <b>{{ 
        $category }}</b> </p>

    <div class="row">
        <!-- Blog entries-->
        @forelse ($articles as $item)
            <div class="col-lg-4" data-aos="flip-up">
                <div class="card mb-4">
                    <a href="{{ url('p/'.$item->slug) }}"><img class="card-img-top post-img" src="{{ asset('storage/backend/'.$item->img) }}" height="250px" alt="..." /></a>
                    <div class="card-body card-height">
                        <div class="small text-muted">{{ $item->created_at->format('d-m-Y') }} | {{ $item->User->name }} | 
                        <a href="{{ url('category/'.$item->Category->slug) }}">{{ $item->Category->name }}</a>
                        </div>
                        <h2 class="card-title h4">{{ $item->title }}</h2>
                        <p class="card-text">{{ Str::limit(strip_tags($item->desc), 100, '...') }}</p>
                        <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">Read more →</a>
                    </div>
                </div>
            </div>
        @empty
        <h3>Not Found!</h3>
        @endforelse

        {{-- Pagination --}}
        <div class="pagination justify-content-center my-4">
            {{ $articles->onEachSide(0)->links() }}
        </div>
    </div>
</div>

@endsection

        
        
