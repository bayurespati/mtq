<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSopirRequest extends FormRequest
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
    public function rules($model): array
    {
        return [
            'nama' => 'required',
            'email' => 'required|email|unique:users,email,' . $model->user_id,
            'mobil_id' => 'required|unique:sopir,mobil_id,' . $model->id,
            'phone' => 'required',
        ];
    }
}