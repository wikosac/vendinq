<?php

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfilRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            "name" => ['required', 'string', 'min:4'],
            "name" => ['required', 'email'],
            "password" => ['required', 'confirmed']
        ];
    }
}