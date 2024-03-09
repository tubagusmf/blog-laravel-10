@extends('frontend.layout.template')

@push('meta-seo')
    <meta name="description" value="Contact Tebe Blog, Seputar web yang memberika informasi menarik dan terakurat.">
    <meta name="keyword" value="Tebe Blog, tebe blog teknologi, tebe games, tebe sport, kontak tebe blog">
    <meta property="og:title" content="Contact - Tebe Blog">
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="SITE NAME">
    <meta property="og:description" value="Contact Tebe Blog, Seputar web yang memberika informasi menarik dan terakurat, serta sebagai media informasi yang memiliki banyak hiburan.">
    <meta property="og:image" value="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png">
@endpush

@section('title', 'Contact - Tebe Blog')

@section('content')
    
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8" data-aos="zoom-out">
            <!-- Featured blog post-->
            <div class="card shadow-sm mb-4">
                <div class="text-cent">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1871.2567767618723!2d106.81782378851383!3d-6.386912342653052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1708759476402!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="card-body">
                    <div class="small text-muted">{{ date('d/m/Y') }}</div>
                    <h2 class="card-title">My Contact</h2>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ex molestiae omnis dolorem tenetur optio cum commodi quod fugit laudantium repellat aliquam alias odit consectetur dolore ab, dolores praesentium officiis.
                    </p>

                    <ul>
                        <li>Email : {{ $config['email'] }}</li>
                        <li>Phone : {{ $config['phone'] }}</li>
                        <li><a href="https://youtube.com/{{ $config['youtube'] }}">Youtube</a></li>
                        <li><a href="https://instagram.com/{{ $config['instagram'] }}">Instagram</a></li>
                        <li><a href="https://facebook.com/{{ $config['facebook'] }}">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        {{-- side widgets --}}
        @include('frontend.layout.side-widget')
    </div>
</div>

@endsection

        
        
