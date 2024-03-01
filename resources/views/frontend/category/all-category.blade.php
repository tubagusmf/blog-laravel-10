@extends('frontend.layout.template')

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

        
        
