@extends('backend.layout.template')

@section('title', 'List Config - Admin')

@section('content')


{{-- Content --}}

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Config</h1>      
    </div>

    <div class="mt-3">
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
                    <th>Nama</th>
                    <th>Value</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($config as $item => $key)
                <tr>
                    <td>{{ $config->firstItem() + $item }}</td>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->value }}</td>
                    <td>
                        <div class="text-center">
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $key->id }}">Edit</button>
                        </div>
                    </td>
                </tr>                   
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $config->links() }}
        </div>
    </div>

    {{-- Modal Update --}}
    @include('backend.config.update-modal')

  </main>
</div>
</div>
    
@endsection