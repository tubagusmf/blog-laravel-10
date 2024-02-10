@extends('backend.layout.template')

@section('title', 'List Users - Admin')

@section('content')


{{-- Content --}}

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Users</h1>      
    </div>

    <div class="mt-3">

        @if (auth()->user()->role == 1)
            <button class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#modalCreate">Register</button> 
        @endif    

        @if ($errors->any())
            <div class="mb-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        @if (session('success'))
            <div class="mb-3">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
            
        @endif

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <div class="text-center">
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">Edit</button>
                            @if (auth()->user()->role == 1) 
                                @if ($item->id != auth()->user()->id) 
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $item->id }}">Delete</button>
                                @endif                               
                            @endif
                        </div>
                    </td>
                </tr>                   
                @endforeach
            </tbody>
        </table>
    </div>

    @include('backend.user.create-modal')
    @include('backend.user.update-modal')
    @include('backend.user.delete-modal')

  </main>
{{-- </div>
</div> --}}
    
@endsection