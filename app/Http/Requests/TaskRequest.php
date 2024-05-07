<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
           'Title' => 'required |string',
           'Description' => 'required',
           'Assigned_To' => 'required',
           'Assigned_BY' => 'required'
        ];
    }
}
