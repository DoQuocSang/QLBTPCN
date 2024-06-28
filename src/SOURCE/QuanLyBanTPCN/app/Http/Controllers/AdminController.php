<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = session::get('admin_id');
        if($admin_id){
            return redirect::to('/dashboard');
        }else{
            return redirect::to('/admin')->send();
        }
    }

    public function index(){
        return view('admin_login');
    }
    
    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
    
        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        if($result){
            session::put('admin_name', $result->admin_name);
            session::put('admin_id', $result->admin_id);
            return redirect::to('/dashboard');
        }else{
            session::put('message','Mật khẩu hoặc Gmail bị sai. Vui lòng nhập lại!'); 
            return redirect::to('/admin');
        }
    }

    public function logout(){
        $this->AuthLogin();
        session::put('admin_name', null);
        session::put('admin_id', null);
        return redirect::to('/admin');
    }
}
