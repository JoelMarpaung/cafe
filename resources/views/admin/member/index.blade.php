@extends('layouts.layout')
@section('content')
<div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
                 <!-- code : davidprasetyo.com - myhotel laravel app - and modified by group 9 -->
                <form action="{{url('/admin/member')}}">
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
                <label style="margin: 20px 20px 0;font-size: 15px">Total Jumlah Member = {{$jumlah}}</label>
                <label style="margin: 20px 20px 0;font-size: 15px">Total Balance Member = Rp.{{$balance}}</label>              
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th></th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>                                              
                            <th>Balance</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody> 
                            @foreach($member as $mem)                                                 
                            <tr>
                                <td></td>
                                <td>{{$mem->username}}</td>
                                <td>{{$mem->first_name}}</td>
                                <td>{{$mem->last_name}}</td>                                
                                <td>{{$mem->balance}}</td>
                                <td>{{$mem->created_at}}</td>
                                <td>{{$mem->updated_at}}</td>
                                <td>                                                                        
                                    <a href="{{url('admin/member/hapus',$mem->id)}}" class="btn btn-danger">Hapus</a>    
                                </td>
                            </tr>
                            </form> 
                            @endforeach                           
                        </tbody>
                    </table>
                    {{$member->links()}}                    
                </div>
            </div>
        </div>
@endsection