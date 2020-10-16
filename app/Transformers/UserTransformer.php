<?php

namespace App\Transformers;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * list of resources possible to include
     *
     * @var array
     */
    protected $defaultIncludes = ['telephone'];

    /**
     * Turn this item object into a generic array
     *
     * @param User $user
     * @return array
     */
    public function transform(User $user)
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
    public function includeTelephone(User $user){
        return $this->item($user->telephone, new TelephoneTransformer);
    }
}

