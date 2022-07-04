@extends('customer.main')

@section('container')
{{-- Carousel --}}
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active bg-secondary" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="bg-secondary"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="bg-secondary"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4" class="bg-secondary"></button>
    </div>
    <div class="carousel-inner" style="height: 590px; width: 1600">
        @foreach ($promotionbanners->take(1) as $promotionbanner)
        <div class="carousel-item active">
            <a href="/stores?store={{ $promotionbanner->store->slug }}">
                <img src="{{ $promotionbanner->image }}" class="img-fluid">
                <div class="container">
                    <div class="carousel-caption text-start">
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @foreach ($promotionbanners->skip(1)->take(1) as $promotionbanner)
        <div class="carousel-item active">
            <a href="/stores?store={{ $promotionbanner->store->slug }}">
                <img src="{{ $promotionbanner->image }}" class="img-fluid">
                <div class="container">
                    <div class="carousel-caption text-start">
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @foreach ($promotionbanners->skip(2)->take(1) as $promotionbanner)
        <div class="carousel-item active">
            <a href="/stores?store={{ $promotionbanner->store->slug }}">
                <img src="{{ $promotionbanner->image }}" class="img-fluid">
                <div class="container">
                    <div class="carousel-caption text-start">
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @foreach ($promotionbanners->skip(2)->take(1) as $promotionbanner)
        <div class="carousel-item active">
            <a href="/stores?store={{ $promotionbanner->store->slug }}">
                <img src="{{ $promotionbanner->image }}" class="img-fluid">
                <div class="container">
                    <div class="carousel-caption text-start">
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- Featured Brand --}}
<div class="container my-5">
    <div class="h3 mb-3 text-center title">Featured Brand</div>
    <div class="d-flex flex-row justify-content-around">
        <div class="btn">
            @foreach ($stores->take(1) as $store)
            <a href="/stores?store={{ $store->slug }}" class="mx-4">
                <img src="{{ asset('img/customer/asus.png') }}" alt="" width="130">
            </a>
            @endforeach
        </div>
        <div class="btn">
            @foreach ($stores->skip(1)->take(1) as $store)
            <a href="/stores?store={{ $store->slug }}" class="mx-4">
                <img src="{{ asset('img/customer/lenovo.jpg') }}" alt="" width="130">
            </a>
            @endforeach
        </div>
        <div class="btn">
            @foreach ($stores->skip(2)->take(1) as $store)
            <a href="/stores?store={{ $store->slug }}" class="mx-4">
                <img src="{{ asset('img/customer/acer.jpg') }}" alt="" width="130">
            </a>
            @endforeach
        </div>
        <div class="btn">
            <a href="" class="mx-4">
                <img src="{{ asset('img/customer/corsair.jpg') }}" alt="" width="130">
            </a>
        </div>
        <div class="btn">
            <a href="" class="mx-4">
                <img src="{{ asset('img/customer/steelseries.jpg') }}" alt="" width="130">
            </a>
        </div>
    </div>
</div>

{{--Featured Feature --}}
<div class="container my-5">
    @foreach ($promotions->take(1) as $promotion)
    <div class="row featurette mt-5">
        <div class="col-md-7 mt-lg-auto mb-lg-auto text-start">
            <h2 class="featurette-heading fw-normal">6.6 Greatest Mid-Year<span class="text-muted"></span></h2>
            <p class="lead">Get discount up to 70%</p>
            <p><a class="btn btn-sm details" href="/categories?category={{ $promotion->category->slug }}">View details &raquo;</a></p>
        </div>
        <div class="col-md-5">
            <img src=" {{ $promotion->image }}" class="img-fluid rounded shadow-sm">
        </div>
    </div>
    @endforeach

    @foreach ($promotions->skip(1)->take(1) as $promotion)
    <div class="row featurette mt-5">
        <div class="col-md-5">
            <img src=" {{ $promotion->image }}" class="img-fluid rounded shadow-sm">

        </div>
        <div class="col-md-7 mt-lg-auto mb-lg-auto text-end">
            <h2 class="featurette-heading fw-normal">6.6 Greatest Mid-Year<span class="text-muted"></span></h2>
            <p class="lead">Get discount up to 70%</p>
            <p><a class="btn btn-sm details" href="/categories?category={{ $promotion->category->slug }}">View details &laquo;</a></p>
        </div>
    </div>
    @endforeach
</div>

{{-- Cards Products--}}
<div class="container mt-5">
    <div class="container">
        <div class="h2 title mb-1">Featured Products</div>
        <div class="fs-6 mt-n1 mb-1">Browse the Newest Products</div>
        <div id="carouselExampleIndicators2" class="carousel slide mb-0" data-bs-ride="true">
            <div class="carousel-inner carousel-products" style="height: 500px;">
                <div class="carousel-item active">
                    <div class="row">
                        @foreach ($products->take(4) as $product)
                        <div class="col-md-3 col-sm-6">
                            <div class="product-grid shadow-sm">
                                <div class="product-image">
                                    <a href="/products/{{ $product->slug }}" class="image">
                                        <img class="img-1" src="{{ asset('img/customer/img-1.png') }}" width="500" height="500">
                                        <img class="img-2" src="{{ asset('img/customer/img-2.png') }}" width="500" height="500">
                                    </a>
                                    @if($product->discount >= 1)
                                    <span class="product-hot-label">{{ $product->discount }}% OFF</span>
                                    @endif
                                    <form action="/add" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-link product-like-icon">
                                            <i class="bx bx-heart"></i>
                                        </button>
                                        @Auth
                                        <button type="submit" class="btn btn-link product-like-icon">
                                            @if ($itemwishlist->where('product_id', $product->id)
                                            ->where('user_id', Auth::user()->id)
                                            ->first())
                                            <i class="bx bxs-heart"></i>
                                            @else
                                            <i class="bx bx-heart"></i>
                                            @endif
                                        </button>
                                        @endauth
                                    </form>
                                    <ul class="product-links">
                                        <li><a href="/cart">Add to Cart</a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="rating row">
                                        <a href="/stores?store={{ $product->store->slug }}" class="store">
                                            <img src="{{ asset('img/customer/bxs-check-shield.svg') }}" class="d-inline-block align-text-center" width="10"> {{ $product->store->name }}</a>
                                        <li class="disable">{{ $product->sold }} Sold</li>
                                    </ul>
                                    <h3 class="title"><a href="/products/{{ $product->slug }}">{{ $product->name }}</a></h3>
                                    @if($product->discount >= 1)
                                    <div class="price_ mt-2">Rp{{ $product->price * ((100 - $product->discount)/100) }}</div>
                                    <div class="small text-secondary text-decoration-line-through diskon">
                                        <sub class="mb-2">Rp{{ $product->price }}</sub>
                                    </div>

                                    @else
                                    <div class="price_ mt-2">Rp{{ $product->price }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        @foreach ($products->skip(4)->take(4) as $product)
                        <div class="col-md-3 col-sm-6">
                            <div class="product-grid shadow-sm">
                                <div class="product-image">
                                    <a href="/products/{{ $product->slug }}" class="image">
                                        <img class="img-1" src="{{ asset('img/customer/img-1.png') }}" width="500" height="500">
                                        <img class="img-2" src="{{ asset('img/customer/img-2.png') }}" width="500" height="500">
                                    </a>
                                    @if($product->discount >= 1)
                                    <span class="product-hot-label">{{ $product->discount }}% OFF</span>
                                    @endif
                                    <form action="/add" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-link product-like-icon">
                                            <i class="bx bx-heart"></i>
                                        </button>
                                        @Auth
                                        <button type="submit" class="btn btn-link product-like-icon">
                                            @if ($itemwishlist->where('product_id', $product->id)
                                            ->where('user_id', Auth::user()->id)
                                            ->first())
                                            <i class="bx bxs-heart"></i>
                                            @else
                                            <i class="bx bx-heart"></i>
                                            @endif
                                        </button>
                                        @endauth
                                    </form>
                                    <ul class="product-links">
                                        <li><a href="/cart">Add to Cart</a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="rating row">
                                        <a href="/stores?store={{ $product->store->slug }}" class="store">
                                            <img src="{{ asset('img/customer/bxs-check-shield.svg') }}" class="d-inline-block align-text-center" width="10"> {{ $product->store->name }}</a>
                                        <li class="disable">{{ $product->sold }} Sold</li>
                                    </ul>
                                    <h3 class="title"><a href="/products/{{ $product->slug }}">{{ $product->name }}</a></h3>
                                    @if($product->discount >= 1)
                                    <div class="price_ mt-2">Rp{{ $product->price * ((100 - $product->discount)/100) }}</div>
                                    <div class="small text-secondary text-decoration-line-through diskon">
                                        <sub class="mb-2">Rp{{ $product->price }}</sub>
                                    </div>

                                    @else
                                    <div class="price_ mt-2">Rp{{ $product->price }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        @foreach ($products->skip(8)->take(4) as $product)
                        <div class="col-md-3 col-sm-6">
                            <div class="product-grid shadow-sm">
                                <div class="product-image">
                                    <a href="/products/{{ $product->slug }}" class="image">
                                        <img class="img-1" src="{{ asset('img/customer/img-1.png') }}" width="500" height="500">
                                        <img class="img-2" src="{{ asset('img/customer/img-2.png') }}" width="500" height="500">
                                    </a>
                                    @if($product->discount >= 1)
                                    <span class="product-hot-label">{{ $product->discount }}% OFF</span>
                                    @endif
                                    <form action="/add" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-link product-like-icon">
                                            <i class="bx bx-heart"></i>
                                        </button>
                                        @Auth
                                        <button type="submit" class="btn btn-link product-like-icon">
                                            @if ($itemwishlist->where('product_id', $product->id)
                                            ->where('user_id', Auth::user()->id)
                                            ->first())
                                            <i class="bx bxs-heart"></i>
                                            @else
                                            <i class="bx bx-heart"></i>
                                            @endif
                                        </button>
                                        @endauth
                                    </form>
                                    <ul class="product-links">
                                        <li><a href="/cart">Add to Cart</a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ul class="rating row">
                                        <a href="/stores?store={{ $product->store->slug }}" class="store">
                                            <img src="{{ asset('img/customer/bxs-check-shield.svg') }}" class="d-inline-block align-text-center" width="10"> {{ $product->store->name }}</a>
                                        <li class="disable">{{ $product->sold }} Sold</li>
                                    </ul>
                                    <h3 class="title"><a href="/products/{{ $product->slug }}">{{ $product->name }}</a></h3>
                                    @if($product->discount >= 1)
                                    <div class="price_ mt-2">Rp{{ $product->price * ((100 - $product->discount)/100) }}</div>
                                    <div class="small text-secondary text-decoration-line-through diskon">
                                        <sub class="mb-2">Rp{{ $product->price }}</sub>
                                    </div>

                                    @else
                                    <div class="price_ mt-2">Rp{{ $product->price }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev ms-0" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next me-0" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row">
        <a class="btn btn1 col-md-2 mx-auto" href="/products">View All Products</a>
    </div>
</div>
@endsection