@extends('frontend.layout.template')

@push('meta-seo')
    <meta name="description" value="All Category Tebe Blog, Seputar web yang memberika informasi menarik dan terakurat.">
    <meta name="keyword" value="Tebe Blog, tebe blog teknologi, tebe games, tebe sport, daftar kategori tebe blog">
    <meta property="og:title" content="All Category - Tebe Blog">
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="SITE NAME">
    <meta property="og:description" value="All Category Tebe Blog, Seputar web yang memberika informasi menarik dan terakurat, serta sebagai media informasi yang memiliki banyak hiburan.">
    <meta property="og:image" value="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png">
@endpush

@section('title', 'All Category - Tebe Blog')

@section('content')
    
<!-- Page content-->
<div class="container">

        <p>Showing articles with category : </p>

    <div class="row">
        
        @foreach ($category as $item)
        <div class="col-lg-3 col-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="text-center">
                        <span>
                            <a href="{{ url('category/'.$item->slug) }}" class="text-decoration-none text-dark"><i class="fa-regular fa-folder fa-3x"></i></a>
                            
                        </span>
                        <h5 class="card-title mt-2">
                            <a href="{{ url('category/'.$item->slug) }}" class="text-decoration-none text-dark">{{ $item->name }} ({{ $item->articles_count }})</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{-- Pagination --}}
        {{-- <div class="pagination justify-content-center my-4">
            {{ $articles->onEachSide(0)->links() }}
        </div> --}}
    </div>
    
</div>

@endsection

        
        
