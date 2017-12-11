@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4  style="text-align:center;font-weight: bolder" class="title">{{$title}} {{$barang->name}}</h4>
                    <p class="category"></p></div>
                <div class="panel-body">
                <div class="col-md-12">
                <div class="card">                
                <div class="content table-responsive table-full-width">        
                <form action="" method="post"> 
                {{ csrf_field() }}                                   
                <label class="col-md-4 control-label">Nama Barang</label>
                <input type="text" class="form-control" value="{{$barang->name}}" readonly>
                <label class="col-md-4 control-label">Jenis Barang</label>
                <input type="text" class="form-control" value="{{$barang->type}}" readonly>
                <label class="col-md-4 control-label">Jumlah Barang</label>
                <input type="text" class="form-control" value="{{$barang->quantity}}" readonly>
                <label class="col-md-4 control-label">Deskripsi</label>    
                <textarea class="form-control" placeholder="Berikan deskripsi disini" rows="3" readonly>
                {{$barang->deskripsi}}
                </textarea>                                
                </form><br>                
                <a href="{{url('inventori/barang/ubah',$barang->id)}}" class="btn btn-info">Ubah Barang</a> 
                <a href="{{url('inventori/barang/hapus',$barang->id)}}" class="btn btn-danger">Hapus</a>   
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>                
@endsection