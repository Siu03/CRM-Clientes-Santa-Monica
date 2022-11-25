<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'clients_name' => [
                'required'
            ],
            'clients_email' => [
                'required',
                'unique:clients,clients_email'
            ],
            'clients_phone_number' => [
                'required',
            ],
            'clients_message' => [
                'required',
            ],
        ];
    }
}
