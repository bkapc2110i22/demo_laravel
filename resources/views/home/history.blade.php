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
                <th>ngày mùa</th>
                <th>Trạng thái</th>
                <th>Tổng tiền</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($auth->orders as $item)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    @if ($item->status == 0)
                        <span>Chờ duyệt</span>
                    @elseif($item->status == 1)
                    <span>Đang giao hàng</span>
                    @elseif($item->status == 1)
                    <span>Đã giao hàng</span>
                    @else 
                    <span>Đã hủy</span>
                    @endif

                </td>
                <td>0000</td>
                <td>
                    <a href="" class="btn btn-sm btn-danger">Chi tiết đơn hàng</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>

    <div class="text-center">
        <a href="{{ route('home.index') }}" class="btn btn-primary">Tiếp tục mua hàng</a>
        <a href="{{ route('cart.clear') }}" onclick="return confirm('Bạn có chắc không?')" class="btn btn-danger">Xóa giỏ hàng</a>
        <a href="{{ route('order.checkout') }}" class="btn btn-success">Đặt hàng</a>
    </div>
</div>


@stop()