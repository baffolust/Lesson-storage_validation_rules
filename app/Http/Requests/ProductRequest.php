<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // di default è "false"; variare in "true" per autorizzare l'utente a creare questa request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required | min:5', 
            'description' => 'required',
            'price' => 'required | gt:0'

            // con questa sintassi, definisco le regole per la validazione dei dati
            // sono attributi di tipo chiave=>valore
            // chiave: attributo da validare
            // valore: regola di validazione
            // se non viene rispattata la regola, il dato non viene passato e viene eseguito un redirect()->back()

            // è possibile inserire più regole di validazione con la sintassi 
            // 'attributo' => 'regola#1 | regola#2'

        ];
    }

    public function messages(){

        // ritorna un array chiave=>valore
        // chiave: è la regola da validare, nel formato attributo.regola
        // valore: messaggio da restituire in caso di errore di validazione

        return [
            'name.required' => 'Il nome del prodotto è obbligatorio',
            'name.min' => 'Il nome deve essere lungo minimo 5 caratteri',
            'description.required' => 'La descrizione del prodotto è obbligatoria',
            'price.required' => 'Il prezzo del prodotto è obbligatorio',
            'price.gt' => 'Il prezzo del prodotto deve essere maggiore di 0'

        ];

    }
}
