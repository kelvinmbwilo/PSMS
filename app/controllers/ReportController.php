<?php

class ReportController extends \BaseController{
    
    
    
    public function index(){
        
        return View::make('accident.accident_registration');
    }
      public function acc_pass(){
        
        return View::make('accident.passenger');
    }
    
    public function new_driver(){
        
        
        return View::make('accident.new_driver');
    }
    
    
}