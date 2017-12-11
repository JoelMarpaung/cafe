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
                <ul>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Home</label><br>
                		Merupakan halaman awal dari layanan inventori. User dapat melihat penjelasan mengenai layanan inventori ini.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Inventori Barang</label><br>
                		Merupakan halaman inventori barang layanan inventori. User dapat melihat daftar inventori barang dan melakukan penghapusan barang.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Inventori Bahan Dapur</label><br>
                		Merupakan halaman inventori bahan dapur layanan inventori. User dapat melihat daftar inventori bahan dapur dan melakukan penghapusan bahan dapur.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Tambah Barang</label><br>
                		Merupakan halaman tambah barang layanan inventori. User dapat melakukan penambahan barang.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Tambah Bahan Dapur</label><br>
                		Merupakan halaman tambah bahan dapur layanan inventori. User dapat melakukan penambahan bahan dapur.
                	</li>                
                </ul>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>            
@endsection
