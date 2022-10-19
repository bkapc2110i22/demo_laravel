@extends('layouts.master')
@section('title',$product->name)
@section('main')


<div class="container">
    <div class="row">
        <div class="col-md-5">
        <img class="card-img-top" src="{{url('uploads')}}/{{$product->image}}" alt="">

        </div>
        <div class="col-md-7">
            <h2>{{$product->name}}</h2>
            <h2>Price {{number_format($product->price)}}</h2>

            <div>
                {{$product->content}}
            </div>
        </div>
    </div>
</div>


@stop()