<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
        return [
            'name' => ['required', Rule::unique('projects')->ignore($this->project)],
            'description' => ['nullable'],
            'dev_lang' => ['required'],
            'framework' => ['nullable'],
            'diff_lvl' => ['nullable'],
            'team' => ['nullable'],
            'link_git' => ['nullable'],
            'lvl_dif' => ['nullable']
        ];
    }
}
