<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract
{

    public function transform($inputData)
    {
        return [
            "id"      => $inputData['id'],
            "name"    => $inputData['name'],
            "email"    => $inputData['email'],

        ];
    }
}
