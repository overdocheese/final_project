@extends('admin.layout.appadmin')

@section('content')  
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
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
                                <a href="{{url('admin/penjual/create')}}" class="btn btn-primary btn-sm"> Tambah </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nama Toko</th>
                                            <th>Deskripsi Toko</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nama Toko</th>
                                            <th>Deskripsi Toko</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach($penjual as $pjl)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$pjl->nama}}</td>
                                            <td>{{$pjl->nama_toko}}</td>
                                            <td>{{$pjl->deskripsi_toko}}</td>
                                            <td>@include('admin.penjual.rating')</td>
                                            <td>
                                                <form action="#" method="post">
                                                    <a class="btn btn-info btn-sm" href="#">Detail</a>
                                                    <a class="btn btn-warning btn-sm" href="#">Ubah</a>
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus"
                                                    onclick="return confirm('Anda yakin data ini akan dihapus?')">Hapus</button>
                                                    <input type="hidden" name="idx" value="">
                                                </form>
                                            </td>
                                        </tr>
                                        @php 
                                        $no++
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

</div>
</div>
@endsection