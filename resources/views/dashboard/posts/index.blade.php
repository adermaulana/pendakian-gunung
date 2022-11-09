@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Postingan Berita Pendakian</h1>
      </div>
      
      @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
      @endif

      <div class="table-responsive col-lg-10">
        <a style="background-color : #3a5a40; color:white;" class="btn btn" href="/dashboard/posts/create">Create New Post</a>
        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)

            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }} </td>
              <td>{{ $post->category->nama }} </td>
              <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-success"><span data-feather="eye"></span></a>
                <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
              </td>
            </tr>

            @endforeach 

          </tbody>
        </table>
      </div>
@endsection