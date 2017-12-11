@extends('layouts.layout')
@section('content')
<div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
                <!-- code : davidprasetyo.com - myhotel laravel app - and modified by group 9 -->
                <form action="{{url('/kasir/history')}}">
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
                <?php $balance=0 ?>
                @foreach($total as $tot)
                    <?php $jumlah++ ?>
                    <?php $balance=$balance+$tot->balance ?>
                @endforeach
                <label style="margin: 20px 20px 0;font-size: 15px">Total History Top Up = {{$jumlah}}</label>
                <label style="margin: 20px 20px 0;font-size: 15px">Total Balance Top Up = Rp.{{$balance}}</label>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th></th>
                            <th>History Balance</th>                            
                            <th>Username</th>                                                        
                        </thead>
                        <tbody>
                            @foreach($history as $his)                            
                            <tr>
                                <td></td>
                                <td>{{$his->balance}}</td>
                                <td>{{$his->customer_username}}</td>                                                
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
