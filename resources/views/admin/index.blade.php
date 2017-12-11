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
                		Merupakan halaman awal dari layanan admin. User dapat melihat penjelasan mengenai layanan admin ini.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">List Staff</label><br>
                		Merupakan halaman list staff dari layanan admin. User dapat melihat daftar staff dan melakukan penghapusan dan penambahan staff baru.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">List Member</label><br>
                		Merupakan halaman list member dari layanan admin. User dapat melihat daftar member cafe dan melakukan penghapusan terhadap member.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">List Pemesanan</label><br>
                		Merupakan halaman list pemesanan dari layanan admin. User dapat melihat daftar pemesanan yang sudah dikonfirmasi dan menghapust daftar.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">List Top Up</label><br>
                		Merupakan halaman list top up dari layanan admin. User dapat melihat daftar top up dan melakukan penghapusan.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">List Barang</label><br>
                		Merupakan halaman list barang dari layanan admin. User dapat melihat daftar barang dan melakukan penghapusan.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">List Bahan Dapur</label><br>
                		Merupakan halaman list bahan dapur dari layanan admin. User dapat melihat daftar bahan dapur dan melakukan penghapusan.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">List Menu</label><br>
                		Merupakan halaman list menu dari layanan admin. User dapat melihat daftar menu dan melakukan penghapusan.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">List Feedback</label><br>
                		Merupakan halaman list feedback dari layanan admin. User dapat melihat daftar feedback dan melakukan penghapusan.
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
