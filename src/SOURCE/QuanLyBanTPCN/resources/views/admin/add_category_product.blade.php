@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục sản phẩm
                </header>
                <?php
		            $message = Session::get('message');
		            if($message){
		            	echo '<div class="text-alert-wrapper"><span class="text-alert">',$message,'</span></div>';
		            	session::put('message',null);
		            }
	            ?>          
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Điền tên danh mục">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea name="category_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Điền mô tả danh mục"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Ghi chú</label>
                                <textarea name="category_product_note" class="form-control" id="exampleInputPassword1" placeholder="Điền ghi chú danh mục"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Tùy chọn hiển thị</label>
                                <select name="category_product_status" class="form-control input-sm m-bot15">
                                    <option value = "0">Ẩn</option>
                                    <option value = "1">Hiển thị</option>
                                </select>
                            </div>
 
                            <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                        </form>
                    </div>
                </div>
            </section>
    </div>
</div>
@endsection