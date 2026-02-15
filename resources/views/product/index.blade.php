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
                <x-cardProduct :product="$product"/>
                {{-- con la sintassi :product indico che sto passando come parametro un oggetto o un array --}}
            </div>
            @endforeach
        </div>
    </div>

</x-layout>
