@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Show Data Desa
            </div>
            <div class="card-body">
                    
                    <div class="form-group">
                        <label for="">Nama Desa</label>
                        <input type="text" class="form-control" name="nama" value="{{$desa->nama}}" class="form-control" readonly>
</div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection