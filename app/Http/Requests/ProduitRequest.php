<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
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
            'prix' => 'required',
            'date_debut' => 'before:date_fin',
            'date_fin' => 'after:date_debut'
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
            'nom.require' => 'le nom est Obligatoire',
            //'nom.unique' => 'le nom est déjà utilisé',
            'date_fin.after' => 'la date fin doit être après date debut',
           'prix.required' => 'le prix est Obligatoire',
           // 'date_debut.required' => 'la date debut est Obligatoire',
            'date_debut.before' => 'la date début doit être avant date fin'
        ];
    }
}
