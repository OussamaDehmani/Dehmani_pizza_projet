<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required',
            'prenom' => 'required',
            'login' => 'required|unique:clients,login',
            'imge' => 'required',
            'adresse' => 'required',
            'email' => 'required|email',
            'motdepasse' => 'required|min:8',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nom.required' => 'nom obligatoire',
            'prenom.required' => 'prenom obligatoire',
            'login.required' => 'login obligatoire',
            'login.unique' => 'login déjà utilisé',
            'adresse.required' => 'adresse obligatoire',
            'email.email' => 'invalide adresse mail ',
            'motdepasse.required' => 'password obligatoire',
            'motdepasse.min' => 'password non respecté',
            'imge.required' => 'image obligatoire',
        ];
    }
}
