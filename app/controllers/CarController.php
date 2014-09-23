<?php

class CarController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
//    {
        $cars = Car::all();
        $cars->toarray();
        return View::make('cars.index', compact('cars'));


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
            if($data->car->id){
                if($data->car->id === $id){
                $offenses[] = $data;
                }
            }
        }

        return View::make('cars.carDetails', compact('offenses'));
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
