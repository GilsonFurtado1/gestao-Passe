<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //Permite fazer validação
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         $user = $this->route('user');

        return [
             
             'email' =>'required|email',
             'password'=>'required'
        ];
    }

     public function messages(): array{
        return[
               'email.required' => "Campo email é obrigatório!",
               'email.email' => "Campo email tem de ser do tipo email!",
               'password.required' => "Campo password é obrigatório!",
        ];
    }
}
