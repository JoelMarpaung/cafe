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
                <form action="{{route('admin.store')}}" method="post"> 
                {{ csrf_field() }}                   
                <label class="col-md-4 control-label">Username</label>
                <input type="text" class="form-control" name="username" required>
                <label class="col-md-4 control-label">Password</label>
                <input type="text" class="form-control" name="password" required>
                <label class="col-md-4 control-label">Role</label>                    
                <select class="form-control" name="role" required>
                <option value="admin">Admin</option>
                <option value="kasir">Kasir</option>
                <option value="inventori">Inventori</option>
                <option value="pelayan">Pelayan</option>
                </select>				
                <input type="submit" value="Tambah Staff" class="btn btn-danger">
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