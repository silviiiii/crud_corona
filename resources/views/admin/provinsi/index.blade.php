@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> 
                    Data Provinsi
                    <a href="{{route('provinsi.create')}}" class="btn btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kode Provinsi</th>
                                <th>provinsi</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($provinsi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->kode_provinsi}}</td>
                                <td>{{$data->nama_provinsi}}</td>
                                <td>
                                    <form action="{{route('provinsi.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('provinsi.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('provinsi.show',$data->id)}}" class="btn btn-warning">Show</a>
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