<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BrandProduct extends Controller
{
    //admin page controller
    public function AuthLogin(){
        $admin_id = session::get('admin_id');
        if($admin_id){
            return redirect::to('/dashboard');
        }else{
            return redirect::to('/admin')->send();
        }
    }
    public function add_brand_product(){
        $this->AuthLogin();
        return view('admin.add_brand_product');
    }

    public function all_brand_product(){
        $this->AuthLogin();
        $all_brand_product = DB::table('tbl_brand_product')->orderby('brand_id','desc')->get();
        $manager_brand_product = view('admin.all_brand_product')->with('all_brand_product', $all_brand_product);
        
        return view('admin_layout')->with('admin.all_brand_product', $manager_brand_product);
    }

    public function save_brand_product(request $request){
        $this->AuthLogin();
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;

        DB::table('tbl_brand_product')->insert($data);

        session::put('message', 'Thêm thương hiệu sản phẩm thành công!');
        return redirect::to('/add-brand-product');
    }

    public function active_brand_product($brand_id){
        $this->AuthLogin();
        DB::table('tbl_brand_product')->where('brand_id',$brand_id)->update(['brand_status'=>1]);
        session::put('message', 'Kích hoạt thương hiệu sản phẩm thành công!');
        return redirect::to('/all-brand-product');
    }

    public function unactive_brand_product($brand_id){
        $this->AuthLogin();
        DB::table('tbl_brand_product')->where('brand_id',$brand_id)->update(['brand_status'=>0]);
        session::put('message', 'Bỏ kích hoạt thương hiệu sản phẩm thành công!');
        return redirect::to('/all-brand-product');
    }

    public function edit_brand_product($brand_id){
        $this->AuthLogin();
        $edit_brand_product = DB::table('tbl_brand_product')->where('brand_id',$brand_id)->get();
        $manager_brand_product = view('admin.edit_brand_product')->with('edit_brand_product', $edit_brand_product);
        return view('admin_layout')->with('admin.edit_brand_product', $manager_brand_product);
    }

    public function update_brand_product(request $request, $brand_id){
        $this->AuthLogin();
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        DB::table('tbl_brand_product')->where('brand_id',$brand_id)->update($data);
        session::put('message', 'Cập nhật thương hiệu sản phẩm thành công!');
        return redirect::to('/all-brand-product');
    }   
    
    public function delete_brand_product($brand_id){
        $this->AuthLogin();
        DB::table('tbl_brand_product')->where('brand_id',$brand_id)->delete();
        session::put('message', 'Xóa thương hiệu sản phẩm thành công!');
        return redirect::to('/all-brand-product');
    }
    //end admin page controller

    //------------------------------------------------------------------------------------------------

    //brand home cotroller
    public function show_brand_home($brand_id){
        $cate_pro = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();
        $brand_name = DB::table('tbl_brand_product')->where('tbl_brand_product.brand_id',$brand_id)->first();
        $brand_by_id = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')
        ->orderby('product_id','desc') ->where('tbl_product.brand_id',$brand_id)->get();
        return view('pages.brand.show_brand')->with('category', $cate_pro)->with('brand', $brand)->with('product', $brand_by_id)
        ->with('brand_name', $brand_name);
    }
    

    //end brand home cotroller
}
