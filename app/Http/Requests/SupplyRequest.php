<?php

namespace App\Http\Requests;

class SupplyRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            {
                return [
                    // CREATE ROLES
                    'title'       => 'required|min:2',
                    'body'        => 'required|min:3',
                    'typeids'     => 'required',
                ];
            }
            // UPDATE
            case 'PUT':
            {
                return [
                    // UPDATE ROLES
                    'title'       => 'required|min:2',
                    'body'        => 'required|min:3',
                    'typeids'     => 'required',
                ];
            }
            case 'PATCH':
            {
                return [
                    // UPDATE ROLES
                    'title'       => 'required|min:2',
                    'body'        => 'required|min:3',
                    'typeids'     => 'required',
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            }
        }
    }

    public function messages()
    {
        return [
            // Validation messages
            'title.required' => '标题必填',
            'body.required' => '内容必填',
            'title.min' => '标题必须至少两个字符',
            'body.min' => '内容必须至少三个字符',
            'typeids.required'  =>  '请至少选择一项分类',
        ];
    }
}
