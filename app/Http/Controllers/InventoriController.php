<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Models\Barang;
use App\Models\Dapur;
class InventoriController extends Controller
{
	public function barang(){
		$this->data['title'] = 'Daftar Inventori Barang';
		$key = Input::get('search');
        if(isset($key)){
			$this->data['barang'] = Barang::where('name','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);        	
		}else{
			$this->data['barang'] = Barang::orderBy('id','desc')->paginate(10);
		}        
		$this->data['total'] = DB::table('barang')->get();		
		return view('inventori.barang.index',$this->data);                        
	}
	public function detailbarang($id){
		$this->data['title'] = 'Detail Barang';
		$this->data['barang'] = Barang::find($id);
		return view('inventori.barang.detail',$this->data);
	}
	public function ubahbarang($id){
		$this->data['title'] = 'Ubah Barang';
		$this->data['barang'] = Barang::find($id);
		return view('inventori.barang.ubah',$this->data);
	}
	public function fixubahbarang(Request $request, $id){
		$input = $request->all();
		Barang::find($id)->update($input);
		return redirect(url('/inventori/barang'))->with('info','Inventori barang berhasil diubah');
	}
	public function hapusbarang($id){
		Barang::find($id)->delete();
		return redirect(url('inventori/barang'))->with('info','Inventori barang berhasil dihapus');
	}
	public function dapur(){
		$this->data['title'] = 'Daftar Inventori Bahan Dapur';
		$key = Input::get('search');
        if(isset($key)){
			$this->data['dapur'] = Dapur::where('name','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);        	
		}else{
			$this->data['dapur'] = Dapur::orderBy('id','desc')->paginate(10);
		}        
		$this->data['total'] = DB::table('dapur')->get();				
		return view('inventori.dapur.index',$this->data);                        
	}
	public function detaildapur($id){
		$this->data['title'] = 'Detail Bahan Dapur';
		$this->data['dapur'] = Dapur::find($id);
		return view('inventori.dapur.detail',$this->data);
	}
	public function ubahdapur($id){
		$this->data['title'] = 'Ubah Bahan Dapur';
		$this->data['dapur'] = Dapur::find($id);
		return view('inventori.dapur.ubah',$this->data);
	}
	public function fixubahdapur(Request $request, $id){
		$input = $request->all();
		Dapur::find($id)->update($input);
		return redirect(url('/inventori/dapur'))->with('info','Inventori bahan dapur berhasil diubah');
	}
	public function hapusdapur($id){
		Dapur::find($id)->delete();
		return redirect(url('inventori/dapur'))->with('info','Inventori bahan dapur berhasil diubah');
	}
	public function addbarang(){
		$this->data['title'] = 'Tambah Inventori Barang';
		return view('inventori.addbarang.index',$this->data);                        
	}
	public function storebarang(Request $request){				
		$input = $request->all();
		Barang::create($input);
		return redirect(url('/inventori/addbarang'))->with('info','Data barang berhasil ditambah');
	}
	public function adddapur(){
		$this->data['title'] = 'Tambah Inventori Bahan Dapur';
		return view('inventori.adddapur.index',$this->data);                        
	}
	public function storedapur(Request $request){
		$input = $request->all();
		Dapur::create($input);
		return redirect(url('/inventori/adddapur'))->with('info','Data bahan dapur berhasil ditambah');
	}
    //
}
