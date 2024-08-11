<div>
    <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach (json_decode($products) as $product )
            <div class="card h-100">
                <img src="{{$product->image}}" class="card-img-top">
                <div class="card-body" >
                    <h5 class="card-title" > {{$product->name}}</h5>
                </div>
                <p class="card-text">
                    {{$product->description}}
                </p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        @endforeach

    </div>
</div>
