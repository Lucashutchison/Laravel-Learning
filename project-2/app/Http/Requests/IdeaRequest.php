<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class IdeaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description'=> ['required', 'min:10'], 
        ];
    }

    public function messages()
    {
        return [ 
            'description.required'=>  'Youre no fun, Gimme an Idea!',
            'description.min'=>  'Cmon, your idea has to be longer than that! Gimme 10 Characters if you want me to save it.',
        ];
    }
}