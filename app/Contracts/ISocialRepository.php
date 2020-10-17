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
     * @return \App\Models\Contacts
     */
    function store(array $social_data);

    /**
     * Updating logic.
     *
     * @param array $social_data
     * @param int   $social_id
     * @return \App\Models\Social
     */
    function update(array $social_data, int $social_id);
}
?>
