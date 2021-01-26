@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Show Data Rw
            </div>
            
                    <div class="form-group">
                        <label for="">Nama Rw</label>
                        <input type="text" class="form-control" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" readonly>
</div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection