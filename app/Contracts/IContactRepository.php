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
     * @param mixed $contact_data
     * @param int   $socials_id
     * @param int   $user_id
     * @return \App\Models\Contacts
     */
    function store(Request $contact_data, int $socials_id, int $user_id);
}
?>
