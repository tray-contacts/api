<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Transformers\ContactTransformer;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Show the form for creating a new resource.
     *
     * @return \Dingo\Api\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Dingo\Api\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Dingo\Api\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Dingo\Api\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Dingo\Api\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
