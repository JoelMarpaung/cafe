@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="text-align:center;font-weight: bolder" class="title">{{$title}} {{$menu->product_name}}</h4>
                    <p class="category"></p></div>
                <div class="panel-body">
                <div class="col-md-12">
                <div class="card">                
                <div class="content table-responsive table-full-width">
                <img style="display: block;margin-left: auto;margin-right: auto;" src="{{ asset('image/' . $menu->image) }}"/>        
                <form action="" method="post"> 
                {{ csrf_field() }}                   
                <label class="col-md-4 control-label">Nama Menu</label>
                <input type="text" class="form-control" name="product_name" value="{{$menu->product_name}}" readonly>
                <label class="col-md-4 control-label">Jenis Menu</label>
                <input type="text" class="form-control" name="product_type" value="{{$menu->product_type}}" readonly>
                <label class="col-md-4 control-label">Harga</label>    
                <input type="number" class="form-control" name="price" value="{{$menu->price}}" readonly>            
                <label class="col-md-4 control-label">Deskripsi</label>    
                <textarea class="form-control" placeholder="Berikan deskripsi disini" rows="3" name="deskripsi" readonly>
                {{$menu->deskripsi}}
                </textarea>                
                <label class="col-md-4 control-label">Status</label>                                    
                <input type="text" class="form-control" name="status" value="{{$menu->status}}" readonly>                
                </form>        
                @if($menu->status == 'Tersedia')
                                    <a href="{{url('customer/menu/beli',$menu->id)}}" class="btn btn-succes"><p>Beli</p></a>
                                    @endif                            
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>                
@endsection