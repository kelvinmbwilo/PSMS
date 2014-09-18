<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    public function processRegion($offencequery,$value,$title=""){
        if($value != ""){
            $title.=" From ";
            foreach($value as $reg){
                $title .=  Region::find($reg)->region;
            }
            $title. " Regions ";
            $offencequery->whereIn('region_id', $value);
        }
        return array($offencequery,$title);
    }

}
