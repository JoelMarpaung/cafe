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
                            <th>Nomor Meja</th>                            
                        </thead>
                        <tbody>
                            @foreach($history as $his)                            
                            <tr>
                                <td></td>
                                <td>{{$his->product_name}}</td>
                                <td>{{$his->product_type}}</td>
                                <td>{{$his->quantity}}</td>
                                <td>{{$his->total_price}}</td>
                                <td>{{$his->table_number}}</td>                                
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                    {{$history->links()}}                                       
                </div>
            </div>
        </div>    
@endsection
