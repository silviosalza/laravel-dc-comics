<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:100',
            'description' => 'nullable',
            'thumb' => 'required',
            'price' => 'required|min:2|max:255',
            'series' => 'required',
            'type' => 'nullable',
            'sale_date' => 'nullable',

                ];
    }
    public function messages() {
        return [
            'title.required' => 'Il titolo è richiesto e deve essere lungo almeno 5 caratteri',
            'title.min' => 'Il titolo deve essere lungo almeno 5 caratteri',
            'title.max' => 'Il titolo non deve superare 100 caratteri',
            'thumb.required' => 'Immagine richiesta',
            'series.required' => 'La serie è richiesta',
            'price.required' => 'Il prezzo è richiesto',
        ];
    }
}
