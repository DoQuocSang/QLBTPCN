<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class PageController extends Controller
{
    public function index(){
    
    }

    public function show_about(){
        $cate_pro = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();

        return view('pages.about.show_about')->with('category', $cate_pro)->with('brand', $brand);
    }

    public function show_contact(){
        $cate_pro = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();

        return view('pages.contact.show_contact')->with('category', $cate_pro)->with('brand', $brand);
    }

    public function show_health_handbook(){
        $cate_pro = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();

        return view('pages.health_handbook.show_health_handbook')->with('category', $cate_pro)->with('brand', $brand);
    }

    public function show_health_handbook_article(){
        $cate_pro = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();

        return view('pages.health_handbook.show_health_handbook_article')->with('category', $cate_pro)->with('brand', $brand);
    }

    public function show_news(){
        $cate_pro = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();

        return view('pages.news.show_news')->with('category', $cate_pro)->with('brand', $brand);
    }

    public function show_news_article(){
        $cate_pro = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();

        return view('pages.news.show_news_article')->with('category', $cate_pro)->with('brand', $brand);
    }

    public function show_404_error(){
        $cate_pro = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();

        return view('pages.error404')->with('category', $cate_pro)->with('brand', $brand);
    }
}
