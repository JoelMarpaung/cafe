@extends('layouts.layout')
@section('content')
<div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
                <!-- code : davidprasetyo.com - myhotel laravel app - and modified by group 9 -->
                <form action="{{url('/admin/feedback')}}">
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
                <?php $pujian=0 ?>
                <?php $kritik=0 ?>                
                @foreach($total as $tot)
                    <?php $jumlah++ ?>
                    @if($tot->kriteria=='Pujian'||$tot->kriteria=='Pujian dan Kritik')
                    <?php $pujian++ ?>
                    @endif
                    @if($tot->kriteria=='Kritik'||$tot->kriteria=='Pujian dan Kritik')
                    <?php $kritik++ ?>
                    @endif
                @endforeach
                <label style="margin: 20px 20px 0;font-size: 15px">Total Jumlah Feedback = {{$jumlah}}</label>
                <label style="margin: 20px 20px 0;font-size: 15px">Total Pujian = {{$pujian}}</label>                          
                <label style="margin: 20px 20px 0;font-size: 15px">Total Kritik = {{$kritik}}</label>                          
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th></th>
                            <th>Nama Customer</th>
                            <th>Subjek</th>
                            <th>Kriteria</th>                                              
                            <th>Deskripsi</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody> 
                            @foreach($feedback as $fed)                                                 
                            <tr>
                                <td></td>
                                <td>{{$fed->customer}}</td>
                                <td>{{$fed->subjek}}</td>
                                <td>{{$fed->kriteria}}</td>                                
                                <td>{{$fed->deskripsi}}</td>
                                <td>{{$fed->created_at}}</td>
                                <td>{{$fed->updated_at}}</td>
                                <td>                                    
                                   <a href="{{url('admin/feedback/hapus',$fed->id)}}" class="btn btn-danger">Hapus</a>    
                                </td>
                            </tr>
                            </form> 
                            @endforeach                           
                        </tbody>
                    </table>
                    {{$feedback->links()}}                    
                </div>
            </div>
        </div>
@endsection