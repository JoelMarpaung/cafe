<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

Use App\Models\Customer;
Use App\Models\Feedback;
Use App\Models\RequestList;
Use App\Models\Menu;
Use App\Models\OrderTemp;
Use App\Models\Order;

class CustomerController extends Controller
{

	public function menu(){
		$key = Input::get('search');
		$username = Auth::user()->username;
        $customer = DB::table('customer_data')->where('username' , $username)->first();
        $id = $customer->id;
        $this->data['title'] = 'Daftar Menu';                        
        $this->data['customer'] = Customer::find($id);
        if(isset($key)){
        	$this->data['menu'] = Menu::where('product_name','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);
        }else{
        	$this->data['menu'] = Menu::orderBy('id','desc')->paginate(10);
        }  
        $this->data['total'] = DB::table('menu')->get();		       	      
		return view('customer.menu.index',$this->data);
	}

	public function detail($ids){
		$username = Auth::user()->username;
        $customer = DB::table('customer_data')->where('username' , $username)->first();
        $id = $customer->id;                       
        $this->data['customer'] = Customer::find($id);
		$this->data['title'] = 'Detail Menu';
		$this->data['menu'] = Menu::find($ids);
		return view('customer.menu.detail',$this->data);
	}

	public function beli($idm){
		$username = Auth::user()->username;
        $customer = DB::table('customer_data')->where('username' , $username)->first();
        $id = $customer->id;
        $this->data['title'] = 'Lakukan Pemesanan';                        
        $this->data['customer'] = Customer::find($id);
        $this->data['menu'] = Menu::find($idm);
        $menu = DB::table('menu')->where('id' , $idm)->first();
        if($menu->status=='Tersedia'){
        	return view('customer.menu.beli.index',$this->data);		
        }else{
        	return redirect(url('/customer/menu'));	
        }
		
	}

	public function confirm(Request $request){
		$input = $request->all();
		$customer = DB::table('customer_data')->where('username' , $input['customer_username'])->first();
		$order = DB::table('order_product_temp')->where('customer_username' , $input['customer_username'])->get();
		$balance = 0;
		foreach ($order as $ord) {
			$balance = $balance + $ord->total_price;
		}
		$total = $balance + ($input['price']*$input['quantity']);
		if($customer->balance >= $total){
			OrderTemp::create(['product_name' => $input['product_name'],'product_type' => $input['product_type'],'quantity' => $input['quantity'],'table_number' => $input['table_number'],'customer_username' => $input['customer_username'],'product_id' => $input['product_id'],'total_price' => $input['price']*$input['quantity']]);	
			return redirect(url('/customer/menu'))->with('info','Pemesanan berhasil dilakukan. Silahkan melanjutkan pemesanan atau melakukan konfirmasi pemesanan');
		}else{
			return redirect(url('/customer/menu'))->with('info','Pemesanan tidak berhasil dilakukan. Silahkan menambah topup anda');
		}
		
	}

	public function pemesanan(){
		$username = Auth::user()->username;
        $customer = DB::table('customer_data')->where('username' , $username)->first();
        $id = $customer->id;
        $this->data['title'] = 'Daftar Pemesanan';                        
        $this->data['customer'] = Customer::find($id);
        $this->data['order'] = DB::table('order_product_temp')->where('customer_username' , $username)->orderBy('id','desc')->get();
		return view('customer.pemesanan.index',$this->data);
	}

	public function batal($id){
		OrderTemp::find($id)->delete();
		return redirect(url('/customer/pemesanan'))->with('info','Pembatalan pemesanan berhasil dilakukan');
	}

	public function bayar($id){
		$input = OrderTemp::find($id);
		Order::create(['product_name' => $input['product_name'],'product_type' => $input['product_type'],'quantity' => $input['quantity'],'table_number' => $input['table_number'],'customer_username' => $input['customer_username'],'product_id' => $input['product_id'],'total_price' => $input['total_price']]);
		$customer = DB::table('customer_data')->where('username' , $input['customer_username'])->first();
		Customer::where('username',$input['customer_username'])->update(['balance' => $customer->balance-$input['total_price']]);
		OrderTemp::find($id)->delete();
		return redirect(url('/customer/pemesanan'))->with('info','Konfirmasi berhasil dilakukan. Silahkan menikmati Pemesanan');
	}

	public function history(){
		$username = Auth::user()->username;
        $customer = DB::table('customer_data')->where('username' , $username)->first();
        $id = $customer->id;
        $this->data['title'] = 'History Pemesanan';                        
        $this->data['customer'] = Customer::find($id);
        $this->data['history'] = DB::table('order_product')->where('customer_username' , $username)->orderBy('id','desc')->paginate(10);
        $this->data['total'] = DB::table('order_product')->where('customer_username' , $username)->get();
		return view('customer.history.index',$this->data);
	}

	public function request(){
		$username = Auth::user()->username;
		$customer = DB::table('customer_data')->where('username' , $username)->first();
		$id = $customer->id;
		$this->data['title'] = 'Request Top Up';						
        $this->data['customer'] = Customer::find($id);
		return view('customer.request.index',$this->data);
	}

	public function topup(Request $request){
		$input = $request->all();
		RequestList::create($input);
		return redirect(url('/customer/request'))->with('info','Request Top Up Berhasil dikirim');
	}

	public function feedback(){
		$username = Auth::user()->username;
        $customer = DB::table('customer_data')->where('username' , $username)->first();
        $id = $customer->id;
        $this->data['title'] = 'Give Feedback';                        
        $this->data['customer'] = Customer::find($id);
		return view('customer.feedback.index',$this->data);
	}

	public function give(Request $request){
		$input = $request->all();
		Feedback::create($input);
		return redirect(url('/customer/feedback'))->with('info','Feedback berhasil dikirimkan');
	}

	public function profil(){
		$username = Auth::user()->username;
        $customer = DB::table('customer_data')->where('username' , $username)->first();
        $id = $customer->id;
        $this->data['title'] = 'Customer Profil';                        
        $this->data['customer'] = Customer::find($id);
		return view('customer.profil.index',$this->data);
	}
    //
}
