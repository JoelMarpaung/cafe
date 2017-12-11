<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Models\Customer;
use App\Models\RequestList;
use App\Models\HistoryList;

class KasirController extends Controller
{
	public function member(){
		$key = Input::get('search');
		$this->data['title'] = 'Data Customer';
		if(isset($key)){
			$this->data['customer'] = Customer::where('username','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);        	
		}else{
			$this->data['customer'] = Customer::orderBy('id','desc')->paginate(10);			
		}
		$this->data['total'] = DB::table('customer_data')->get();		       	
        
		return view('kasir.member.index',$this->data);
	}

	public function list(){
		$key = Input::get('search');
		$this->data['title'] = 'List Request';
		if(isset($key)){
			$this->data['request'] = RequestList::where('customer_username','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);
		}else{
			$this->data['request'] = RequestList::orderBy('id','desc')->paginate(10);        			
		}
		$this->data['total'] = DB::table('topup_request')->get();		       	
		return view('kasir.list.index',$this->data);
	}

	public function terima($id){
		$request = DB::table('topup_request')->where('id',$id)->first();		
		$input1 = $request->balance;
		$input2 = $request->customer_username;
		HistoryList::create(['balance'=> $input1, 'customer_username' => $input2]);
		$customer = DB::table('customer_data')->where('username', $input2)->first();
		$balance = $customer->balance + $input1;
		Customer::where('username', $input2)->update(['balance' => $balance]);
		RequestList::find($id)->delete();
		return redirect(url('/kasir/list'))->with('info','Request customer berhasil diterima');
	}

	public function tolak($id){
		RequestList::find($id)->delete();
		return redirect(url('/kasir/list'))->with('info', 'Request customer berhasil ditolak');
	}

	public function history(){
		$key = Input::get('search');
		$this->data['title'] = 'List History';
		if(isset($key)){
			$this->data['history'] = HistoryList::where('customer_username','like','%'.$key.'%')->orderBy('id','desc')->paginate(10);
		}else{
			$this->data['history'] = HistoryList::orderBy('id','desc')->paginate(10);        			   	
		}        
		$this->data['total'] = DB::table('topup_history')->get();		    
		return view('kasir.history.index',$this->data);
	}


	public function tambah($id){		
		$this->data['title'] = 'Data Customer';
		$this->data['customer'] = Customer::find($id);
		return view('kasir.member.tambah',$this->data);
	}
	
	public function balance(Request $request,$id){		
		$input = $request->all();
		$customer = DB::table('customer_data')->where('id' , $id)->first();
		$balance = $customer->balance + $input['balance'];
		Customer::find($id)->update(['balance' => $balance]);
		HistoryList::create($input);
		return redirect(url('/kasir/member'))->with('info','Balance Customer berhasil ditambahkan');
	}	
    //
}
