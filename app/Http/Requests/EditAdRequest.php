<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use App\Ad;

class EditAdRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      $token = Request::get('token');

      $ad = Ad::where('token', $token)->exists();

      if ($ad === true)
      {
        return true;
      }

      return false;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $token = Request::get('token');
        $ad = Ad::where('token', $token)->first();

        return [
          'avatar' => 'image|max:2000',
          'email' => 'required|email|unique:ads,email,' . $ad->id,
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
