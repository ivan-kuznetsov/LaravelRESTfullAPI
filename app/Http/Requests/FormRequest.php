<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class FormRequest extends \Illuminate\Foundation\Http\FormRequest
{

    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator))
          ->errorBag($this->errorBag)
          ->redirectTo($this->getRedirectUrl());
    }
}