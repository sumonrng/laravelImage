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
    public function rules(): array
    {
        return [
            'user_name' =>'required|min:5|max:10|unique:users,user_name',
            'f_name' =>'required',
            'email' =>'required|email|unique:users,email',
            'photo'=>'required|mimes:jpg,png,gif|max:3000|dimensions:min_width:100,min_height:100,
                        max_width:1000,max_height:1000',
            'password' =>'required',
            'confirm_password' =>'required|same:password',
        ];
    }
    //protected $stopOnFirstFailure = true;
    public function messages(){
        return [
            'user_name.required'=>':attribute is required!',
            'email.required'=>':attribute is required!'
        ];
    }
    public function attributes(){
        return [
            'user_name'=> 'User Name',
            'email'=> 'Email Address'
        ];
    }
    protected $stopOnFirstFailure = true;
    protected function prepareForValidation(): void
    {
        $this->merge([
            'user_name'=>strtoupper($this->user_name),
            'email'=>strtolower($this->email)
        ]);
    }
}
