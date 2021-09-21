<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !(auth()->check());
        // return ! Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'name' => 'required|string|max:25|unique:users',
            'email' => 'required|string|email|max:55|unique:users',
            'password' => ['required', 'confirmed', Password::defaults()],
            'password_confirmation' => 'required_with:password|same:password'
        ];
    }


    public function messages()
    {
        return [
            'fname.required' => "The first name field cannot be empty ",
            'lname.required' => "The last name field cannot be empty ",
            'email.required' => 'You can\'t leave the  :attribute field empty',
            'name.required' => 'You can\'t leave the user:attribute field empty',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            // 'password' => Hash::make($this->password),
        ]);
    }

    public function someShit()
    {
        // this was in the store method of my regUsercontroller
        // $user = User::create([
        //     'fname' => $request->fname,
        //     'lname' => $request->lname,
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
    }
}
