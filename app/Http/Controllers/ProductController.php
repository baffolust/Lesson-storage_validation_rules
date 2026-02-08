<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){

        /* CREAZIONE OGGETTO PRODOTTO E SALVARLO NEL DB */
        /* Va creato un modello (un oggetto definito in Laravel) tramite CMD Line php artisan make:model [nome_modello] */

        $name = $request->name;
        // è uguale a scrivere $name = $request->input('name');

        $description = $request->description;
        $price = $request->price;


        // CREAZIONE PRODOTTO METODO #1
        // Istanziamo un oggetto $product di classe Product
        /* $product = new Product(); */

        // i costruttori nei modelli Laravel non si utilizzano, dato che utilizza Eloquent per generare i modelli con una struttura particolare che permette di utilizzare la seguente sintassi

        /* 
        $product->name = $name;
        $product->description = $description;
        $product->price = $price; 
        */
        // valorizzo gli attributi di $product

        /* $product->save(); */
        // salva l'oggetto nel DB

        // CREAZIONE PRODOTTO METODO #2 - MASS ASSIGNMENT

        Product::create([

            'name' => $name,
            'description' => $description,
            'price' => $price

        ]);

        return redirect()->back();
    }

    public function index(){

        //Faccio chiamata al DB, per richiedere tutti i prodotti con metodo all() del modello Product
        $products = Product::all();

        // passo la variabile $products alla vista index
        /* $product non è un oggetto di tipo collection, non un array di array. $name, $description e $price sono proprietà, e quindi si recuperano con la square syntax procuts[], ma con $product-> */
        return view('product.index', ['products' => $products ]);
    }
}
