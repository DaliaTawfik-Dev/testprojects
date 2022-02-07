<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mmrequest extends FormRequest
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

                        "add_date"=>'required|date',
                        "item"=>'required|string|min:2',
                        "item_code"=>'required|numeric',
                        "quantity"=>'required|numeric',
                        "weight"=>'required|numeric',
                        "batch_number"=>'required|numeric',
                        "pr_data"=>'required|date',
                        "xpe_date"=>'required|date',
                        "notes"=>'nullable|min:2',

                    ];
                }
            case 'PATCH':
            case 'PUT': {
                    return [


                        "add_date"=>'nullable|date',
                        "item"=>'nullable|string|min:2',
                        "item_code"=>'nullable|numeric',
                        "quantity"=>'nullable|numeric',
                        "weight"=>'nullable|numeric',
                        "batch_number"=>'nullable|numeric',
                        "pr_data"=>'nullable|date',
                        "xpe_date"=>'nullable|date',
                        "notes"=>'nullable|min:2',

                    ];
                }
            default:
                break;
        }
    }
}
