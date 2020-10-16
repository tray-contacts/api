<?php

namespace App\Transformers;

use App\Models\Telephone;
use League\Fractal\TransformerAbstract;

class TelephoneTransformer extends TransformerAbstract
{

    /**
     * list of resources possible to include
     *
     * @var array
     */
    protected $defaultincludes = ['telephoneType'];

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

