<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Models\User;

class UserRequest extends FormRequest
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
        if($this->isMethod('post')) {
            return [
                'email' => 'required|email|unique:users',
                'password' => 'required|string|max:36|min:6',
            ];
        }

        if($this->isMethod('put')) {
            return [
                'email' => 'email|unique:users',
                'password' => 'string|max:36|min:6',
            ];
        }
    }

    protected function failedValidation(Validator $validator)
    {
      throw new HttpResponseException(response()->json($validator->errors(),422));
    }
}
