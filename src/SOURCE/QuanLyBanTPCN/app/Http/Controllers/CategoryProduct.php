<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    // admin page controller
    public function AuthLogin(){
        $admin_id = session::get('admin_id');
        if($admin_id){
            return redirect::to('/dashboard');
        }else{
            return redirect::to('/admin')->send();
        }
    }
    public function add_category_product(){
        $this->AuthLogin();
        return view('admin.add_category_product');
    }

    public function all_category_product(){
        $this->AuthLogin();
        $all_category_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product', $all_category_product);
        
        return view('admin_layout')->with('admin.all_category_product', $manager_category_product);
    }

    public function save_category_product(request $request){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;
        $data['category_note'] = $request->category_product_note;

        DB::table('tbl_category_product')->insert($data);

        session::put('message', 'Thêm danh mục sản phẩm thành công!');
        return redirect::to('/add-category-product');
    }

    public function active_category_product($category_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_id)->update(['category_status'=>1]);
        session::put('message', 'Kích hoạt danh mục sản phẩm thành công!');
        return redirect::to('/all-category-product');
    }

    public function unactive_category_product($category_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_id)->update(['category_status'=>0]);
        session::put('message', 'Bỏ kích hoạt danh mục sản phẩm thành công!');
        return redirect::to('/all-category-product');
    }

    public function edit_category_product($category_id){
        $this->AuthLogin();
        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_id)->get();
        $manager_category_product = view('admin.edit_category_product')->with('edit_category_product', $edit_category_product);
        return view('admin_layout')->with('admin.edit_category_product', $manager_category_product);
    }

    public function update_category_product(request $request, $category_id){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_note'] = $request->category_product_note;
        DB::table('tbl_category_product')->where('category_id',$category_id)->update($data);
        session::put('message', 'Cập nhật danh mục sản phẩm thành công!');
        return redirect::to('/all-category-product');
    }   
    
    public function delete_category_product($category_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$category_id)->delete();
        session::put('message', 'Xóa danh mục sản phẩm thành công!');
        return redirect::to('/all-category-product');
    }
    //end admin page controller

    //------------------------------------------------------------------------------------------------

    //category home cotroller
    public function show_category_home($category_id){
        $cate_pro = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->first();
        $category_by_id = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')
        ->orderby('product_id','desc') ->where('tbl_product.category_id',$category_id)->get();
        return view('pages.category.show_category')->with('category', $cate_pro)->with('brand', $brand)->with('product', $category_by_id)
        ->with('category_name', $category_name);
    }
    

    //end category home cotroller
}
