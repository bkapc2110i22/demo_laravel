<div class="top-product py-5">
    <div class="container">

        <div class="page-title">
            <h3>{{$title}}</h3>
            <div class="title-line"></div>
        </div>
        <div id="top-product" class="owl-carousel owl-theme">
            @foreach($products as $item)
            <div class="item product-item">
                <div class="pro-hot"></div>
                <div class="banner-price red">
                    <div class="x-price">
                        <s>{{$item->price}}</s>
                        <big>{{$item->sale_price}}</big>
                    </div>
                </div>
                <div class="card text-left">
                    <img class="card-img-top" src="{{url('uploads')}}/{{$item->image}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ route('home.productDetail', ['product'=> $item->id, 'slug' => Str::slug($item->name)]) }}">{{$item->name}}</a>
                        </h4>
                        <p class="card-text">Price: {{$item->price}}</p>
                        <a href="{{ route('cart.add', $item->id) }}" class="btn-add-cart btn btn-success btn-block">Add To Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
