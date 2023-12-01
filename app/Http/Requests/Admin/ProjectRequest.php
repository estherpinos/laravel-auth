<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title"=>"required",
            "description"=>"required"

        ];
    }

    public function messages(){
        return[
            "title.required" => "È obbligatorio",
            "description.required" => "È obbligatorio",


        ];
    }
}