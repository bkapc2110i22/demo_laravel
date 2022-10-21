@extends('layouts.master')
@section('title','Home Page')
@section('main')

<div class="main-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="about text-justify">
                    <div class="page-title">
                        <h3>{{$category->name}}</h3>
                        <div class="title-line"></div>
                    </div>
                </div>

                <div class="lastest-products my-5">
                    <div class="row">
                        @foreach($products as $item)
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="{{ route('home.productDetail', ['product'=> $item->id, 'slug' => Str::slug($item->name)]) }}"
                                    class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top" src="{{url('uploads')}}/{{$item->image}}" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{$item->name}}</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
    <hr>
                    {{$products->links()}}
                </div>

            </div>
            <div class="col-md-3">
                <h3>Categories</h3>

                <div class="list-group">
                    @foreach($globalCats as $cat)
                    <a class="list-group-item list-group-item-action"
                        href="{{route('home.category', ['category'=> $cat->id, 'slug' => Str::slug($cat->name)])}}">{{$cat->name}}</a>
                    @endforeach
                </div>

                <div class="card border-primary">
                    <a href="">
                        <img class="card-img-top" src="http://demo.minimalthemes.net/shopping-static/images/ads.png"
                            alt="">
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>


@stop()