@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê thương hiệu sản phẩm
    </div>
    <?php
		    $message = Session::get('message');
		    if($message){
		    	echo '<div class="text-alert-wrapper"><span class="text-alert">',$message,'</span></div>';
		    	session::put('message',null);
		    }
	?>  
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Tên</option>
          <option value="1">Hiển thị</option>
        </select>
        <button class="btn btn-sm btn-default">Lọc</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm kiếm</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
        
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th style="width:600px;">Tên thương hiệu</th>
            <th>Hiển thị</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_brand_product as $key => $cate_brand)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cate_brand->brand_name }}</td>
            <td><span class="text-ellipsis">
              <?php
                if($cate_brand->brand_status == 0){
              ?>
                  <a href="{{URL::to('/active-brand-product/'.$cate_brand->brand_id)}}"><span class="fa-thumbs-styling fa-regular fa-thumbs-down"></span></a>
              <?php
                }else{
              ?>
                  <a href="{{URL::to('/unactive-brand-product/'.$cate_brand->brand_id)}}"><span class="fa-thumbs-styling fa-regular fa-thumbs-up"></span></a>
              <?php
                }
              ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-brand-product/'.$cate_brand->brand_id)}}" class="active fa-edit-styling" ui-toggle-class=""><i class="fa fa-pencil-square-o"></i></i></a>
              <a onclick="return confirm('Bạn có chắc chắn là muốn xóa thương hiệu sản phẩm này không?')" href="{{URL::to('/delete-brand-product/'.$cate_brand->brand_id)}}" class="active fa-edit-styling" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">Hiển thị 10 trên 40 sản phẩm</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection