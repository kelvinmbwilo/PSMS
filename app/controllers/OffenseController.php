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
     * @return mixed
     */
    public function bicycle(){
        $offenses = array();
        $off = Data::all();
        $off->toarray();

        foreach ($off as $moff){
            if($moff->Hasoffence->relating === 'bicycle/tricycle'){
                $offenses[] = $moff;
            }
        }
        return View::make('offenses.index', compact('offenses'));
    }



    public function vehicle(){
        $offenses = array();
        $off = Data::all();
        $off->toarray();
        foreach ($off as $moff){
            if($moff->Hasoffence->relating === 'motor vehicle'){
                $offenses[] = $moff;
            }
        }
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
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function listOffense()
    {
        //
        $list = Offence::all();
        $list->toarray();

        return View::make('offenses.listOfOffenses', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function officers()
    {
        //
        $officers = User::all();
        $officers->toarray();

        return View::make('offenses.officers');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function dataSpecific($id)
    {
        $data = Data::all();
        $data->toarray();
        $offenses = array();
        foreach ($data as $data){
            if($data->Hasoffence->id === $id){
                $offenses[] = $data;
            }
        }

        return View::make('offenses.specificOffenses', compact('offenses'));
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
