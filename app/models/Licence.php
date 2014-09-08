<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Licence extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'psms_licence';
    protected  $guarded = array('$id');

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */


    public function owner()
    {
        return $this->belongsTo('Data', 'licenceNo' , 'id');
    }


}
