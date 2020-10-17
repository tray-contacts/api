<?php 

namespace App\Contracts;

interface ISocialRepository 
{
    /**
     * Gets the socials from the contact.
     *
     * @param int $social_id
     * @return \App\Models\Social
     */
    function get(int $social_id);

    /**
     * Storing logic.
     *
     * @param array $social_data
     * @param int   $contact_id
     * @return \App\Models\Contacts
     */
    function store(array $social_data, int $contacts_id);

    /**
     * Updating logic.
     *
     * @param array $social_data
     * @param int   $social_id
     * @return \App\Models\Social
     */
    function update(array $social_data, int $social_id);

    /**
     * Deletion logic.
     *
     * @param int $social_id
     * @return \App\Models\Social
     */
    function delete(int $social_id);
}
?>
