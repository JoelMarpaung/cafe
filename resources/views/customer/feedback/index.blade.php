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
                <form action="{{url('/customer/feedback/give')}}" method="post"> 
                {{ csrf_field() }}                   
                <label class="col-md-4 control-label">Username</label>
                <input type="text" value="{{$customer->username}}" class="form-control" name="customer" readonly>
                <label class="col-md-4 control-label">Subjek</label>
                <select class="form-control" name="subjek" required>
                <option value="Menu">Menu</option>
                <option value="Pelayanan">Pelayanan</option>
                <option value="Tempat">Tempat</option>
                <option value="Website">Website</option>
                </select>
                <label class="col-md-4 control-label">Kriteria</label>
                <select class="form-control" name="kriteria" required>
                <option value="Pujian">Pujian</option>
                <option value="Kritik">Kritik</option>        
                <option value="Pujian dan Kritik">Pujian dan Kritik</option>
                </select>
                <label class="col-md-4 control-label">Deskripsi</label>                    
                <textarea class="form-control" placeholder="Berikan deskripsi disini" rows="5" name="deskripsi" required>
                </textarea>                
                <input type="submit" value="Give Feedback" class="btn btn-danger">
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
