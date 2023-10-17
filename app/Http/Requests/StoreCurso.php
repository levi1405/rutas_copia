<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre'=>'required|max:50',
            'slug'=>'required|unique:cursos',
            'descripcion'=>['required','min:50'],
            'categoria'=>'required'
        ];
    }
    public function messages():array{
        return[
            'descripcion.required'=>'La Descripcion del curso es Obligatoria'
        ];
    }
    public function attributes():array{
        return[
            'nombre'=>'Nombre del curso',
        ];
    }
}
