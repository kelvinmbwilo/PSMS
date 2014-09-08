<?php

class Data extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'psms_data';

    protected  $guarded = array('$id');

    public function user()
    {
        return $this->hasMany('Users', 'rankNo', 'id');

    }

    public function licence(){
        return $this->hasMany('Licence', 'plateNo', 'id');
    }

    public function offence(){
        return $this->hasMany('Offence', 'offenceNature', 'id');
    }

    public function car(){
        return $this->belongsTo('Car', 'plateNo', 'id');
    }


}
