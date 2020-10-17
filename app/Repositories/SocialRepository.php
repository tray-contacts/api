<?php 

namespace App\Repositories;
use App\Models\Social;
use App\Contracts\ISocialRepository;

    class SocialRepository implements ISocialRepository 
{
    /**
     * Gets the socials from the contact.
     *
     * @param int $social_id
     * @return \App\Models\Social
     */
    public function get(int $social_id){
        return Social::findOrFail($social_id);
    }

    /**
     * Storing logic.
     *
     * @param array $social_data
     * @param int   $contacts_id
     * @return \App\Models\Contacts
     */
    public function store(array $social_data, int $contacts_id){
        if(sizeof($social_data) == 0)
            return null;

        $social = new Social;
        if(isset($social_data['facebook']))
            $social->facebook = $social_data['facebook']; 
        if(isset($social_data['linkedin']))
            $social->linkedin = $social_data['linkedin']; 
        $social->contacts_id = $contacts_id;
        $social->save();
        return $social;
    }

    /**
     * Updating logic.
     *
     * @param array $social_data
     * @param int   $social_id
     * @return \App\Models\Social
     */
    public function update(array $social_data, int $social_id){
        $social = Social::findOrFail($social_id);
        $social->update($social_data);
        return $social;
    }

    /**
     * Deletion logic.
     *
     * @param int $social_id
     * @return \App\Models\Social
     */
    public function delete(int $id){
        $social = Social::findOrFail($id); 
        $social->delete();
        return $social;
    }

}

?>
