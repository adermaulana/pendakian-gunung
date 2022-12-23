@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Kategori</h1>
      </div>
      
      @if(session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
      </div>
      @endif

      <div class="table-responsive col-lg-6">
        <a style="background-color : #3a5a40; color:white;" class="btn btn" href="/dashboard/categories/create">Create New Category</a>
        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Kategori</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)

            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->nama }} </td>
              <td>
                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-success"><span data-feather="eye"></span></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>

            @endforeach 

          </tbody>
        </table>
      </div>
@endsection