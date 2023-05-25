@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<br>
<form method="post" action="{{url('admin/product_galleries/store')}}" enctype="multipart/form-data">
    {{csrf_field()}} 
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <select id="select" name="product_id" class="custom-select">
        @foreach($product as $prod)
        <option value="{{$prod->id}}">{{$prod->nama}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Gambar Produk</label> 
    <div class="col-8">
      <input id="text3" name="foto" type="file" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection