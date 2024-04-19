<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
    public function messages()
    {
        return [
        'email' =>'Paštas yra privalomas ir turi būti nuo 3 iki 254 raidžių ilgumo',
        'name' =>'Vardas yra privalomas ir turi būti nuo 3 iki 35 raidžių ilgumo',
        'surname' =>'Pavardė yra privaloma ir turi būti nuo 3 iki 35 raidžių ilgumo',
        'city.required' => 'Miesto laukelis turi būti pažymėtas',
        'date.required' => 'Kortelės galiojimo data yra privaloma',
        'bank.required' => 'Kortelės numeris yra privalomas ',
        'date' => 'Neteisingas kortelės galiojimo datos formatas',
        'bank' => 'Neteisingas kortelės numerio formatas',
        'child.required' =>'1 field error',
        'teen.required' => '2 field error',
        'adult.required' =>'3 field error',
        'name.alpha' => 'Varde gali būti tik raidės',
        'surname.alpha'=>'Pavardėje gali būti tik raidės'
        ];
    }

    public function rules(): array
    {
        return [
            'email'=>'required|min:3|max:254',
            'name'=>'required|min:3|max:35|alpha',
            'surname'=>'required|min:3|max:35|alpha',
            'city'=>'required',
            'date'=>['required','regex:/^\d{2}-\d{2}+$/'],
            'bank'=>['required','regex:/^\d{4} \d{4} \d{4} \d{4}+$/'],
            'child'=>'required',
            'teen'=>'required',
            'adult'=>'required'
        ];
    }
}
