@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">    
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="title" style="text-align: center">Sistem Informasi Cafe IT Del</h3>
                <p class="category"></p>
            </div>
                <div class="panel-body">
                <div class="col-md-12">
                <div class="card">                
                <div class="content table-responsive table-full-width">                
                <div class="col-md-6">
                    <h3>Sign Up as a new Customer</h3>
                    <form action="{{ url('/register') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username" required/>            
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" min="6" max="12" required/>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" name="first_name" required/>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" name="last_name" required/>
                        </div>
                        <div class="form-group">
                            <label>Balance</label>
                            <input class="form-control" type="number" name="balance" value="0" readonly/>
                        </div>
                        <button type="submit" class="btn btn-info">Sign Up</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3>Sign In</h3>
                    <form method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}            
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username" required/>            
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" required/>            
                        </div>
                        <button type="submit" class="btn btn-info">Sign In</button>
                    </form>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection                    