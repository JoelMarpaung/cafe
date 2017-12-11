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
                <form action="{{url('/kasir/member/tambah/balance',$customer->id)}}" method="post"> 
                {{ csrf_field() }}                   
                <label class="col-md-4 control-label">Username</label>
                <input type="text" value="{{$customer->username}}" name="customer_username" class="form-control" readonly>
                <label class="col-md-4 control-label">Current Balance</label>
                <input type="number" value="{{$customer->balance}}" class="form-control" readonly>
                <label class="col-md-4 control-label">Add Balance</label>    
                <input type="number" name="balance" min="1000" max="100000" class="form-control" required>            
                <input type="submit" value="Tambah Top Up" class="btn btn-danger">
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
