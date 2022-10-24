@extends('layouts.master')
@section('title','About Page')
@section('main')

<div class="container">
    <h2>Giỏ hàng của bạn</h2>
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
            @foreach($carts as $item)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>
                    <img class="card-img-top" src="{{url('uploads')}}/{{$item->image}}" style="width: 60px">
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->quantity * $item->price}}</td>
                <td>
                    <a href="" class="btn btn-sm btn-danger">&times;</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@stop()