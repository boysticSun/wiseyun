<?php

namespace App\Http\Requests;

class NewsRequest extends Request
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
                    'news_category_id' => 'required|numeric',
                ];
            }
            // UPDATE
            case 'PUT':
            {
                return [
                    // UPDATE ROLES
                    'title'       => 'required|min:2',
                    'body'        => 'required|min:3',
                    'news_category_id' => 'required|numeric',
                ];
            }
            case 'PATCH':
            {
                return [
                    // UPDATE ROLES
                    'title'       => 'required|min:2',
                    'body'        => 'required|min:3',
                    'news_category_id' => 'required|numeric',
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
            'title.min' => '标题必须至少两个字符',
            'body.min' => '文章内容必须至少三个字符',
        ];
    }
}
