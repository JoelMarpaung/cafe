@extends('layouts.layout')
@section('content')
<div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
                <!-- code : davidprasetyo.com - myhotel laravel app - and modified by group 9 -->
                <form action="{{url('/pelayan/history')}}">
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
                <?php $pesan=0 ?>
                <?php $balance=0 ?>
                @foreach($total as $tot)
                    <?php $jumlah++ ?>                    
                    <?php $pesan=$pesan+$tot->quantity ?>
                    <?php $balance=$balance+$tot->total_price ?>
                @endforeach
                <label style="margin: 20px 20px 0;font-size: 15px">Total List History Pemesanan = {{$jumlah}}</label>
                <label style="margin: 20px 20px 0;font-size: 15px">Total Jumlah History Pemesanan = {{$pesan}}</label>         
                <label style="margin: 20px 20px 0;font-size: 15px">Total Jumlah History Harga Pemesanan = Rp. {{$balance}}</label>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th></th>
                            <th>Nama Menu</th>
                            <th>Jenis Menu</th>
                            <th>Jumlah Pesanan</th>                            
                            <th>Total Harga</th>
                            <th>Username Pemesan</th>
                            <th>Nomor Meja</th>                            
                        </thead>
                        <tbody>
                            @foreach($order as $ord)                            
                            <tr>
                                <td></td>
                                <td>{{$ord->product_name}}</td>
                                <td>{{$ord->product_type}}</td>
                                <td>{{$ord->quantity}}</td>
                                <td>{{$ord->total_price}}</td>
                                <td>{{$ord->customer_username}}</td>
                                <td>{{$ord->table_number}}</td>                                
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table> 
                    {{$order->links()}}                                                         
                </div>
            </div>
        </div>    
@endsection
