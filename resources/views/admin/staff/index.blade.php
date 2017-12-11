@extends('layouts.layout')
@section('content')
<div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>                    
                    <p class="category"></p>                        
                </div>
                 <!-- code : davidprasetyo.com - myhotel laravel app - and modified by group 9 -->
                <form action="{{url('/admin/staff')}}">
                    <div class="form-group">
                    <label style="margin: 20px 20px 0;font-size: 15px">Search by Staff Username</label>
                    <input type="text" name="search" placeholder="Staff Username" id="search" class="form-control" style="font-size: 15px;color:white;background-color:rgba(0,0,0,0.4)"/>
                    </div>
                    <button type="submit" id="button-filter" class="btn btn-danger pull-right" style="margin-right: 20px">
                    <i class="fa fa-search"></i> Search
                    </button>
                </form>
                <!-- code : davidprasetyo.com - myhotel laravel app - and modified by group 9 -->   
                <?php $jumlah=0 ?>                                                
                @foreach($total as $tot)
                    <?php $jumlah++ ?>                   
                @endforeach
                <label style="margin: 20px 20px 0;font-size: 15px">Total List Staff = {{$jumlah}}</label>                
                <a style="float:right;margin-right: 10px" href="{{url('admin/staff/tambah')}}" class="btn btn-info"><i class="fa fa-plus"></i>Tambah Staff</a>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th></th>
                            <th>Username Staff</th>                            
                            <th>Role</th>
                            <th>Created At</th>                                                                          
                            <th>Updated At</th>                                                                        
                            <th>Aksi</th>
                        </thead>
                        <tbody> 
                            @foreach($staff as $stf)                                                 
                            <tr>
                                <td></td>
                                <td>{{$stf->username}}</td>                                
                                <td>{{$stf->role}}</td>
                                <td>{{$stf->created_at}}</td>
                                <td>{{$stf->updated_at}}</td>                                                                
                                <td>                                                                        
                                    <a href="{{url('admin/staff/hapus',$stf->id)}}" class="btn btn-danger">Hapus</a>  
                                </td>
                            </tr>
                            </form> 
                            @endforeach                           
                        </tbody>
                    </table>
                    {{$staff->links()}}                    
                </div>
            </div>
        </div>
@endsection