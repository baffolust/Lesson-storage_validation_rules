<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /* 
    Per creare un modello che è legato direttamente alla tabelle si sfrutta la NAMING CONVENTION di ELOQUENT
    php artisan make:model Product
    che crea il modello di dato che una volta istanziato, tramite il metodo store(), salva il dato nella tabella products
    */


    // Laravel definisce una proprietà protected $fillable per garantire una maggiore sicurezza dei modelli
    // $fillable è un array nel quale si definiscono i nomi dei campi del modello

    protected $fillable = [
        'name',
        'description',
        'price', 
        'img'
    ];

    

}
