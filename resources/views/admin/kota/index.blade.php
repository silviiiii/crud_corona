@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> 
                    Data kota
                    <a href="{{route('kota.create')}}" class="btn btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kode kota</th>
                                <th>kota</th>
                                <th>provinsi</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($kota as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->kode_kota}}</td>
                                <td>{{$data->nama_kota}}</td>
                                <td>{{$data->provinsi->nama_provinsi}}</td>
                                <td>
                                    <form action="{{route('kota.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('kota.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('kota.show',$data->id)}}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection