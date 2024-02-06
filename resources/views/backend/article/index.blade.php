@extends('backend.layout.template')

@push('css-datatables')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

{{-- <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet"> --}}
@endpush

@section('title', 'List Article - Admin')

@section('content')


{{-- Content --}}

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Articles</h1>      
    </div>

    <div class="mt-3">
        <a href="{{ url('article/create') }}" class="btn btn-primary btn-sm mb-3">Create</a>

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

        {{-- @if (session('success'))
            <div class="mb-3">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>            
        @endif --}}

        {{-- sweet alert success --}}
        <div class="swal" data-swal="{{ session('success') }}"></div>

        <table class="table table-striped table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Views</th>
                    <th>Status</th>
                    <th>Publish Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                
            </tbody>

        </table>
    </div>

  </main>

  @push('js-datatables')
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
      {{-- Alert Success --}}
      <script>
        const swal = $('.swal').data('swal');
        if (swal) {
            Swal.fire({
                'title'                 : 'Success',
                'text'                  : swal,
                'icon'                  : 'success',
                'showConfirmButton'   : false,
                'timer'                 : 2000,
            });        
        }

        function deleteArticle(e) {
            let id = e.getAttribute('data-id');

            Swal.fire({
                title               : 'Delete Article',
                text                : "Are You Sure?",
                icon                : 'question',
                showCancelButton    : true,
                confirmButtonColor  :'#d33',
                cancelButtonColor   : '#3085d6',
                confirmButtonText   : 'Delete!',
                cancelButtonText    : 'Cancel'

            }).then((result) => {
                if(result.value) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'DELETE',
                        url: '/article/' + id,
                        dataType: "json",
                        success: function(response) {
                            Swal.fire({
                                title: 'Success',
                                text: response.message,
                                icon: 'success'
                            }).then((result) => {
                                window.location.href = '/article';
                            })
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                        }
                    });
                }
            })
        }
      </script>


      {{-- dataTable --}}
      <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverside: true,
                ajax: '{{ url()->current() }}',
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'category_id',
                        name: 'category_id'
                    },
                    {
                        data: 'views',
                        name: 'views'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'publish_date',
                        name: 'publish_date'
                    },
                    {
                        data: 'button',
                        name: 'button'
                    },
                ]
            });
        });
	
        // new DataTable('#dataTable');
      </script>
  @endpush
    
@endsection