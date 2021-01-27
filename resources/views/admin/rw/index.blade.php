@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Rw
                <a href="{{route('Rw.create')}}" class="btn btn-primary float-right">
                Tambah Rw
                </a>
                </div> 
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            
                            <th>Nama Rw</th>
                            <th>Aksi<th>
                        </tr>
                        @php $no=1; @endphp
                        @foreach($rw as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            
                            <td>{{$data->nama_rw}}</td>
                            <td>
                            <form action="{{route('Rw.destroy', $data->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <a href="{{route('Rw.edit' ,$data->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('Rw.show' ,$data->id)}}" class="btn btn-warning">Show</a>
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