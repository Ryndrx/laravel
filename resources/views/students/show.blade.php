@extends('layout/main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
      <div class="col-6">
          <h1 class="mt-3">Detail Mahasiswa</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $student->Nama }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $student->TanggalLahir }}</h6>
                <p class="card-text">{{ $student->NIK }}</p>
                <p class="card-text">{{ $student->Email }}</p>
                
                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection