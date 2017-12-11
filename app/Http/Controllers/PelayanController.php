<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Requests;
use App\Models\Menu;
Use App\Models\OrderTemp;
Use App\Models\Order;
use Image;

class PelayanController extends Controller
{
	public function menu(){
		$key = Input::get('search');
        $this->data['title'] = 'Daftar Menu';                        
        if(isset($key)){
        	$this->data['menu'] = Menu::where('product_name','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);
        }else{
        	$this->data['menu'] = Menu::orderBy('id','desc')->paginate(10);
        }  
        $this->data['total'] = DB::table('menu')->get();		       	      
		return view('pelayan.menu.index',$this->data);
	}

	public function detail($id){
		$this->data['title'] = 'Detail Menu';
		$this->data['menu'] = Menu::find($id);
		return view('pelayan.menu.detail',$this->data);
	}

	public function ubah($id){
		$this->data['title'] = 'Ubah Menu';
		$this->data['menu'] = Menu::find($id);
		return view('pelayan.menu.ubah',$this->data);
	}

	public function edit(Request $request, $id){
		// code : from itsolutionstuff.com and modified by group 9 using intervention image
		$input = $request->all();
		if($request->file('image')){
			$this->validate($request, [	    	
	            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
	        ]);
	       	$menu = DB::table('menu')->where('id' , $id)->first();
	       	File::delete('image/' . $menu->image);
	        $image = $request->file('image');
	        $input['image'] = time().'.'.$image->getClientOriginalExtension();
	   
	        $destinationPath = public_path('/image');
	        $img = Image::make($image->getRealPath());
	        $img->resize(300, 300, function ($constraint) {
			    $constraint->aspectRatio();
			})->save($destinationPath.'/'.$input['image']);
			Menu::find($id)->update($input);
    	}
    	else{
    		Menu::find($id)->update($input);
    	}		
		return redirect(url('/pelayan/menu'))->with('info','Menu berhasil diubah');
	}

	public function create(){
        $this->data['title'] = 'Tambah Menu';                                
		return view('pelayan.tambah.index',$this->data);
	}

	public function pemesanan(){
        $this->data['title'] = 'Daftar Pemesanan';                                
        $key = Input::get('search');
        if(isset($key)){
			$this->data['order'] = OrderTemp::where('customer_username','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);        	
		}else{
			$this->data['order'] = OrderTemp::orderBy('id','desc')->paginate(10);
		}        
		$this->data['total'] = DB::table('order_product_temp')->get();
		return view('pelayan.pemesanan.index',$this->data);
	}

	public function history(){
		$this->data['title'] = 'History Pemesanan';    
		$key = Input::get('search');
        if(isset($key)){
			$this->data['order'] = Order::where('customer_username','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);        	
		}else{
			$this->data['order'] = Order::orderBy('id','desc')->paginate(10);
		}        		
		$this->data['total'] = DB::table('order_product')->get();                    
		return view('pelayan.history.index',$this->data);	
	}

	public function store(Request $request){
		// code : from itsolutionstuff.com and modified by group 9 using intervention image
		$this->validate($request, [	    	
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       	$input = $request->all();
        $image = $request->file('image');
        $input['image'] = time().'.'.$image->getClientOriginalExtension();
   
        $destinationPath = public_path('/image');
        $img = Image::make($image->getRealPath());
        $img->resize(300, 300, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['image']);
		Menu::create($input);
		return redirect(url('/pelayan/create'))->with('info','Menu berhasil ditambah');
	}

	public function hapus($id){		
		$menu = DB::table('menu')->where('id' , $id)->first();
	    File::delete('image/' . $menu->image);
		Menu::find($id)->delete();
		return redirect(url('/pelayan/menu'))->with('info','Menu berhasil dihapus');
	}
    //
}
