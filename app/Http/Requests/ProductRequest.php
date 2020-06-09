<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Model\Product;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {

        // $product = Product::find($this->products);

        // switch ($this->method()) {
        //     case 'GET':
        //     case 'DELETE':
        //         {
        //             return [];
        //         }
        //     case 'POST':
        //         {
        //             return [
        //                 'name' => 'required|max:255|unique:products',
        //                 'detail' => 'required',
        //                 'price' => 'required|max:10',
        //                 'stock' => 'required|max:6',
        //                 'discount' => 'required|max:2',
        //             ];
        //         }
        //     case 'PUT':
        //     case 'PATCH':
        //         {
        //             return [
        //                 'name' => 'required',
        //                 'detail' => 'required',
        //                 // 'price' => 'required',
        //                 // 'stock' => 'required',
        //                 'discount' => 'required',
        //             ];
        //         }
        //     default:break;
        // }

        return [
            'name' => 'required|max:255|unique:products',
            'description' => 'required',
            'price' => 'required|max:10',
            'stock' => 'required|max:6',
            'discount' => 'required|max:2',
        ];
    }
}
