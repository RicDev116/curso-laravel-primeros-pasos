<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class PutRequest extends FormRequest
{

    public function prepareForValidation()
    {
        $this->merge([
            // 'slug' => Str::slug($this->title)

            //OTRAS FORMAS
            // 'slug' => Str::of($this->title)->slug()->append('-adicional'),
            'slug' => str($this->title)->slug()
        ]);
        
    }



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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        // dd($this->route("post")->id);
        return [
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500|unique:posts,slug,'.$this->route("post")->id,
            'content' => 'required|min:10',
            'category_id' => 'required|integer',
            'description' => 'required|min:10', 
            'posted' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:10240',
        ];
    }
}
