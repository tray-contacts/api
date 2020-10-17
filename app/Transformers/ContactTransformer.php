<?php

namespace App\Transformers;

use App\Models\Contacts;
use League\Fractal\TransformerAbstract;

class ContactTransformer extends TransformerAbstract
{
    /**
     * list of resources possible to include
     *
     * @var array
     */
    protected $defaultIncludes = ['socials'];

    /**
     * Turn this item object into a generic array
     *
     * @param Contacts $contact
     * @return array
     */
    public function transform(Contacts $contact)
    {
        return [
            'name' => $contact->name,
            'email' => $contact->email,
        ];
    }

    /**
     * Include socials 
     *
     * @param Contacts $contact
     * @return \League\Fractal\Resource\Item
     */
    public function includeSocials(Contacts $contact){
        return $this->item($contact->socials, new SocialTransformer); 
    }
}

