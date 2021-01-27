@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data kasus
                <a href="{{route('kasus.create')}}" class="btn btn-primary float-right">
                Tambah
                </a>
                </div> 
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jumlah Positif</th>
                                    <th>Jumlah Meninggal</th>
                                    <th>Jumlah Sembuh</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kasus as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->positif}}</td>
                                    <td>{{$data->meninggal}}</td>
                                    <td>{{$data->sembuh}}</td>
                                    <td>{{$data->tanggal}}</td>
                                    <td>
                                        <form action="{{route('kasus.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kasus.show',$data->id)}}" class="btn btn-sm btn-success">Lihat</a> 
                                            <a href="{{route('kasus.edit',$data->id)}}" class="btn btn-sm btn-warning">Edit</a> 
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete ?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   </div>
               </div> 
            </div>
        </div>
    </div>
@endsection