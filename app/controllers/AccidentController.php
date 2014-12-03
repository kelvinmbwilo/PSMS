<?php

class AccidentController extends BaseController{
    
    
   
    public function index(){
        
        return View::make('accident.accident_registration');
    }
      public function acc_pass(){
        
        return View::make('accident.passenger');
    }
    
    public function vehicle_one(){
        
        
        return View::make('accident.vehicle_one');
    }
    
    public function vehicle_two(){
        
        
        return View::make('accident.vehicle_two');
    }
    
    
    public function accident_details(){
        
      
            $location = new Location;
            
            
            $location->date = Input::get('acc_date');
            $location->time = Input::get('acc_time');
            $location->area = Input::get('area');
            $location->district = Input::get('district');
            $location->region = Input::get('region');
            $location->road_name = Input::get('road_name');
            $location->road_number = Input::get('road_no');
            $location->road_kilometer_mark = Input::get('road_mark');
            $location->intersection_name = Input::get('inter_name');
            $location->intersection_number = Input::get('inter_no');
            $location->intersection_kilometer_mark = Input::get('inter_mark');
            
            $location -> save();
            
     
            return Redirect::to('vehicle_one');
        }
        
    
    
     public function vehicle_one_details(){
        
      
            
            $vehicle = new Car;
            $driver = new Driver;
            $insurance = new Insurance;
            $damage = new Damage;
            
            
            $driver -> surname = Input::get('surname');
            $driver -> other_name = Input::get('other_names');
            $driver -> physical_address = Input::get('pAdress');
            $driver -> address = Input::get('box');
            $driver -> national_id = Input::get('id');
            $driver -> phone_number = Input::get('d_phone');
            $driver -> gender = Input::get('gender');
            $driver -> DOB = Input::get('dob');
            $driver -> nationality = Input::get('nationality');
            $driver -> driving_license = Input::get('lisense');
            $driver -> occupation = Input::get('occupation');
            $driver -> drugs = Input::get('drugs');
            $driver -> alcohol_percent = Input::get('alcohol');
            $driver -> phone_use = Input::get('phone_use');
            $driver -> seat_belt_use =Input::get('seat');
            
            $driver ->save();
            
            
            $insurance -> name = Input::get('insurance_name');
            $insurance -> type = Input::get('insurance_type');
            $insurance -> phone_number = Input::get('insurance_phone');
            $insurance -> policy_number = Input::get('policy');
            $insurance -> expiration_date = Input::get('policy_period');
            $insurance -> estimated_repair_amount = Input::get('repair_costs');
            
            $insurance ->save();
            
                     
            $damage -> vehicle = Input::get('vehicle');
            $damage -> vehicle_total = Input::get('total');
            $damage -> infrastructure = Input::get('infrastructure');
            $damage -> rescue_cost = Input::get('cost');
            
            $damage ->save();
            
            
            //save vehicle details
            $vehicle -> type = Input::get('type'); 
            $vehicle -> registration_number = Input::get('reg_number');
            
            $vehicle -> save();
            
            
            return Redirect::to('vehicle_two');
        }
        
        
        
           public function vehicle_two_details(){
        
      
            
            $vehicle = new Car;
            $driver = new Driver;
            $insurance = new Insurance;
            $damage = new Damage;
            
            
            $driver -> surname = Input::get('surname');
            $driver -> other_name = Input::get('other_names');
            $driver -> physical_address = Input::get('pAdress');
            $driver -> address = Input::get('box');
            $driver -> national_id = Input::get('id');
            $driver -> phone_number = Input::get('d_phone');
            $driver -> gender = Input::get('gender');
            $driver -> DOB = Input::get('dob');
            $driver -> nationality = Input::get('nationality');
            $driver -> driving_license = Input::get('lisense');
            $driver -> occupation = Input::get('occupation');
            $driver -> drugs = Input::get('drugs');
            $driver -> alcohol_percent = Input::get('alcohol');
            $driver -> phone_use = Input::get('phone_use');
            $driver -> seat_belt_use =Input::get('seat');
            
            $driver ->save();
            
            
            $insurance -> name = Input::get('insurance_name');
            $insurance -> type = Input::get('insurance_type');
            $insurance -> phone_number = Input::get('insurance_phone');
            $insurance -> policy_number = Input::get('policy');
            $insurance -> expiration_date = Input::get('policy_period');
            $insurance -> estimated_repair_amount = Input::get('repair_costs');
            
            $insurance ->save();
            
                     
            $damage -> vehicle = Input::get('vehicle');
            $damage -> vehicle_total = Input::get('total');
            $damage -> infrastructure = Input::get('infrastructure');
            $damage -> rescue_cost = Input::get('cost');
            
            $damage ->save();
            
            
            //save vehicle details
            $vehicle -> type = Input::get('type'); 
            $vehicle -> registration_number = Input::get('reg_number');
            
            $vehicle -> save();
            
            
            return Redirect::to('passenger');
        }
        
         public function send_person(){
            
            $passenger = new Passenger;
            $witness = new Passenger;
            
            $passenger -> name = Input::get('pass_name');
            $passenger -> gender = Input::get('gender');
            $passenger -> DOB = Input::get('dob');
            $passenger -> physical_address = Input::get('address');
            $passenger -> address = Input::get('box');
            $passenger -> nationality = Input::get('nationalty');
            $passenger -> phone_number = Input::get('phone_number');
            $passenger -> drugs_alcohol_percent = Input::get('drugs');
            $passenger -> helmet_seat_belt_use = Input::get('seat');
            $passenger -> Status = Input::get('pass_status');
            $passenger -> casualty = Input::get('casualty');
            
            $passenger ->save();
            
            $witness -> name = Input::get('wit_name');
            $witness -> gender = Input::get('wit_gender');
            $witness -> DOB = Input::get('wit_dob');
            $witness -> physical_address = Input::get('wit_address');
            $witness -> address = Input::get('wit_box');
            $witness -> nationality = Input::get('wit_nationalty');
            $witness -> phone_number = Input::get('wit_phone_no');
            $witness -> drugs_alcohol_percent = "None";
            $witness -> helmet_seat_belt_use = "None";
            $witness -> Status = Input::get('wit_status');
            $witness -> casualty = "None";
            
            $witness ->save();
 
            return Redirect::to('dashboard');
        }
        
        
}