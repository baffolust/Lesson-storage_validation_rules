<x-layout>


    <header class="container-fluid">
        <div class="row justify-content-center bg-warning">
            <div class="col-12 text-center">
                <h1> INSERISCI PRODOTTO </h1>
            </div>
        </div>

    </header>

    {{-- snippet che inserisce un messaggio di successo --}}
    @if (session('productInserted'))
        <div class="alert alert-success">
            {{ session('productInserted') }}
        </div>
    @endif

    {{-- snippet che inserisce un messaggio di errore di validazione --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">


                <form class="rounded-4 bg-dark text-light p-4 shadow" action="{{ route('product.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Prodotto</label>
                        <input name="name" value="{{ old('name') }}" type="text" class="form-control"
                            id="name">
                        {{-- con value={{old('name')}} indichiamo di mantenere l'ultimo valore del campo --}}
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione prodotto</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>
                        {{-- textarea non ha un valore di default per value e si mette all'interno dei tag --}}
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <div class="d-flex">
                            <input name="price" value="{{ old('price') }}" type="text" class="form-control"
                                id="price">
                            <span> € </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>
