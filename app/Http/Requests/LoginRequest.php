<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
     * @OA\Schema(
     *      schema="LoginRequest",
     *      title="LoginRequest",
     *      description="LoginRequest",
     *      type="object",
     *      required={"email","password"},
     *      @OA\Property(
     *           property="email",
     *           type="string",
     *           description="email",
     *           example="test@elek.com"
     *      ),
     *      @OA\Property(
     *           property="password",
     *           type="string",
     *           description="password",
     *           example="1234"
     *      )
     *  )
     */
class LoginRequest extends FormRequest
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
        return [
            'email' => 'required|email',
            'password' => 'required|string'
        ];
    }
}