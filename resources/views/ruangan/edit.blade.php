@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Ruangan</div>
      <div class="panel-body">
        <form action="{{ route('ruangan.update',$ruangan) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <input type="text" name="nama_ruangan" class="form-control" placeholder="Masukkan Ruangan" value="<?=$ruangan->nama_ruangan?>">
          </div>
          
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();