<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UrafFormRequest extends FormRequest
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
            "first_name"       => 'required',
            "middle_name"      => 'required',
            "passport"         => 'required',
            "last_name"        => 'required',
            "gender"           => 'required',
            "occupation"       => 'required',
            "email_address"    => 'required|email',
            "contact_number"   => 'required',
            "location_ksa"     => 'required',
            "complain"         => 'required',
            "employer_name"    => 'required',
            "employer_contact" => 'required',
            "saudi_agency"     => 'required',
            "agency"           => 'required',
            "image1"           => 'image',
            "image2"           => 'image',
            "image3"           => 'image',
        ];
    }
}
