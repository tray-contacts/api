<?php 

namespace App\Repositories;
use App\Models\Telephone;
use App\Contracts\ITelephoneRepository;

class TelephoneRepository implements ITelephoneRepository
{
    /**
     * Storing logic.
     *
     * @param array $telephone_data
     * @return \App\Models\Contacts
     */
    public function store(array $telephone_data, int $contacts_id){
        if(sizeof($telephone_data) == 0)
            return null;

        $phone = new Telephone;
        $phone->phone_number = $telephone_data['phone_number'];
        $phone->phone_type_id = $telephone_data['phone_type_id'];
        $phone->contacts_id = $contacts_id;
        $phone->save();
        return $phone;
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
