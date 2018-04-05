@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/jadwal/create') }}" class="btn btn-primary btn-sm">Add jadwal <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Hari</th>
              <th>Nama Dosen</th>
              <th>Nama Ruangan</th>
              <th>Nama Matkul</th>
              
              {{-- <th>Action</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach($jadwals as $j)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $j->hari }}</td>
              <td>{{ $j->nama }}</td>
              <td>{{ $j->nama_ruangan }}</td>
              <td>{{ $j->nama_matkul }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()