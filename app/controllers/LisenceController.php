<?php

class LisenceController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
//    {
        $lisence = Licence::all();
        $lisence->toarray();
        return View::make('lisence.index', compact('lisence'));


    }

    /**
     * @param $id
     * @return mixed
     */
    public function licenseSpecificData($id){

        $license= Licence::find($id);
        $offenses = $license->data;
        $offenses->toarray();

        return View::make('lisence.lisenseSpecificData', compact('offenses', 'license'));
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
