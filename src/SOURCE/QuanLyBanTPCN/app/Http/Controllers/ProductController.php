<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
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

    public function add_product(){
        $this->AuthLogin();
        $cate_pro = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->orderby('brand_id','desc')->get();
        return view('admin.add_product')->with('cate_product',$cate_pro)->with('brand_product',$brand);
    }

    public function all_product(){
        $this->AuthLogin();
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')
        ->orderby('product_id','desc')->get();
        $manager_product = view('admin.all_product')->with('all_product', $all_product);
        
        return view('admin_layout')->with('admin.all_product', $manager_product);
    }

    public function save_product(request $request){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['product_price'] = $request->product_price;
        $data['product_note'] = $request->product_note;
        $data['product_status'] = $request->product_status;

        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.'_'.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            
            DB::table('tbl_product')->insert($data);
            session::put('message', 'Thêm sản phẩm thành công!');
            return redirect::to('/add-product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);

        session::put('message', 'Thêm sản phẩm thành công!');
        return redirect::to('/add-product');
    }

    public function active_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        session::put('message', 'Kích hoạt sản phẩm thành công!');
        return redirect::to('/all-product');
    }

    public function unactive_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
        session::put('message', 'Bỏ kích hoạt sản phẩm thành công!');
        return redirect::to('/all-product');
    }

    public function edit_product($product_id){
        $this->AuthLogin();
        $cate_pro = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->orderby('brand_id','desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        $manager_product = view('admin.edit_product')
        ->with('edit_product', $edit_product)
        ->with('cate_product', $cate_pro)
        ->with('brand_product', $brand);
        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }

    public function update_product(request $request, $product_id){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['product_price'] = $request->product_price;
        $data['product_note'] = $request->product_note;
        
        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.'_'.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            
            DB::table('tbl_product')->where('product_id', $product_id)->update($data);
            session::put('message', 'Cập nhật sản phẩm thành công!');
            return redirect::to('/all-product');
        }
        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        session::put('message', 'Cập nhật sản phẩm thành công!');
        return redirect::to('/all-product');
    }   
    
    public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        session::put('message', 'Xóa sản phẩm thành công!');
        return redirect::to('/all-product');
    }
    //end admin page controller

    //------------------------------------------------------------------------------------------------
    
    //fontend page controller
    public function details_product($product_id){
        $cate_pro = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();
        $product_by_id = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')
        ->orderby('product_id','desc') ->where('tbl_product.product_id',$product_id)->get();
        return view('pages.product.show_details')->with('category', $cate_pro)->with('brand', $brand)->with('product', $product_by_id);
    }

    //fontend page controller
    
}
