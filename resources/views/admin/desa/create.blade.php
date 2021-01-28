@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Tambah Data Desa
            </div>
            <div class="card-body">
                <form action="{{route('desa.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="">Pilih Kecamatan</label>
                    <select name="id_kecamatan" class="form-control" require>
                    @foreach($kecamatan as $data)
                    <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                    @endforeach
                    </select>
                    </div>
                    
                    <div class="form-group">
                    <label for="">Nama Desa</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama Kelurahan">
                                @if($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                    </div>
                    </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection