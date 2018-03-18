<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request
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
            //
            'date' => 'required',
            'title' => 'required',
            'description' => 'required',
            'how_to_help' => 'nullable',
            'phone_number' => 'nullable',
            'website' => 'nullable',
            'category_id' => 'required',
            'organization_id' => 'required',
            'type_id' => 'required'

        ];
    }
}
