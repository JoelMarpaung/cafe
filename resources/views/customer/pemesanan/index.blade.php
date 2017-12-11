@extends('layouts.layout')
@section('content')
<div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>                   
                <?php $jumlah=0 ?>                                
                <?php $pesan=0 ?>
                <?php $balance=0 ?>
                @foreach($order as $ord)
                    <?php $jumlah++ ?>                    
                    <?php $pesan=$pesan+$ord->quantity ?>
                    <?php $balance=$balance+$ord->total_price ?>
                @endforeach
                <label style="margin: 20px 20px 0;font-size: 15px">Total List Pemesanan = {{$jumlah}}</label>
                <label style="margin: 20px 20px 0;font-size: 15px">Total Jumlah Pemesanan = {{$pesan}}</label>            
                <label style="margin: 20px 20px 0;font-size: 15px">Total Jumlah Harga Pemesanan = Rp. {{$balance}}</label>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th></th>
                            <th>Nama Menu</th>
                            <th>Jenis Menu</th>
                            <th>Jumlah Pesanan</th>                            
                            <th>Total Harga</th>
                            <th>Nomor Meja</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($order as $ord)                            
                            <tr>
                                <td></td>
                                <td>{{$ord->product_name}}</td>
                                <td>{{$ord->product_type}}</td>
                                <td>{{$ord->quantity}}</td>
                                <td>{{$ord->total_price}}</td>
                                <td>{{$ord->table_number}}</td>
                                <td colspan="2">                                    
                                    <a href="{{url('customer/pemesanan/bayar',$ord->id)}}" class="btn btn-info">Konfirmasi</a>
                                    <a href="{{url('customer/pemesanan/batal',$ord->id)}}" class="btn btn-danger">Batalkan</a>
                                </td>
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>                                      
                </div>
            </div>
        </div>    
@endsection
