<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class gitoutRequest extends FormRequest
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

        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                    return [

                        "name" => 'required|min:2|max:255|string',
                        "price" => 'required|min:2|numeric',
                        "address"=> 'required|min:2|max:255|string',
                        "notes"=> 'nullable|min:2'

                    ];
                }
            case 'PATCH':
            case 'PUT': {
                    return [

                        "name" => 'nullable|min:2|max:255|string',
                        "price" => 'nullable|min:2|numeric',
                        "address"=> 'nullable|min:2|max:255|string',
                        "notes"=> 'nullable|min:2'

                    ];
                }
            default:
                break;
        }
    }
}
