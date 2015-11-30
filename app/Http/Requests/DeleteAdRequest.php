<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Ad;

class DeleteAdRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $token = Request::get('token');

        return Ad::where('token', $token)->exists();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'security' => 'required|security_sentence'
        ];
    }
}
