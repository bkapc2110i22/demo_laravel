@extends('layouts.master')
@section('title','Home Page')
@section('main')

<div class="container">

    <div id="banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner" data-slide-to="0" class="active"></li>
            <li data-target="#banner" data-slide-to="1"></li>
            <li data-target="#banner" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="banner-price">
                    <div class="x-price">
                        <s>$140</s>
                        <big>$120</big>
                        <span>Best Deal</span>
                    </div>
                </div>
                <img class="w-100" src="http://demo.minimalthemes.net/shopping-static/images/slide-1.jpg"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block">

                    <h3 class="text-dark">consectetur adipisicing elit</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In odit vel corrupti, assumenda
                        recusandae eveniet at fuga molestiae ratione blanditiis dolor voluptatem tenetur a iusto,
                        hic accusantium voluptatibus sint dignissimos?</p>
                    <a href="" class="btn btn-danger"><i class="fa-solid fa-cart-arrow-down"></i> Thêm giỏ hàng</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner-price">
                    <div class="x-price">
                        <s>$140</s>
                        <big>$120</big>
                        <span>Best Deal</span>
                    </div>
                </div>
                <img class="w-100" src="http://demo.minimalthemes.net/shopping-static/images/slide-3.jpg"
                    alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Lorem ipsum, dolor sit amet consectetur</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In odit vel corrupti, assumenda
                        recusandae eveniet at fuga molestiae ratione blanditiis dolor voluptatem tenetur a iusto,
                        hic accusantium voluptatibus sint dignissimos?</p>
                    <a href="" class="btn btn-danger"><i class="fa-solid fa-cart-arrow-down"></i> Thêm giỏ hàng</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner-price">
                    <div class="x-price">
                        <s>$140</s>
                        <big>$120</big>
                        <span>Best Deal</span>
                    </div>
                </div>
                <img class="w-100" src="http://demo.minimalthemes.net/shopping-static/images/slide-2.jpg"
                    alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>In odit vel corrupti</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In odit vel corrupti, assumenda
                        recusandae eveniet at fuga molestiae ratione blanditiis dolor voluptatem tenetur a iusto,
                        hic accusantium voluptatibus sint dignissimos?</p>
                    <a href="" class="btn btn-danger"><i class="fa-solid fa-cart-arrow-down"></i> Thêm giỏ hàng</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<x-product-carousel :data="$newProducts" title="Lastest Products"/>
<x-product-carousel :data="$saleProducts" title="Sale Products"/>
<x-product-carousel :data="$ramdomProducts" title="Random Products"/>


<div class="main-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="about text-justify">
                    <div class="page-title">
                        <h3>About Shopping</h3>
                        <div class="title-line"></div>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </p>

                    <a href="" class="btn btn-danger">Read More <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>

                <div class="lastest-products my-5">
                    <div class="page-title">
                        <h3>Lastest Products</h3>
                        <div class="title-line"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>
                        <div class="col-md-4 product-item">
                            <div class="product-icon">
                                <a href="#modal-product" data-toggle="modal" class="btn btn-success"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-heart"></i></a>
                                <a href="product-detail.html" class="btn btn-primary"><i
                                        class="fa-solid fa-share"></i></a>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Product name</h4>
                                    <p class="card-text">Price: 50000</p>
                                </div>
                                <a href="" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <h3>Categories</h3>

                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Active item</a>
                    <a href="#" class="list-group-item list-group-item-action">Item</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Disabled item</a>
                    <a href="#" class="list-group-item list-group-item-action">Women Accessories</a>
                    <a href="#" class="list-group-item list-group-item-action">Men Shoes</a>
                    <a href="#" class="list-group-item list-group-item-action">Gift Specials</a>
                    <a href="#" class="list-group-item list-group-item-action">Electronics</a>
                    <a href="#" class="list-group-item list-group-item-action">iPhone 4SSamsung GalaxyMacBook Pro
                        17"</a>
                    <a href="#" class="list-group-item list-group-item-action">On sale</a>
                    <a href="#" class="list-group-item list-group-item-action">Summer Specials</a>
                    <a href="#" class="list-group-item list-group-item-action">Electronics</a>
                    <a href="#" class="list-group-item list-group-item-action">Unique Stuff</a>
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