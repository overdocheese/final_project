@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<br>
<br>
<form method="POST" action="{{url('admin/penjual/store')}}" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Penjual</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control" placeholder="Masukkan Nama Penjual">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama Toko</label> 
    <div class="col-8">
      <input id="text1" name="nama_toko" type="text" class="form-control" placeholder="Masukkan Nama Toko">
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Deskripsi Toko</label> 
    <div class="col-8">
      <textarea id="textarea" name="deskripsi_toko" cols="40" rows="5" class="form-control" placeholder="Ketikkan Deskripsi"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection