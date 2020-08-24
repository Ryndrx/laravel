@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
      <div class="col-10">
          <h1 class="mt-3">Daftar Mahasiswa</h1>

          <table class="table">
          <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">TanggalLahir</th>
                <th scope="col">NIK</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
                <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach( $mahasiswa as $mhs )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $mhs->Nama }}</td>
                <td>{{ $mhs->TanggalLahir }}</td>
                <td>{{ $mhs->NIK }}</td>
                <td>{{ $mhs->Email }}</td>
                <td>
                  <a href="" class="badge badge-success">edit</a>
                  <a href="" class="badge badge-danger">delete</a>
                </td>
            </tr>
            @endforeach
          </tbody>
          </table>
        </div>
      </div>
  </div>
@endsection