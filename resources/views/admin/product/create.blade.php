@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<br>
<form method="post" action="{{url('admin/product/store')}}" enctype="multipart/form-data">
{{csrf_field()}} 
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="select" name="jenis" class="custom-select">
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <input id="text1" name="price" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="text2" name="stok" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Nama Toko</label> 
    <div class="col-8">
      <select id="select1" name="penjual_id" class="custom-select">
        @foreach($penjual as $pjl)
        <option value="{{$pjl->id}}">{{$pjl->nama_toko}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection