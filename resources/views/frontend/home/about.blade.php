@extends('frontend.layout.template')

@push('meta-seo')
    <meta name="description" value="About Tebe Blog, Seputar web yang memberika informasi menarik dan terakurat.">
    <meta name="keyword" value="Tebe Blog, tebe blog teknologi, tebe games, tebe sport, tentang tebe blog">
    <meta property="og:title" content="About - Tebe Blog">
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="SITE NAME">
    <meta property="og:description" value="About Tebe Blog, Seputar web yang memberika informasi menarik dan terakurat, serta sebagai media informasi yang memiliki banyak hiburan.">
    <meta property="og:image" value="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png">
@endpush

@section('title', 'About - Tebe Blog')

@section('content')
    
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8" data-aos="zoom-out">
            <!-- Featured blog post-->
            <div class="card shadow-sm mb-4">
                <a href="{{ asset('frontend/img/sitolaut.png') }}">
                    <img class="card-img-top featured-img" src="{{ asset('frontend/img/sitolaut.png') }}" alt="Tebe Blog" /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ date('d/m/Y') }}</div>
                    <h2 class="card-title">About My Blog</h2>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ex molestiae omnis dolorem tenetur optio cum commodi quod fugit laudantium repellat aliquam alias odit consectetur dolore ab, dolores praesentium officiis.</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi omnis veritatis dolor ipsam consequuntur non eum ea odit libero optio nihil labore officia fugit, repudiandae, debitis nobis nulla perferendis deleniti.
                    </p>

                    <ul>
                        <li><a href="https://youtube.com">Youtube</a></li>
                        <li><a href="https://youtube.com">Facebook</a></li>
                        <li><a href="https://youtube.com">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        {{-- side widgets --}}
        @include('frontend.layout.side-widget')
    </div>
</div>

@endsection

        
        
