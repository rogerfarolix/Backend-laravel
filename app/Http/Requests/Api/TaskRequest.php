<?php

namespace App\Http\Requests\Api;

// use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

class TaskRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        if(request()->file()){
            return [
                "title" => "required",
                "description"=>"required",
                'status' => 'required|in:non débuté,en cours,terminé',
                "published"=> "required|date",
            ];
        }
        return [
            "title" => "required",
            "description"=>"required",
            'status' => 'required|in:non débuté,en cours,terminé',
            "published"=> "required|date",
        ];
    }
}
