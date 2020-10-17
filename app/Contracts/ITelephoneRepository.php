<?php 

namespace App\Contracts;
use Illuminate\Http\Request;

interface ITelephoneRepository 
{
    /**
     * Storing logic.
     *
     * @param array $contact_data
     * @return \App\Models\Contacts
     */
    function store(array $telephone_data, int $contacts_id);

    /**
     * Updating logic.
     *
     * @param array $contact_data
     * @param int   $contact_id
     * @return \App\Models\Contacts
     */
    function update(array $contact_data, int $contact_id);

    /**
     * Deletion logic.
     *
     * @param int $contact_id
     * @return \App\Models\Contacts
     */
    function delete(int $contact_id);
}
?>
