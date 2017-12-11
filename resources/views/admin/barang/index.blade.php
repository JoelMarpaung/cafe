@extends('layouts.layout')
@section('content')
<div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
                <!-- code : davidprasetyo.com - myhotel laravel app - and modified by group 9 -->
                <form action="{{url('/admin/barang')}}">
                    <div class="form-group">
                    <label style="margin: 20px 20px 0;font-size: 15px">Search by Nama Barang</label>
                    <input type="text" name="search" placeholder="Nama Barang" id="search" class="form-control" style="font-size: 15px;color:white;background-color:rgba(0,0,0,0.4)"/>
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
                <label style="margin: 20px 20px 0;font-size: 15px">Total List Barang = {{$jumlah}}</label>                   
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Created At</th>                                                                          
                            <th>Updated At</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody> 
                            @foreach($barang as $bar)                                                 
                            <tr>
                                <td>{{$bar->id}}</td>
                                <td>{{$bar->name}}</td>
                                <td>{{$bar->type}}</td>
                                <td>{{$bar->quantity}}</td>                                                                
                                <td>{{$bar->created_at}}</td>
                                <td>{{$bar->updated_at}}</td>
                                <td>                                    
                                    <a href="{{url('admin/barang/hapus',$bar->id)}}" class="btn btn-danger">Hapus</a>    
                                </td>
                            </tr>
                            </form> 
                            @endforeach                           
                        </tbody>
                    </table>
                    {{$barang->links()}}                    
                </div>
            </div>
        </div>
@endsection