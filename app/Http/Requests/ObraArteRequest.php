<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObraArteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'exposiciones' => 'required|string',
			'titulo' => 'required|string',
			'autor' => 'required|string',
			'estilo_artes_id' => 'required',
        ];
    }
}
