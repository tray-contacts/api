<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $contacts = $this->contactRepository->all();

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

        $contact = $this->contactRepository->store($request->only(['name', 'email']), $socials->id);
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
        $contact = $this->contactRepository->get($id);
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
        $contact = $this->contactRepository->update($request->only(['name', 'email']), $id);
        return $this->response->item($contact, new ContactTransformer);
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
