<?php

class ClientController extends BaseController {
  

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the clients
        $clients = Client::all();

        // load the view and pass the clients
        return View::make('clients.index')
            ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the create form (app/views/clients/create.blade.php)
        return View::make('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'client_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('clients/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $client = new client;
            $client->name       = Input::get('name');
            $client->email      = Input::get('email');
            $client->client_level = Input::get('client_level');
            $client->save();

            // redirect
            Session::flash('message', 'Successfully created client!');
            return Redirect::to('clients');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // get the client
        $client = Client::find($id);

        // show the view and pass the client to it
        return View::make('clients.show')
            ->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the client
        $client = Client::find($id);

        // show the edit form and pass the client
        return View::make('clients.edit')
            ->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'client_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('clients/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $client = Client::find($id);
            $client->name       = Input::get('name');
            $client->email      = Input::get('email');
            $client->client_level = Input::get('client_level');
            $client->save();

            // redirect
            Session::flash('message', 'Successfully updated client!');
            return Redirect::to('clients');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id)
    {
        // delete
        $client = Client::find($id);
        $client->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the client!');
        return Redirect::to('clients');
    }

}