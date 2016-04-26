<?php

namespace App\Http\Requests;

class AuthRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'email' => 'required|email|max:220',
            'password' => 'required'
        ];
    }

    public function messages() {
        return [
            'required' => 'Vui lòng nhập :attribute',
        ];
    }

}
