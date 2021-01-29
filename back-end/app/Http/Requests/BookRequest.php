<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Models\Book;

class BookRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            return [
                'title' => 'required|string|max:57|min:5',
                'author' => 'required|string|max:30|min:12',
                'price' => 'required|numeric'
            ];
        }

        if ($this->isMethod('put')) {
            return [
                'title' => 'string|max:57|min:5',
                'author' => 'string|max:30|min:12',
                'price' => 'numeric'
            ];
        }
    }

    protected function failedValidation(Validator $validator) {
           throw new HttpResponseException(response()->json($validator->errors(), 422));
        }
}
