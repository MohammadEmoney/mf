<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreProductAttributeRequest extends FormRequest
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
            'name' => 'required|string'
        ];
    }

    public function validated($key = null, $default = null)
    {
        $data = [];

        if(Str::contains($this->name, '،')) {
            foreach(array_map('trim', explode('،', $this->name)) as $name){
                if(!is_null($name) && $name!= '')
                    $data[] = ['name' => $name];
            }

        }else{
            $data[] = ['name' => $this->name];
        }
        return $data;
    }
}
