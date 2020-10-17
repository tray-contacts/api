<?php

namespace App\Transformers;

use App\Models\Social;
use League\Fractal\TransformerAbstract;

class SocialTransformer extends TransformerAbstract
{
    /**
     * Turn this item object into a generic array
     *
     * @param Social $social
     * @return array
     */
    public function transform(Social $social)
    {
        return [
            'facebook' => $social->facebook,
            'linkedin' => $social->linkedin,
        ];
    }
}

