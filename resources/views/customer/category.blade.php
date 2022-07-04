@extends('customer.main')

@section('container')
{{-- Background --}}
<div>
    @foreach ($products->take(1) as $a)
    <img src="https://source.unsplash.com/1520x400?{{ $a->category->name }}" alt="" width="1519" height="400">
    @endforeach
</div>

@if ($products->count() > 0)
{{-- Products --}}
<div class="container my-5 px-3">
    @foreach ($products->take(1) as $a)
    <h1 class="h3 title text-start">{{ $a->category->name }}</h1>
    @endforeach
    <div class="row">
        @foreach ($products as $product)
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
                        <a href="" class="store">
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
    <div class="d-flex justify-content-end my-3">
        <div class="shadow-sm">
            {{ $products->links() }}
        </div>
    </div>
</div>

@else
<p class="text-center fs-4 title noproduct">No Product found</p>
@endif
@endsection