<?php

class UserController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return View::make('user.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('user.add');
    }

    /**
     * @param $id
     */
    public function userDataSpecific($id){
        $data = Data::all();
        $data->toarray();
        $offenses = array();
        foreach($data as $data){
            if($data -> rankNo === $id){
                $offenses[] = $data;
            }
        }
        return View::make('user.userSpecificData', compact('offenses'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $user = User::create(array(

            'rankNo' => Input::get('rankNo'),
            'fullName' => Input::get('fullName'),
            'email' => Input::get('email'),
            'password' =>md5(Input::get('password')),
            'station' => Input::get('station')


        ));
        return Redirect::to("userindex")->With("alert-success","New user added successful!");


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $user = User::find($id);
        $user->rankNo=Input::get('rankNo');
        $user->fullName=Input::get('fullName');
        $user->email=Input::get('email');
        $user->password=md5(Input::get('password'));
        $user->station=Input::get('station');
        $user->save();

        return Redirect::to("userindex")->With("alert-success","User edited successful!");




    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $user = User::find($id);
        return View::make('user.edit', compact('user'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return Redirect::to("userindex")->With("alert-success","User Deleted successful!");

    }


}
