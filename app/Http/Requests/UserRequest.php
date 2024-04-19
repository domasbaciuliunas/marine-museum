<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

    public function messages(): array
    {
        return [
            'name' =>'Vardas yra privalomas ir turi būti nuo 3 iki 35 raidžių ilgumo',
            'email' =>'Paštas yra privalomas ir turi būti nuo 3 iki 254 raidžių ilgumo',
            'password.required' => 'Slaptažods yra privalomas',
            'password'=> 'slaptažodis gali būti nuo 5 iki 35 simbolių ilgumo',
            'name.alpha' => 'Varde gali būti tik raidės'
        ];
    }

    public function rules(): array
    {
        return [
            'name'=>'required|min:3|max:35|alpha',
            'email'=>'required|min:3|max:254',
            'password'=>'required|min:5|max:35'
        ];
    }
}
