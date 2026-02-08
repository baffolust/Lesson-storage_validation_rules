<x-layout>


    <header class="container-fluid">
        <div class="row justify-content-center bg-warning">
            <div class="col-12 text-center">
                <h1> HOMEPAGE </h1>
            </div>
        </div>

    </header>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <form class="rounded-4 bg-dark text-light p-4 shadow" action="{{ route('product.create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Prodotto</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione prodotto</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <div class="d-flex">
                            <input name="price" type="text" class="form-control" id="price">
                            <span> € </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>
