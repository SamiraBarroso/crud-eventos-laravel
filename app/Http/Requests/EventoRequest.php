<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome_evento'=>'required',
            'local_evento'=>'required',
            'data_evento'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'nome_evento.required' => 'Coloque o nome do evento.',
            'local_evento.required' => 'Coloque o local do evento.',
            'data_evento.required' => 'Coloque a data do evento.',
        ];
    }
}
