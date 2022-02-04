<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class RawRequest extends FormRequest
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

                        "customername" => 'required|min:2|max:255|string',
                        "price" => 'required|min:2|numeric',
                        "ordernumber"=> 'required|numeric',
                        "phone"=>'required|numeric',
                        "item"=>'required|min:2|string',
                        "date"=>'required|date',
                        "weight"=>'required|min:2|numeric',
                        "quantity"=>'required|min:2|numeric',
                        "total"=>'required|min:2|numeric',
                        "notes"=> 'nullable|min:2'

                    ];
                }
            case 'PATCH':
            case 'PUT': {
                    return [

                        "customername" => 'nullable|min:2|max:255|string',
                        "price" => 'nullable|min:2|numeric',
                        "ordernumber"=>'nullable|numeric',
                        "phone"=>'nullable|numeric',
                        "item"=>'nullable|min:2|string',
                        "date"=>'nullable|date',
                        "weight"=>'nullable|min:2|numeric',
                        "quantity"=>'nullable|min:2|numeric',
                        "total"=>'nullable|min:2|numeric',
                        "notes"=> 'nullable|min:2'

                    ];
                }
            default:
                break;
        }
    }

}
