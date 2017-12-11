@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
                <div class="panel-body">
                <div class="col-md-12">
                <div class="card">                
                <div class="content table-responsive table-full-width">                
                <label class="col-md-4 control-label">Username</label>
                <input type="text" value="{{$customer->username}}" class="form-control" readonly>
                <label class="col-md-4 control-label">First Name</label>
                <input type="text" value="{{$customer->first_name}}" class="form-control" readonly>
                <label class="col-md-4 control-label">Last Name</label>    
				<input type="text" value="{{$customer->last_name}}" class="form-control" readonly>
				<label class="col-md-4 control-label">Balance</label>    
				<input type="number" value="{{$customer->balance}}" class="form-control" readonly>       
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>            
@endsection
