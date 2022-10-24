<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font awesome icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- owl carousel  CSS -->
    <link rel="stylesheet" href="{{url('')}}/plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('')}}/plugins/owl-carousel/assets/owl.theme.default.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    @yield('css')
    <link rel="stylesheet" href="{{url('')}}/css/style.css">
</head>

<body>

    <div class="top-header bg-dark text-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('home.index')}}">
                        <img src="http://demo.minimalthemes.net/shopping-static/images/logo.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fa-solid fa-user"></i> Đăng nhập
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-user-clock"></i> Đăng ký</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home.index')}}">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.about')}}">Giới thiệu</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            @foreach($globalCats as $cat)
                            <a class="dropdown-item"
                                href="{{route('home.category', ['category'=> $cat->id, 'slug' => Str::slug($cat->name)])}}">{{$cat->name}}</a>
                            @endforeach
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.index')}}">Tin tức</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.index')}}">Liên hệ</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#accout-menu"
                aria-controls="accout-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="accout-menu">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    @if (auth('cus')->check())
                    <li class="active">
                        <a href="{{ route('home.login') }}">Hi {{auth('cus')->user()->name}}</a>
                    </li>
                    <li>
                        <a href="{{ route('home.profile') }}">Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('home.logout') }}">Logout</a>
                    </li>
                    @else
                    <li class="active">
                        <a href="{{ route('home.login') }}">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if (Session::has('no'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{Session::get('no')}}!</strong>
        </div>
        @endif
        @if (Session::has('yes'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{Session::get('yes')}}!</strong>
        </div>
        @endif
    </div>

    @yield('main')
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Twitter Updates</h3>
                    <p>Check out this great #themeforest item for you 'Simpler Landing' http://t.co/LbLwldb6
                        2 hours ago</p>
                    <p>
                        Check out this great #themeforest item for you 'Simpler Landing' http://t.co/LbLwldb6
                        2 hours ago
                    </p>
                    <a href="" class="btn btn-primary"><i class="fa-brands fa-facebook"></i> Chia sẻ Facebook</a>
                </div>
                <div class="col-md-4">
                    <h3>Newsletter Signup</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <form action="">
                        <div class="form-group">
                            <label for="">Your Email address</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Your Email address">
                        </div>
                        <button class="btn btn-danger">Sign Up</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <h3>Shopping</h3>

                    <div class="media">
                        <a class="d-flex align-self-center" href="#">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                        <div class="media-body">
                            <h5>+387 123 456, +387 123 456</h5>
                            <p>+387 123 456</p>
                        </div>
                    </div>

                    <div class="media">
                        <a class="d-flex align-self-center" href="#">
                            <i class="fa-solid fa-blender-phone"></i>
                        </a>
                        <div class="media-body">
                            <h5>+387 123 456, +387 123 456</h5>
                            <p>+387 123 456</p>
                        </div>
                    </div>



                    <div class="media">
                        <a class="d-flex align-self-center" href="#">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                        <div class="media-body">
                            <h5>+387 123 456, +387 123 456</h5>
                            <p>+387 123 456</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="modal-product" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Chi tiết sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card text-left">
                                <img class="card-img-top"
                                    src="http://demo.minimalthemes.net/shopping-static/images/sample-1.jpg" alt="">

                            </div>
                        </div>
                        <div class="col-md-7">
                            <h3>Ten sản phẩm</h3>
                            <h4>Giá: 500,000 đ</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, rem quos magni odio
                                voluptate voluptates sit! Eius reiciendis doloribus, assumenda error, quaerat sit quis
                                nostrum perspiciatis accusantium atque, odit repellendus.
                            </p>

                            <form action="" method="POST" class="form-inline" role="form">

                                <div class="form-group">
                                    <input type="email" class="form-control" id="" placeholder="Input field">
                                </div>


                                <button type="submit" class="btn btn-primary"><i
                                        class="fa-solid fa-cart-arrow-down"></i> Thêm giỏ hàng</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{url('')}}/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{url('')}}/js/owl-carousel.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @yield('js')
</body>

</html>