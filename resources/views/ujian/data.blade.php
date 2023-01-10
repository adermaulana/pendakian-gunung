@extends('layouts.main')

@section('container')

      <div class="table-responsive col-lg-12">
                <a style="background-color : #3a5a40; color:white;" class="btn btn" href="/data/create">Create New Data</a>
        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">NIM</th>
              <th scope="col">NAMA</th>
              <th scope="col">ALAMAT</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $user)

            <tr>
              <td>{{ $user->nim }}</td>
              <td> {{ $user->nama }} </td>
              <td>{{ $user->alamat }}</td>
            </tr>

            @endforeach
            

          </tbody>
        </table>
        <div style="color:salmon;" class="d-flex justify-content-end">{{ $data->links() }}</div>
      </div>
@endsection