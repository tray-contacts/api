<?php 

namespace App\Repositories;
use App\Contracts\IContactRepository;
use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactRepository implements IContactRepository 
{
    /**
     * Gets all contacts from that user.
     *
     * @return mixed
     */
    public function all(){
        return Contacts::where('user_id', auth()->user()->id)
            ->paginate(env('MAX_ITEMS_PER_PAGE', 25));
    }

    /**
     * Gets a contact from that user based on his id.
     *
     * @param int $contact_id
     */
    public function get(int $contact_id){
        return Contacts::where('id', $contact_id)
            ->where('user_id', auth()->user()->id)
            ->firstOrFail();
    }

    /**
     * Storing logic.
     *
     * @param Request $request 
     * @param int $socials_id 
     *
     * @return \App\Models\Contact 
     */
    public function store(Request $contact_data, int $socials_id, int $user_id){
        $contact = new Contacts;
        $contact->name  = $contact_data->name; 
        $contact->email = $contact_data->email; 
        $contact->socials_id = $socials_id; // The last socials inserted is the one associated with the contact.
        $contact->user_id = $user_id;
        $contact->save();
        return $contact;
    }
}

?>
