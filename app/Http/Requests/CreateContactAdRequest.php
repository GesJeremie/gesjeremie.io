<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Config;
use Url;

class CreateContactAdRequest extends Request
{

    protected $dontFlash = ['password', 'password_confirmation', 'captcha', 'captcha_id'];

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
        // Fetch captcha id
        $captcha_id = Request::get('captcha_id');

        // Fetch solution of captcha
        $solution = Config::get('bsb.captchas')[$captcha_id][1];

        $rules = [
          'email' => 'required|email',
          'phone' => 'required',
          'message' => 'required|min:50',
          'captcha' => 'required|in:' . $solution . ',' . strtolower($solution) . ',' . strtoupper($solution) . ',' . ucfirst(strtolower($solution))
        ];

        // Remove captcha system for phpunit (TDD)
        if (\App::environment('testing'))
        {
            $rules['captcha'] = '';
        }

        return $rules;

    }
}
