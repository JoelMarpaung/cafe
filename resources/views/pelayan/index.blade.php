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
                		Merupakan halaman awal dari layanan pelayan. User dapat melihat penjelasan mengenai layanan pelayan ini.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Daftar Menu</label><br>
                		Merupakan halaman daftar menu dari layanan pelayan. User dapat melihat daftar menu dan melakukan perubahan dan penghapusan menu.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Tambah Menu</label><br>
                		Merupakan halaman tambah menu dari layanan pelayan. User dapat membuat menu baru.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Daftar Pemesanan</label><br>
                		Merupakan halaman daftar pemesanan dari layanan pelayan. User dapat melihat list pemesanan yang sedang terjadi.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">History Pemesanan</label><br>
                		Merupakan halaman history pemesanan dari layanan pelayan. User dapat melihat list pemesanan yang sudah pernah dilakukan.
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
