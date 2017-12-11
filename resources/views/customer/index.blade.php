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
                		Merupakan halaman awal dari layanan customer. User dapat melihat penjelasan mengenai layanan customer ini.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Menu</label><br>
                		Merupakan halaman menu dari layanan customer. User dapat melihat daftar menu dan melakukan pembelian terhadap menu.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Pemesanan</label><br>
                		Merupakan halaman pemesanan dari layanan customer. User dapat melihat daftar pemesanan yang sudah dilakukan, dan bisa melakukan pembatalan terhadap pesanan. Pesanan yang sudah diterima dapat di konfirmasi oleh user.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">History</label><br>
                		Merupakan halaman history dari layanan customer. User dapat melihat list pemesanan yang sudah pernah dilakukan sebelumnya.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Request</label><br>
                		Merupakan halaman request dari layanan customer. User dapat melakukan request top up kepada kasir untuk menambah balance.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Feedback</label><br>
                		Merupakan halaman feedback dari layanan customer. User dapat mengirimkan feedback kepada pihak cafe.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Profil</label><br>
                		Merupakan halaman profil dari layanan customer. User dapat melihat profil diri.
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
