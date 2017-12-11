@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>
                    <p class="category"></p></div>
                <div class="panel-body">
                <div class="col-md-12">
                <div class="card">                
                <div class="content table-responsive table-full-width">
                <form action="{{url('/inventori/storedapur')}}" method="post"> 
                {{ csrf_field() }}                   
                <label class="col-md-4 control-label">Nama Bahan Dapur</label>
                <input type="text" class="form-control" name="name" required>
                <label class="col-md-4 control-label">Jenis Bahan Dapur</label>
                <input type="text" class="form-control" name="type" required>
                <label class="col-md-4 control-label">Jumlah Bahan Dapur</label>    
                <input type="text" class="form-control" name="quantity" required>            
                <label class="col-md-4 control-label">Deskripsi</label>    
                <textarea class="form-control" placeholder="Berikan deskripsi disini" rows="3" name="deskripsi" required>    
                </textarea>                                
                <input type="submit" value="Tambah Inventori" class="btn btn-danger">
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