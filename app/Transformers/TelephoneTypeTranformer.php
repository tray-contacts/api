<?php

namespace App\Transformers;

use App\Models\TelephoneType;
use League\Fractal\TransformerAbstract;

class TelephoneTransformer extends TransformerAbstract
{
    /**
     * Turn this item object into a generic array
     *
     * @param User $user
     * @return array
     */
    public function transform(Telephone $user)
    {
        return [
            'id'         => $user->id,
            'name'       => $user->name,
            'email'      => $user->email,
        ];
    }

    /**
     * Include telephone 
     *
     * @param User $user
     * @return \League\Fractal\Resource\Item
     */
    public function includeTelephoneType(Telephone $telephone){
        return $this->item($telephone->telephoneType, new TelephoneTransformer);
    }
}

