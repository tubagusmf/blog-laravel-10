<!-- Side widgets-->
<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card shadow-sm mb-4">
        <div class="card-header">Search</div>
        <div class="card-body">
            <form action="{{ url('articles/search') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" name="keyword" type="text" placeholder="Search articles..."/>
                    <button class="btn btn-primary" id="button-search" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card shadow-sm mb-4">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div>
                @foreach ($categories as $item)                            
                <a href="#!" class="bg-primary badge text-white" style="text-decoration: none">{{ $item->name }}</a>
                @endforeach
            </div>        
        </div>
    </div>
    <!-- Side widget-->
    <div class="card shadow-sm mb-4">
        <div class="card-header">Side Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
    </div>
</div>