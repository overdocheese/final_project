@extends('admin.layout.appadmin')

@section('content')
<h1 class="mt-4">Product</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Product</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <a href="index.php?url=productTambah" class="btn btn-primary btn-sm">Tambah</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Status</th>
                    <th>Total Transaksi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1; @endphp
                @foreach ($data as $data)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $data->user->username}}</td>
                    <td>{{ $data->tanggal}}</td>
                    <td>{{ $data->lokasi}}</td>
                    <td>{{ $data->status_transaksi}}</td>
                    <td>Rp. {{number_format($data->total_transaksi, 0, ",", ".")}}</td>
                    <td>
                        <form action="controller/productController.php" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-info btn-sm">Detail</a>
                            <a class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" name="proses" value="hapus" class="btn btn-danger btn-sm" onclick="return alert('Apakah anda yakin akan menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>
@endsection