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
                <th>Địa chỉ giao hàng</th>
                <th>Trạng thái</th>
                <th>Tổng tiền</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $item)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>
                    {{$item->created_at->format('d-m-Y')}}
                    <span class="badge badge-success">{{$item->created_at->format('h:i:s')}}</span>
                </td>
                <td>{{$item->address}}</td>
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
                <td>{{ number_format($item->TotalPrice) }} đ</td>
                <td>
                    <a data-toggle="modal" href="#modal-{{$item->id}}" class="btn btn-sm btn-danger">Chi tiết</a>

                    <a target="_blank" href="{{ route('order.pdf', $item->id) }}" class="btn btn-sm btn-danger">PDF</a>
                    <a target="_blank" href="{{ route('order.pdf', $item->id) }}?download=true" class="btn btn-sm btn-danger">Tải PDF</a>


                    <div class="modal fade" id="modal-{{$item->id}}">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Chi tiết đơn hàng</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Ảnh</th>
                                                <th>Tên SP</th>
                                                <th>Giá mua</th>
                                                <th>Số luọng</th>
                                                <th>TT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($item->details() as $detail)
                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>
                                                    <img src="{{ url('uploads') }}/{{ $detail->image }}" width="50">
                                                </td>
                                                <td>{{ $detail->name }}</td>
                                                <td>{{ $detail->price }}</td>
                                                <td>{{ $detail->quantity }}</td>
                                                <td>{{ $detail->SubTotal }}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <th colspan="5">Tổng tiền</th>
                                                <th>{{ number_format($item->TotalPrice) }} đ</th>

                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

    <br>

    <div class="text-center">
        <a href="{{ route('home.index') }}" class="btn btn-primary">Tiếp tục mua hàng</a>
        <a href="{{ route('cart.clear') }}" onclick="return confirm('Bạn có chắc không?')" class="btn btn-danger">Xóa
            giỏ hàng</a>
        <a href="{{ route('order.checkout') }}" class="btn btn-success">Đặt hàng</a>
    </div>
</div>


@stop()