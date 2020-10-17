<?php 

namespace App\Contracts;
use Illuminate\Http\Request;

interface IContactRepository
{

    /**
     * Gets all contacts from that user.
     *
     * @return mixed
     */
    function all();

    /**
     * Gets a contact from that user based on his id.
     *
     * @param int $contact_id
     * @return \App\Models\Contacts
     */
    function get(int $contact_id);

    /**
     * Storing logic.
     *
     * @param array $contact_data
     * @return \App\Models\Contacts
     */
    function store(array $contact_data);

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
