@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="row ">
            {{-- @foreach ($products as $product)
                <div class="col-3 item">
                    <div class="card text-center mb-3 border border-none" style="width: 18rem;">
                        <div class="card-body">
                            <img src="{{ asset('/assets/images/') $product['img']}}" class="card-img-top" alt="">
                            <h5 class="card-title">{{$product['name']}}</h5>
                            <p class="card-text">{{$product['price']}}</p>
                            <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            @endforeach --}}
            <div class="col-3 item">
                <div class="card text-center mb-3 border border-none" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/assets/images/product-1.png') }}" class="card-img-top" alt="">
                        <h5 class="card-title">Nodric Chair</h5>
                        <p class="card-text">$50.00</p>
                        <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="col-3 item">
                <div class="card text-center mb-3 border border-none" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/assets/images/product-2.png') }}" class="card-img-top" alt="">
                        <h5 class="card-title">Nodric Chair</h5>
                        <p class="card-text">$50.00</p>
                        <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="col-3 item">
                <div class="card text-center mb-3 border border-none" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/assets/images/product-3.png') }}" class="card-img-top" alt="">
                        <h5 class="card-title">Nodric Chair</h5>
                        <p class="card-text">$50.00</p>
                        <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-3 item">
                <div class="card text-center mb-3 border border-none" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/assets/images/product-1.png') }}" class="card-img-top" alt="">
                        <h5 class="card-title">Nodric Chair</h5>
                        <p class="card-text">$50.00</p>
                        <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="col-3 item">
                <div class="card text-center mb-3 border border-none" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/assets/images/product-1.png') }}" class="card-img-top" alt="">
                        <h5 class="card-title">Nodric Chair</h5>
                        <p class="card-text">$50.00</p>
                        <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="col-3 item">
                <div class="card text-center mb-3 border border-none" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/assets/images/product-2.png') }}" class="card-img-top" alt="">
                        <h5 class="card-title">Nodric Chair</h5>
                        <p class="card-text">$50.00</p>
                        <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="col-3 item">
                <div class="card text-center mb-3 border border-none" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/assets/images/product-3.png') }}" class="card-img-top" alt="">
                        <h5 class="card-title">Nodric Chair</h5>
                        <p class="card-text">$50.00</p>
                        <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-3 item">
                <div class="card text-center mb-3 border border-none" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('/assets/images/product-1.png') }}" class="card-img-top" alt="">
                        <h5 class="card-title">Nodric Chair</h5>
                        <p class="card-text">$50.00</p>
                        <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
