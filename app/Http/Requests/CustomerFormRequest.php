<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerFormRequest extends FormRequest
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
            'company' 		=> 'required',
		    'contact_first' => 'required',
		    'contact_last' 	=> 'required',
		    'street' 		=> 'required',
		    'city' 			=> 'required',
		    'state' 		=> 'required',
		    'zip' 			=> 'required',
		    'phone1' 		=> 'required',
		    'email' 		=> 'email',
		    'active' 		=> 'required'
        ];
    }
}
