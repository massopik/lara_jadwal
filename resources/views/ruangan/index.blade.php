@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/ruangan/create') }}" class="btn btn-primary btn-sm">Tambah Ruangan <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Ruangan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ruangan as $r)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $r->nama_ruangan }}</td>
              
              <td>
                <a href="{{ route('ruangan.edit', $r) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('ruangan.destroy',$r) }}" method="post">
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