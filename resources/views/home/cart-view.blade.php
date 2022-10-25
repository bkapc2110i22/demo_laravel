@extends('layouts.master')
@section('title','About Page')
@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Giỏ hàng của bạn</h2>
        </div>
        <div class="col-md-6">
        <h2>Tổng tiền: {{ $cart->totalAmount}}</h2>
        </div>
    </div>
    <hr>


    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sub total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart->items as $item)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>
                    <img class="card-img-top" src="{{url('uploads')}}/{{$item->image}}" style="width: 60px">
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>


                    <form action="{{ route('cart.update', $item->id) }}" method="get">
                        <input type="number" name="quantity" value="{{$item->quantity}}"
                            style="width:60px; text-align:center">
                        <button type="submit">Update</button>
                    </form>

                </td>
                <td>{{$item->quantity * $item->price}}</td>
                <td>
                    <a href="{{ route('cart.remove', $item->id) }}" onclick="return confirm('Bạn có chắc không?')"
                        class="btn btn-sm btn-danger">&times;</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>

    <div class="text-center">
        <a href="{{ route('home.index') }}" class="btn btn-primary">Tiếp tục mua hàng</a>
        <a href="{{ route('cart.clear') }}" onclick="return confirm('Bạn có chắc không?')" class="btn btn-danger">Xóa giỏ hàng</a>
        <a href="{{ route('home.index') }}" class="btn btn-success">Đặt hàng</a>
    </div>
</div>


@stop()