{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">

        <h2>Products</h2>

        <div class="container d-flex align-items-center">
            <div class="d-flex align-items-center row">

                <div class="col-md-4">
                    <div class="card">
                        <img src="https://cdn.shopify.com/s/files/1/0910/0818/products/Bvlgari-Omnia-Amethyste-Women-Eau-de-Toilette-Spray-2.2-Best-Price-Fragrance-Parfume-FragranceOutlet.com-Main_1024x1024.jpg?v=1595431233" class="card-img-top" alt="Product Image">

                        <div class="card-body">
                            <h5 class="card-title">Omnia Amethyste</h5>
                            <p class="card-text">
                                Omnia Amethyste by Bvlgari is a women's fragrance that blends floral and woody notes, creating a scent profile inspired by the delicate and luminous qualities of the amethyst gemstone.
                            </p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="https://media.bulgari.com/image/upload/c_pad,h_1982,w_1982/q_auto/f_auto/1484451.png" class="card-img-top" alt="Product Image">

                        <div class="card-body">
                            <h5 class="card-title">Omnia Coral Eau De Toilette</h5>
                            <p class="card-text">
                                Omnia Coral Eau De Toilette by Bvlgari is a vibrant and lively fragrance that combines notes of red fruits, hibiscus, and pomegranate for a fresh, energetic, and joyful scent.
                            </p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="https://media.bulgari.com/image/upload/c_pad,h_1982,w_1982/q_auto/f_auto/1484433.png" class="card-img-top" alt="Product Image">

                        <div class="card-body">
                            <h5 class="card-title">Omnia Amethyste</h5>
                            <p class="card-text">
                                Omnia Crystalline Eau De Toilette by Bvlgari is a sparkling and elegant fragrance that features a luminous blend of bamboo, lotus flower, and musk, evoking a sense of purity and sophistication.
                            </p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
</body>
</html> --}}

@extends('layout')

@section('content')
    <h1>
        Dashboard
    </h1>
    @include('shared.product-cards')
@endsection
