<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|min:5|max:30',
            'description'=>'required',
            'thumb'=>'required',
            'price'=>'required',
            'series'=>'required',
            'sale_date'=>'required',
            'type'=>'required',
        ];
    }

        public function messages(): array
    {
        return [
            'title.required' => 'Il titolo é richiesto',
            'description.required' => 'la descrizione è richiesta',
            'thumb.required' => 'è richiesta un immagine',
            'price.required' => 'è richiesto un prezzo',
            'series.required' => 'è richiesta una serie',
            'sale_date.required' => 'è richiesta una data di vendita',
            'type.required' => 'è richiesta una tipologia'
        ];
    }
}
