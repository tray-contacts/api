<?php

namespace App\Transformers;

use App\Models\Telephone;
use League\Fractal\TransformerAbstract;

class TelephoneTransformer extends TransformerAbstract
{
    /**
     * Turn this item object into a generic array
     *
     * @param Telephone $telephone
     * @return array
     */
    public function transform(Telephone $telephone)
    {
        return [
            'id'           => $telephone->id,
            'phone_number' => $telephone->phone_number,
        ];
    }
}

