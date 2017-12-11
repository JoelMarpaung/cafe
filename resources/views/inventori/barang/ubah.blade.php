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
                <form action="{{url('/inventori/ubahbarang',$barang->id)}}" method="post"> 
                {{ csrf_field() }}                                   
                <label class="col-md-4 control-label">Nama Barang</label>
                <input type="text" class="form-control" name="name" value="{{$barang->name}}" required>
                <label class="col-md-4 control-label">Jenis Barang</label>
                <input type="text" class="form-control" name="type" value="{{$barang->type}}" required>
                <label class="col-md-4 control-label">Jumlah Barang</label>
                <input type="text" class="form-control" name="quantity" value="{{$barang->quantity}}" required>
                <label class="col-md-4 control-label">Deskripsi</label>    
                <textarea class="form-control" placeholder="Berikan deskripsi disini" rows="3" name="deskripsi" required>
                {{$barang->deskripsi}}
                </textarea>                                
                <input type="submit" class="btn btn-danger" value="Ubah Barang"/>
                </form>                                
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>                
@endsection