@extends('layouts.layout')
@section('content')
<div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>           
                <!-- code : davidprasetyo.com - myhotel laravel app - and modified by group 9 -->
                <form action="{{url('/pelayan/menu')}}">
                    <div class="form-group">
                    <label style="margin: 20px 20px 0;font-size: 15px">Search by Nama Menu</label>
                    <input type="text" name="search" placeholder="Nama Menu" id="search" class="form-control" style="font-size: 15px;color:white;background-color:rgba(0,0,0,0.4)"/>
                    </div>
                    <button type="submit" id="button-filter" class="btn btn-danger pull-right" style="margin-right: 20px">
                    <i class="fa fa-search"></i> Search
                    </button>
                </form>
                <!-- code : davidprasetyo.com - myhotel laravel app - and modified by group 9 -->   
                <?php $jumlah=0 ?>                                
                <?php $ada=0 ?>
                <?php $tidakada=0 ?>
                @foreach($total as $tot)
                    <?php $jumlah++ ?>
                    @if($tot->status=='Tersedia')
                        <?php $ada++ ?>                    
                    @endif
                    @if($tot->status=='Tidak Tersedia')
                        <?php $tidakada++ ?>                    
                    @endif
                @endforeach
                <label style="margin: 20px 20px 0;font-size: 15px">Total List Menu = {{$jumlah}}</label>
                <label style="margin: 20px 20px 0;font-size: 15px">Total Menu Tersedia = {{$ada}}</label>            
                <label style="margin: 20px 20px 0;font-size: 15px">Total Menu Tidak Tersedia = {{$tidakada}}</label>               
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th></th>
                            <th>Nama Menu</th>
                            <th>Jenis Menu</th>
                            <th>Harga</th>                                              
                            <th>Status</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody> 
                        	@foreach($menu as $men)                                                 
                            <tr>
                            	<td></td>
                                <td>{{$men->product_name}}</td>
                                <td>{{$men->product_type}}</td>
                                <td>{{$men->price}}</td>                                
                                <td>{{$men->status}}</td>
                                <td colspan="3">                                    
                                    <a href="{{url('pelayan/menu/detail',$men->id)}}" class="btn btn-info">Detail</a> 
                                    <a href="{{url('pelayan/menu/ubah',$men->id)}}" class="btn btn-success">Ubah</a>    
                                    <a href="{{url('pelayan/menu/hapus',$men->id)}}" class="btn btn-danger">hapus</a>    
                                </td>
                            </tr>
                            </form> 
                            @endforeach                           
                        </tbody>
                    </table>
                    {{$menu->links()}}                    
                </div>
            </div>
        </div>
@endsection