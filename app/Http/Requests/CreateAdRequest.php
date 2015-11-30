<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAdRequest extends Request
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
          'avatar' => 'required|image|max:2000',
          'email' => 'required|email|unique:ads,email',
          'firstname' => 'required',
          'lastname' => 'required',
          'day' => 'required',
          'month' => 'required',
          'year' => 'required',
          'content' => 'required|min:280',
          'phone' => 'required|phoneFrench'
        ];
    }
}
