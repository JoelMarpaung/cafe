@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="text-align:center;font-weight: bolder" class="title">{{$title}} {{$dapur->name}}</h4>
                    <p class="category"></p></div>
                <div class="panel-body">
                <div class="col-md-12">
                <div class="card">                
                <div class="content table-responsive table-full-width">        
                <form action="" method="post"> 
                {{ csrf_field() }}                                   
                <label class="col-md-4 control-label">Nama Bahan Dapur</label>
                <input type="text" class="form-control" value="{{$dapur->name}}" readonly>
                <label class="col-md-4 control-label">Jenis Bahan Dapur</label>
                <input type="text" class="form-control" value="{{$dapur->type}}" readonly>
                <label class="col-md-4 control-label">Jumlah Bahan Dapur</label>
                <input type="text" class="form-control" value="{{$dapur->quantity}}" readonly>
                <label class="col-md-4 control-label">Deskripsi</label>    
                <textarea class="form-control" placeholder="Berikan deskripsi disini" rows="3" readonly>
                {{$dapur->deskripsi}}
                </textarea>                                
                </form><br>                
                <a href="{{url('inventori/dapur/ubah',$dapur->id)}}" class="btn btn-danger">Ubah Bahan Dapur</a> 
                <a href="{{url('inventori/dapur/hapus',$dapur->id)}}" class="btn btn-succes">Hapus</a>   
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>                
@endsection