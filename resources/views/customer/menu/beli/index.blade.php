@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="text-align:center;font-weight: bolder" class="title">{{$title}} {{$menu->product_name}}</h4>
                    <p class="category"></p>
                </div>
                <div class="panel-body">
                <div class="col-md-12">
                <div class="card">                
                <div class="content table-responsive table-full-width">                
                <form action="{{url('/customer/menu/beli/confirm')}}" method="post"> 
                {{ csrf_field() }}                   
                <label class="col-md-4 control-label">Username Pemesan</label>
                <input type="text" value="{{$customer->username}}" class="form-control" name="customer_username" readonly>
                <label class="col-md-4 control-label">ID Menu</label>
                <input type="text" value="{{$menu->id}}" class="form-control" name="product_id" readonly>
                <label class="col-md-4 control-label">Nama Menu</label>
                <input type="text" value="{{$menu->product_name}}" class="form-control" name="product_name" readonly>
                <label class="col-md-4 control-label">Jenis Menu</label>    
				<input type="text" value="{{$menu->product_type}}" class="form-control" name="product_type" readonly>
				<label class="col-md-4 control-label">Harga</label>    
				<input type="number" value="{{$menu->price}}" class="form-control" name="price" readonly>       
                <label class="col-md-4 control-label">Jumlah Pemesanan</label>    
                <input type="number" onkeyup="Harga(this.value)" min="1" class="form-control" name="quantity" required> 
                <label class="col-md-4 control-label">Total Harga</label>    
                <span class="form-control" id="total"></span>
                <label class="col-md-4 control-label">Nomor Meja Pemesanan</label>    
                <input type="number" min="1" max="20" class="form-control" name="table_number" required>  
                <button type="submit" class="btn btn-danger">Beli</button>    
                </form>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>function Harga(str)
        {
        document.getElementById("total").innerHTML = str*{{$menu->price}};
        return;
        }
</script>            
@endsection
