@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/dosen/create') }}" class="btn btn-primary btn-sm">Tambah Dosen <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($dosen as $d)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $d->nama }}</td>
              <td>{{ $d->email }}</td>
              <td>{{ $d->phone }}</td>
              
              <td>
                <a href="{{ route('dosen.edit', $d) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('dosen.destroy',$d) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()