<!-- code : bootstrap template - krs app - arnosa.net - and modified by group 9 -->
@if(Auth::check())
<div class="sidebar" data-background-color="black" data-active-color="info">
    <div class="sidebar-wrapper">
            @if(Auth::user()->role == 'admin')
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                    Selamat Datang Kepala Cafe
                </a>
            </div>
            <ul class="nav">
            <li class="{{Request::segment(2) == '' ? 'active' : ''}}">
                <a href="{{url('/')}}">                    
                    <i class="ti-panel"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'staff' ? 'active' : ''}}">
                <a href="{{url('admin/staff')}}">                    
                    <i class="ti-panel"></i>
                    <p>List Staff</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'member' ? 'active' : ''}}">
                <a href="{{url('admin/member')}}">                    
                    <i class="ti-panel"></i>
                    <p>List Member</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'pemesanan' ? 'active' : ''}}">
                <a href="{{url('admin/pemesanan')}}">                    
                    <i class="ti-panel"></i>
                    <p>List Pemesanan</p>
                </a>
            </li>            
            <li class="{{Request::segment(2) == 'topup' ? 'active' : ''}}">
                <a href="{{url('admin/topup')}}">                    
                    <i class="ti-panel"></i>
                    <p>List Top Up</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'barang' ? 'active' : ''}}">
                <a href="{{url('admin/barang')}}">                    
                    <i class="ti-panel"></i>
                    <p>List Barang</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'dapur' ? 'active' : ''}}">
                <a href="{{url('admin/dapur')}}">                    
                    <i class="ti-panel"></i>
                    <p>List Bahan Dapur</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'menu' ? 'active' : ''}}">
                <a href="{{url('admin/menu')}}">                    
                    <i class="ti-panel"></i>
                    <p>List Menu</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'feedback' ? 'active' : ''}}">
                <a href="{{url('admin/feedback')}}">                    
                    <i class="ti-panel"></i>
                    <p>List Feedback</p>
                </a>
            </li>
            </ul>
            @elseif(Auth::user()->role == 'customer')
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                    Selamat Datang Customer
                </a>
            </div>
            <ul class="nav">
            <li>
                <a> 
                    <p style="font-size: 15px">Balance = Rp. {{$customer->balance}}</p>
                </a>
            </li>
            <ul class="nav">
            <li class="{{Request::segment(2) == '' ? 'active' : ''}}">
                <a href="{{url('/')}}">                    
                    <i class="ti-panel"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'menu' ? 'active' : ''}}">
                <a href="{{url('customer/menu')}}">
                    <i class="ti-pencil"></i>                    
                    <p>Menu</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'pemesanan' ? 'active' : ''}}">
                <a href="{{url('customer/pemesanan')}}">           
                    <i class="ti-pencil"></i>         
                    <p>Pemesanan</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'history' ? 'active' : ''}}">
                <a href="{{url('customer/history')}}">           
                    <i class="ti-panel"></i>         
                    <p>History</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'request' ? 'active' : ''}}">
                <a href="{{url('customer/request')}}">    
                    <i class="ti-text"></i>                
                    <p>Request</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'feedback' ? 'active' : ''}}">
                <a href="{{url('customer/feedback')}}">    
                    <i class="ti-text"></i>                
                    <p>Feedback</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'profil' ? 'active' : ''}}">
                <a href="{{url('customer/profil')}}">    
                    <i class="ti-panel"></i>                
                    <p>Profil</p>
                </a>
            </li>
            </ul>
            @elseif(Auth::user()->role == 'kasir')
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                    Selamat Datang Staff Kasir
                </a>
            </div>
            <ul class="nav">
            <li class="{{Request::segment(2) == '' ? 'active' : ''}}">
                <a href="{{url('/')}}">                    
                    <i class="ti-panel"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'member' ? 'active' : ''}}">
                <a href="{{url('kasir/member')}}">    
                    <i class="ti-pencil"></i>                
                    <p>Member</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'list' ? 'active' : ''}}">
                <a href="{{url('kasir/list')}}">    
                    <i class="ti-pencil"></i>                
                    <p>List</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'history' ? 'active' : ''}}">
                <a href="{{url('kasir/history')}}">    
                    <i class="ti-pencil"></i>                
                    <p>History</p>
                </a>
            </li>
            </ul>
            @elseif(Auth::user()->role == 'pelayan')
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                    Selamat Datang Staff Pelayan
                </a>
            </div>
            <ul class="nav">
            <li class="{{Request::segment(2) == '' ? 'active' : ''}}">
                <a href="{{url('/')}}">                    
                    <i class="ti-panel"></i>
                    <p>Home</p>
                </a>
            </li>            
            <li class="{{Request::segment(2) == 'menu' ? 'active' : ''}}">
                <a href="{{url('/pelayan/menu')}}">                    
                    <i class="ti-pencil"></i>
                    <p>Daftar Menu</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'create' ? 'active' : ''}}">
                <a href="{{url('/pelayan/create')}}">                    
                    <i class="ti-text"></i>
                    <p>Tambah Menu</p>
                </a>
            </li>            
            <li class="{{Request::segment(2) == 'pemesanan' ? 'active' : ''}}">
                <a href="{{url('/pelayan/pemesanan')}}">                    
                    <i class="ti-panel"></i>
                    <p>Daftar Pemesanan</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'history' ? 'active' : ''}}">
                <a href="{{url('/pelayan/history')}}">                    
                    <i class="ti-panel"></i>
                    <p>History Pemesanan</p>
                </a>
            </li>            
            </ul>
            @elseif(Auth::user()->role == 'inventori')
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                    Selamat Datang Staff Inventori
                </a>
            </div>
            <ul class="nav">
            <li class="{{Request::segment(2) == '' ? 'active' : ''}}">
                <a href="{{url('/')}}">                    
                    <i class="ti-panel"></i>
                    <p>Home</p>
                </a>
            </li> 
            <li class="{{Request::segment(2) == 'barang' ? 'active' : ''}}">
                <a href="{{url('/inventori/barang')}}">                    
                    <i class="ti-pencil"></i>
                    <p>Inventori Barang</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'dapur' ? 'active' : ''}}">
                <a href="{{url('/inventori/dapur')}}">                    
                    <i class="ti-pencil"></i>
                    <p>Inventori Bahan Dapur</p>
                </a>
            </li>
            <li class="{{Request::segment(2) == 'addbarang' ? 'active' : ''}}">
                <a href="{{url('/inventori/addbarang')}}">                    
                    <i class="ti-text"></i>
                    <p>Tambah Barang</p>
                </a>
            </li> 
            <li class="{{Request::segment(2) == 'adddapur' ? 'active' : ''}}">
                <a href="{{url('/inventori/adddapur')}}">                    
                    <i class="ti-text"></i>
                    <p>Tambah Bahan Dapur</p>
                </a>
            </li>
            </ul>           
            @endif
    </div>
</div>
@endif