@extends('layouts.master')
@section('title','Quản lý sản phẩm')
@section('main')
<h2>Sản phẩm</h2>
<hr>


<!-- FORM TÌM KIẾM  -->
<form action="" method="get" class="form-inline">

    <div class="form-group">
        <input class="form-control" name="keyword" placeholder="Input keyword">
    </div>

    <div class="form-group">
        <select name="orderByName" class="form-control">
            <option value="">Mắc định theo tên</option>
            <option value="ASC">Tăng dần theo tên</option>
            <option value="DESC">Giảm dần theo tên</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('product.create') }}" class="btn btn-success">Thêm mới</a>
</form>
<hr>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Status</th>
            <th>Image</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->cat->name}}</td>
            <td>{{$product->status == 0 ? 'Ẩn' : 'Hiển thị'}}</td>
            <td>
                <img src="{{url('uploads')}}/{{$product->image}}" alt="" width="60">
            </td>
            <td>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<br>
{{$products->appends(request()->all())->links()}}
@stop()