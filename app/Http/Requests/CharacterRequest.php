<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
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
            'name' => 'required|min:2|max:100|',
            'height' => 'required|numeric|min:0.01|max:100.00|',
            'weight' => 'required|numeric|min:0.01|max:100.00|',
            'background' => 'required|min:2|max:100|',
            'armor_class' => 'required|numeric|min:1|max:20|',
            'for' => 'required|numeric|min:1|max:20|',
            'des' => 'required|numeric|min:1|max:20|',
            'cos' => 'required|numeric|min:1|max:20|',
            'int' => 'required|numeric|min:1|max:20|',
            'sag' => 'required|numeric|min:1|max:20|',
            'car' => 'required|numeric|min:1|max:20|',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least :min characters',
            'name.max' => 'Name must be at most :max characters',
            'height.required' => 'Height is required',
            'height.numeric' => 'Height must be a number',
            'height.min' => 'Height must be at least :min',
            'height.max' => 'Height must be at most :max',
            'weight.required' => 'Weight is required',
            'weight.numeric' => 'Weight must be a number',
            'weight.min' => 'Weight must be at least :min',
            'weight.max' => 'Weight must be at most :max',
            'background.required' => 'Background is required',
            'background.min' => 'Background must be at least :min characters',
            'background.max' => 'Background must be at most :max characters',
            'armor_class.required' => 'Armor class is required',
            'armor_class.numeric' => 'Armor class must be a number',
            'armor_class.min' => 'Armor class must be at least :min',
            'armor_class.max' => 'Armor class must be at most :max',
            'for.required' => 'For is required',
            'for.numeric' => 'For must be a number',
            'for.min' => 'For must be at least :min',
            'for.max' => 'For must be at most :max',
            'des.required' => 'Des is required',
            'des.numeric' => 'Des must be a number',
            'des.min' => 'Des must be at least :min',
            'des.max' => 'Des must be at most :max',
            'cos.required' => 'Cos is required',
            'cos.numeric' => 'Cos must be a number',
            'cos.min' => 'Cos must be at least :min',
            'cos.max' => 'Cos must be at most :max',
            'int.required' => 'Int is required',
            'int.numeric' => 'Int must be a number',
            'int.min' => 'Int must be at least :min',
            'int.max' => 'Int must be at most :max',
            'sag.required' => 'Sag is required',
            'sag.numeric' => 'Sag must be a number',
            'sag.min' => 'Sag must be at least :min',
            'sag.max' => 'Sag must be at most :max',
            'car.required' => 'Car is required',
            'car.numeric' => 'Car must be a number',
            'car.min' => 'Car must be at least :min',
            'car.max' => 'Car must be at most :max',
        ];
    }
}
