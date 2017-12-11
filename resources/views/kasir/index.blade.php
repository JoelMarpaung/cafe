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
                		Merupakan halaman awal dari layanan kasir. User dapat melihat penjelasan mengenai layanan kasir ini.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">Member</label><br>
                		Merupakan halaman member dari layanan kasir. User dapat melihat daftar member dan melakukan top up terhadap member.
                	</li>
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">List</label><br>
                		Merupakan halaman list dari layanan kasir. User dapat melihat daftar request top up dan user dapat melakukan penambahan top up yang sesuai dengan request
                	</li>                	
                	<li><label style="font-weight:bolder;color:black;font-size: 17px">History</label><br>
                		Merupakan halaman history dari layanan kasir. User dapat melihat daftar history top up yang pernah dilakukan.
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
