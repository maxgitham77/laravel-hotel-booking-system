@extends('frontend.layouts.master')

@section('frontend')
    <!-- Sub banner start -->
    <div class="sub-banner-room overview-bgi">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Shopping in Hamburg</h1>
                <ul class="breadcrumbs">
                    <li><a href="javascript:;">Home</a></li>
                    <li class="active">shop</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Shop page starts -->
    <main role="main">

        <section class="jumbotron text-center">
            <h1>Shop</h1>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm product-list">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-1.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-2.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-3.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-3.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-5.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-6.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-7.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-8.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-9.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-10.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-8.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-4.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-5.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-6.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-7.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-8.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm product-list">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-1.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-2.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-3.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <figure style="height: 255px">
                                <img src="{{ asset('frontend/img/shop/tshirt-3.jpg') }}"/>
                            </figure>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">Hamburg T-Shirt</p>
                                <p class="card-text rating" style="text-align: center">stars</p>
                                <p class="card-text price" style="text-align: center"> € 10</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- Shop page ends -->

@endsection
