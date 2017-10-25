<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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

    public function createRules()
    {
        return [
            'email' => 'required|email|max:50',
            'category' => 'required',
            'subject' => 'required|max:100',
            'message' => 'required|max:500'
        ];
    }

    public function updateRules()
    {
        return [
            'email' => 'required|email|max:50',
            'subject' => 'required|max:100',
            'message' => 'required|max:500'
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if( $this->is('message/create') ) {
            return $this->createRules();
        } elseif ( $this->is('message/update/*') ) {
            return $this->updateRules();
        }
    }
    /** */
    // public function rules()
    // {
    //     if( $this->isMethod('post') ) {
    //         return $this->createRules();
    //     } elseif ( $this->isMethod('patch') ) {
    //         return $this->updateRules();
    //     }
    // }

    public function messages()
    {
        return [
            'email.required' => 'Please provide an email where we can reach you.',
            'subject.required'  => 'Subject cannot be empty. Try tell us in less than 100 characters what this is about.',
        ];
    }
}
