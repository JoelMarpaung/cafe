<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Barang;
use App\Models\Dapur;
use App\Models\Customer;
use App\Models\Feedback;
use App\Models\Menu;
use App\Models\Order;
use App\Models\HistoryList;


class AdminController extends Controller
{
	public function store(Request $request){
		$input = $request->all();
		if($username = DB::table('users')->where('username' , $input['username'])->first()){
            return redirect()->back()->with('info','We are so sorry :( .Username is exists. Please choose another username');
        }else{
        	User::create(['username' => $input['username'],'password' => bcrypt($input['password']),'role' => $input['role']])->id;
        return redirect(url('/admin/staff'))->with('info','Data Staff berhasil ditambah');
        }
        
	}	
	public function staff(){
		$key = Input::get('search');
		$this->data['title'] = 'List Staff';
		if(isset($key)){
        	$this->data['staff'] = User::where('username','like','%'.$key.'%','and','role','!=','customer')->orderBy('id','desc')->paginate(10);
        }else{
        	$this->data['staff'] = User::where('role','!=','customer')->orderBy('id','desc')->paginate(10);
        }  
        $this->data['total'] = DB::table('users')->where('role','!=','customer')->get();		       	      		
		return view('admin.staff.index',$this->data);	
	}
	public function tambahstaff(){
		$this->data['title'] = 'Tambah Staff';
		return view('admin.staff.tambah',$this->data);
	}
	public function hapusstaff($id){		
		User::find($id)->delete();
		return redirect(url('/admin/staff'))->with('info','Data Staff berhasil dihapus');
	}
	public function member(){
		$this->data['title'] = 'List Customer';
		$key = Input::get('search');		
		if(isset($key)){
			$this->data['member'] = Customer::where('username','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);        	
		}else{
			$this->data['member'] = Customer::orderBy('id','desc')->paginate(10);			
		}
		$this->data['total'] = DB::table('customer_data')->get();		       	
		return view('admin.member.index',$this->data);
	}
	public function hapusmember($id){
		$customer = DB::table('customer_data')->where('id' , $id)->first();
		$username = $customer->username;
		DB::table('users')->where('username' , $username)->delete();
		Customer::find($id)->delete();
		return redirect(url('/admin/member'))->with('info','Data member berhasil dihapus');
	}
	public function pemesanan(){
		$this->data['title'] = 'List Pemesanan';
		$key = Input::get('search');
        if(isset($key)){
			$this->data['order'] = Order::where('customer_username','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);        	
		}else{
			$this->data['order'] = Order::paginate(10);
		}        		
		$this->data['total'] = DB::table('order_product')->get();                    
		return view('admin.pemesanan.index',$this->data);
	}
	public function hapuspemesanan($id){		
		Order::find($id)->delete();
		return redirect(url('/admin/pemesanan'))->with('info','Data pemesanan berhasil dihapus');
	}
	public function topup(){
		$this->data['title'] = 'List Top Up';
		$key = Input::get('search');		
		if(isset($key)){
			$this->data['history'] = HistoryList::where('customer_username','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);
		}else{
			$this->data['history'] = HistoryList::orderBy('id','desc')->paginate(10);        			   	
		}        
		$this->data['total'] = DB::table('topup_history')->get();		    
		return view('admin.topup.index',$this->data);
	}
	public function hapustopup($id){		
		HistoryList::find($id)->delete();
		return redirect(url('/admin/topup'))->with('info','Data topup berhasil dihapus');
	}
	public function barang(){
		$this->data['title'] = 'List Barang';
		$key = Input::get('search');
        if(isset($key)){
			$this->data['barang'] = Barang::where('name','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);        	
		}else{
			$this->data['barang'] = Barang::orderBy('id','desc')->paginate(10);
		}        
		$this->data['total'] = DB::table('barang')->get();		
		return view('admin.barang.index',$this->data);
	}
	public function hapusbarang($id){		
		Barang::find($id)->delete();
		return redirect(url('/admin/barang'))->with('info','Data inventori barang berhasil dihapus');
	}
	public function dapur(){
		$this->data['title'] = 'List Bahan Dapur';
		$key = Input::get('search');
        if(isset($key)){
			$this->data['dapur'] = Dapur::where('name','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);        	
		}else{
			$this->data['dapur'] = Dapur::orderBy('id','desc')->paginate(10);
		}        
		$this->data['total'] = DB::table('dapur')->get();				
		return view('admin.dapur.index',$this->data);
	}
	public function hapusdapur($id){		
		Dapur::find($id)->delete();
		return redirect(url('/admin/dapur'))->with('info','Data inventori bahan dapur berhasil dihapus');
	}
	public function menu(){
		$this->data['title'] = 'List Menu';
		$key = Input::get('search');
        $this->data['title'] = 'Daftar Menu';                        
        if(isset($key)){
        	$this->data['menu'] = Menu::where('product_name','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);
        }else{
        	$this->data['menu'] = Menu::orderBy('id','desc')->paginate(10);
        }  
        $this->data['total'] = DB::table('menu')->get();		       	      
		return view('admin.menu.index',$this->data);
	}
	public function hapusmenu($id){		
		$menu = DB::table('menu')->where('id' , $id)->first();
	    File::delete('image/' . $menu->image);		
		Menu::find($id)->delete();
		return redirect(url('/admin/menu'))->with('info','Data menu berhasil dihapus');
	}
	public function feedback(){
		$this->data['title'] = 'List Feedback';
		$key = Input::get('search');
        $this->data['title'] = 'Daftar Menu';                        
        if(isset($key)){
        	$this->data['feedback'] = Feedback::where('customer','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);
        }else{
        	$this->data['feedback'] = Feedback::orderBy('id','desc')->paginate(10);
        }  
        $this->data['total'] = DB::table('feedback')->get();		       	      		
		return view('admin.feedback.index',$this->data);
	}
	public function hapusfeedback($id){		
		Feedback::find($id)->delete();
		return redirect(url('/admin/feedback'))->with('info','Data feedback berhasil dihapus');
	}
    //
}
