<?php

namespace App\Transformers;

use App\Models\Contacts;
use League\Fractal\TransformerAbstract;

class ContactTransformer extends TransformerAbstract
{

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
            'socials' => [
                'facebook' => $contact->socials->facebook,
                'linkedin' => $contact->socials->linkedin,
            ],
            'telephone' => [
                'phone_number' => $contact->telephone->phone_number,
                'phone_type' => $contact->telephone->phoneType->description,
            ],
        ];
    }
}

