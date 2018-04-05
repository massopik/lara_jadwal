@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Dosen</div>
      <div class="panel-body">
        <form action="{{ route('dosen.update',$dosen) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="nama" class="form-control" placeholder="Enter Your Name" value="<?=$dosen->nama?>">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter Your Email" value="<?=$dosen->email?>">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone" value="<?=$dosen->phone?>">
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