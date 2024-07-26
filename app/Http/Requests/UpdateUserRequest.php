<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('user_access');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

            return [
                'name'    => [
                    'string',
                    'required',
                ],
                'email'   => [
                    'required',
                    'unique:users,email,' . request()->route('user')->id,
                ],
                'roles.*' => [
                    'integer',
                ],
                'roles'   => [
                    'required',
                    'array',
                ],
            ];

    }
}
