<x-layout>

    <header class="container-fluid">
        <div class="row justify-content-center bg-warning">
            <div class="col-12 text-center">
                <h1> I miei prodotti </h1>
            </div>
        </div>

    </header>


    <div class="container">
        <div class="row justify-content-center">
            @foreach ($products as $product )
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$product->price}} €</h6>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>

</x-layout>
