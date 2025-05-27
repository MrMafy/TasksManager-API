<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if ($this->isMethod('post')) {
            return [
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'status' => 'in:в ожидании,в работе,на паузе,завершено',
            ];
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            return [
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'status' => 'in:в ожидании,в работе,на паузе,завершено',
            ];
        }

        return [];
    }
}
