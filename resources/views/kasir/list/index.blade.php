@extends('layouts.layout')
@section('content')
<div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
                <!-- code : davidprasetyo.com - myhotel laravel app - and modified by group 9 -->
                <form action="{{url('/kasir/list')}}">
                    <div class="form-group">
                    <label style="margin: 20px 20px 0;font-size: 15px">Search by Username</label>
                    <input type="text" name="search" placeholder="Username" id="search" class="form-control" style="font-size: 15px;color:white;background-color:rgba(0,0,0,0.4)"/>
                    </div>
                    <button type="submit" id="button-filter" class="btn btn-danger pull-right" style="margin-right: 20px">
                    <i class="fa fa-search"></i> Search
                    </button>
                </form>
                <!-- code : davidprasetyo.com - myhotel laravel app - and modified by group 9 -->
                <?php $jumlah=0 ?>                                
                <?php $balance=0 ?>
                @foreach($total as $tot)
                    <?php $jumlah++ ?>
                    <?php $balance=$balance+$tot->balance ?>
                @endforeach
                <label style="margin: 20px 20px 0;font-size: 15px">Total Jumlah Request = {{$jumlah}}</label>
                <label style="margin: 20px 20px 0;font-size: 15px">Total Balance Request = Rp.{{$balance}}</label>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th></th>
                            <th>Request Balance</th>                            
                            <th>Username</th>                            
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($request as $req)                            
                            <tr>
                                <td></td>
                                <td>{{$req->balance}}</td>
                                <td>{{$req->customer_username}}</td>                                
                                <td colspan="2">                                    
                                    <a href="{{url('kasir/list/terima',$req->id)}}" class="btn btn-info">Terima</a>
                                    <a href="{{url('kasir/list/tolak',$req->id)}}" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                    {{$request->links()}}                    
                </div>
            </div>
        </div>    
@endsection
