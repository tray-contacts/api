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
    protected $defaultIncludes = ['socials', 'telephone'];

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
        if($contact->socials === null)
            return null;

        return $this->item($contact->socials, new SocialTransformer); 
    }

    /**
     * Include socials 
     *
     * @param Contacts $contact
     * @return \League\Fractal\Resource\Item
     */
    public function includeTelephone(Contacts $contact){
        if($contact->telephone === null)
            return null;

        return $this->item($contact->telephone, new TelephoneTransformer); 
    }
}

