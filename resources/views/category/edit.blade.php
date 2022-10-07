@extends('layouts.master')
@section('title','Chỉnh sửa danh mục')
@section('main')
<h2>Danh mục</h2>


<form action="{{ route('category.update', $cat->id) }}" method="POST"  role="form">
    @csrf @method('PUT')
    <div class="form-group">
        <label class="sr-only" for="">Tên danh mục</label>
        <input class="form-control" name="name" value="{{$cat->name}}">
        @error('name') <div>{{$message}}</div> @enderror
    </div>

    <div class="form-group">
        <label class="sr-only" for="">Trạng thái danh mục</label>

        <div class="radio">
            <label>
                <input type="radio" name="status"  value="1" {{$cat->status == 1 ? 'checked':''}} >
                Hiển thị
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0" {{$cat->status == 0 ? 'checked':''}}>
                Ẩn
            </label>
        </div>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop()