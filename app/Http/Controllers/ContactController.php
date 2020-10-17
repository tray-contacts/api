<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\Social;
use App\Transformers\ContactTransformer;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\EditContactRequest;

use App\Contracts\IContactRepository;

class ContactController extends Controller
{
    private $contactRepository;
    /**
     * Create a new ContactController instance.
     *
     * @param IContactRepository $contactRepository
     * @return void
     */
    public function __construct(IContactRepository $contactRepository) {
        $this->contactRepository = $contactRepository;
    }

    /**
     * [GET] Display a listing of the resource.
     *
     * @return \Dingo\Api\Http\Response
     */
    public function index()
    {
        $contacts = Contacts::where('user_id', auth()->user()->id)
                        ->paginate(env('MAX_ITEMS_PER_PAGE', 25));

        return $this->response->paginator($contacts, new ContactTransformer);
    }

    /**
     * [POST] Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Dingo\Api\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        $socials = new Social;
        $socials->facebook = $request->facebook; 
        $socials->linkedin = $request->linkedin; 
        $socials->save();

        $contact = new Contacts;
        $contact->name  = $request->name; 
        $contact->email = $request->email; 
        $contact->socials_id = $socials->id; // The last socials inserted is the one associated with the contact.
        $contact->user_id = auth()->user()->id;
        $contact->save();

        return $this->response->item($contact, new ContactTransformer)->statusCode(201);
    }

    /**
     * [GET] Display the specified resource.
     *
     * @param  int  $id
     * @return \Dingo\Api\Http\Response
     */
    public function show($id)
    {
        $contact = Contacts::where('id', $id)
                    ->where('user_id', auth()->user()->id)->firstOrFail();
        return $this->response->item($contact, new ContactTransformer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Dingo\Api\Http\Response
     */
    public function update(EditContactRequest $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Dingo\Api\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
