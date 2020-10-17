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
     * @return \App\Models\Telephone
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
     * @return \App\Models\Telephone
     */
    public function update(array $telephone_data){
        $phone = Telephone::findOrFail($telephone_data['id']);
        $phone->update($telephone_data);
        return $phone;
    }

    /**
     * Deletion logic.
     *
     * @param int $social_id
     * @return \App\Models\Telephone
     */
    public function delete(int $id){
        $phone = Telephone::findOrFail($id); 
        $phone->delete();
        return $phone;
    }

}

?>
