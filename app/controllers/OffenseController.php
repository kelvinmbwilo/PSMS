<?php

class OffenseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $offenses = Data::all();
        $offenses->toarray();
        return View::make('offenses.index', compact('offenses'));

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

    /**
     * Store a newly created offense
     * @return mixed
     */
    public function store()
	{
       $ingreedients =  Array();
       $ingreedients = Input::get('ingredients');
        if (count($ingreedients) === 0){
            return Redirect::back()->with('message', 'Offense Not Selected!!');
        }
        else{

        for ($i=0; $i<sizeof($ingreedients); $i++){

            $val = $ingreedients[$i];
            $instanse = Offence::find($val);

            Data::create(array(
                'offence' => $instanse->nature,
                'plateNumber' => Input::get('plateno'),
                'rankNo' => Auth::user()->rankNo,
                'license' => Input::get('license'),
                'commit' => Input::get('commit'),
                'amount' => $instanse->amount
            ));

        }

        return Redirect::To('offenses');

        }

    }

    public function addOffense()
    {
        $offenseList =  Offence::all();
        $offenseList -> toarray();
        return View::make('offenses.addOffense' , compact('offenseList'));
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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
