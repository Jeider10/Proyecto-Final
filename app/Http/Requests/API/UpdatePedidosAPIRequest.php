<?php

namespace App\Http\Requests\API;

use App\Models\Pedidos;
use InfyOm\Generator\Request\APIRequest;

class UpdatePedidosAPIRequest extends APIRequest
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
        $rules = Pedidos::$rules;
        
        return $rules;
    }
}
