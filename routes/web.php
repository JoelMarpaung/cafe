<?php
Use App\Models\Customer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
	return view('index');
})->middleware('guest');

// Routing untuk authentifikasi
Route::group(['namespace' => 'auth'],function(){
	Route::post('/login','LoginController@login')->name('login');
    Route::get('/logout',function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');
    Route::post('/register','RegisterController@store');
});


Route::group(['prefix' => 'admin','middleware' => 'admin'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';                        
        return view('admin.index',$this->data);
    });
    Route::get('/staff','AdminController@staff');    
    Route::get('/staff/tambah','AdminController@tambahstaff');
    Route::get('/staff/hapus/{id}','AdminController@hapusstaff');
    Route::get('/member','AdminController@member');
    Route::get('/member/hapus/{id}','AdminController@hapusmember');
    Route::get('/pemesanan','AdminController@pemesanan');
    Route::get('/pemesanan/hapus/{id}','AdminController@hapuspemesanan');
    Route::get('/topup','AdminController@topup');
    Route::get('/topup/hapus/{id}','AdminController@hapustopup');
    Route::get('/barang','AdminController@barang');
    Route::get('/barang/hapus/{id}','AdminController@hapusbarang');
    Route::get('/dapur','AdminController@dapur');
    Route::get('/dapur/hapus/{id}','AdminController@hapusdapur');
    Route::get('/menu','AdminController@menu');
    Route::get('/menu/hapus/{id}','AdminController@hapusmenu');
    Route::get('/feedback','AdminController@feedback');
    Route::get('/feedback/hapus/{id}','AdminController@hapusfeedback');
    Route::resource('admin','AdminController');
});

Route::group(['prefix' => 'customer','middleware' => 'customer'], function() {    
    Route::get('/', function () {
        $username = Auth::user()->username;
        $customer = DB::table('customer_data')->where('username' , $username)->first();
        $id = $customer->id;
        $this->data['title'] = 'Dashboard';                        
        $this->data['customer'] = Customer::find($id);
        return view('customer.index',$this->data);        
    });
    Route::get('/menu','CustomerController@menu');
    Route::get('/menu/beli/{id}','CustomerController@beli');
    Route::get('/menu/detail/{id}','CustomerController@detail');
    Route::post('/menu/beli/confirm','CustomerController@confirm');
    Route::get('/pemesanan','CustomerController@pemesanan');
    Route::get('/pemesanan/batal/{id}','CustomerController@batal');
    Route::get('/pemesanan/bayar/{id}','CustomerController@bayar');
    Route::get('/history','CustomerController@history');
    Route::get('/request','CustomerController@request');
    Route::post('/request/topup','CustomerController@topup');
    Route::get('/feedback','CustomerController@feedback');
    Route::post('/feedback/give','CustomerController@give');
    Route::get('/profil','CustomerController@profil');
});

Route::group(['prefix' => 'kasir','middleware' => 'kasir'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';                        
        return view('kasir.index',$this->data);
    });
    Route::get('/member','KasirController@member');
    Route::get('/list','KasirController@list');
    Route::get('/list/terima/{id}','KasirController@terima');
    Route::get('/list/tolak/{id}','KasirController@tolak');
    Route::get('/history','KasirController@history');    
    Route::get('/member/tambah/{id}','KasirController@tambah');
    Route::post('/member/tambah/balance/{id}','KasirController@balance');
    Route::resource('kasir','KasirController');
});

Route::group(['prefix' => 'inventori','middleware' => 'inventori'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';
        return view('inventori.index',$this->data);
    });
    Route::get('/barang','InventoriController@barang');
    Route::get('/barang/detail/{id}','InventoriController@detailbarang');
    Route::get('/barang/ubah/{id}','InventoriController@ubahbarang');
    Route::post('/ubahbarang/{id}','InventoriController@fixubahbarang');
    Route::get('/barang/hapus/{id}','InventoriController@hapusbarang');
    Route::get('/addbarang','InventoriController@addbarang');
    Route::post('/storebarang','InventoriController@storebarang');
    Route::get('/dapur','InventoriController@dapur');
    Route::get('/dapur/detail/{id}','InventoriController@detaildapur');
    Route::get('/dapur/ubah/{id}','InventoriController@ubahdapur');
    Route::post('/ubahdapur/{id}','InventoriController@fixubahdapur');
    Route::get('/dapur/hapus/{id}','InventoriController@hapusdapur');
    Route::get('/adddapur','InventoriController@adddapur');
    Route::post('/storedapur','InventoriController@storedapur');
});

Route::group(['prefix' => 'pelayan','middleware' => 'pelayan'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';
        return view('pelayan.index',$this->data);
    });
    Route::get('/menu','PelayanController@menu');
    Route::get('/menu/detail/{id}','PelayanController@detail');
    Route::get('/menu/ubah/{id}','PelayanController@ubah');
    Route::get('/menu/hapus/{id}','PelayanController@hapus');
    Route::post('/ubah/{id}','PelayanController@edit');
    Route::get('/create','PelayanController@create');
    Route::get('/pemesanan','PelayanController@pemesanan');
    Route::get('/history','PelayanController@history');
    Route::post('/store','PelayanController@store');
});