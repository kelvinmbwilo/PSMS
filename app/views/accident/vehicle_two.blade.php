@extends('layout.master')

"section('header')


@stop
@section('title')
Report Accident
@stop

@section('breadcumbs')
<li>
    <a href="{{ url('home') }}">Dashboard</a>
</li>

<li class="active">Reports</li>

@stop

@section('contents')
 <!-- Main content -->

<div style="position: relative; left:40% ;">
<img src="{{asset('accident_includes/img/police_icon.png')}}"  alt="Police icon"/>

</div>
<hr />

<section class="content-header" >

<div class="row">

 <!-- form start -->
<form action="{{url('send_two')}}" method="post">

<!-- left column -->
<div class="col-md-6">

<div class="box-header">
 <h4 class="box-title">VEHICLE TWO</h4>
 <hr />

 </div><!-- /.box-header -->


               <div class="box-body">
               
                          
                          <div class="vehicle1">
                          
                           <!-- select -->
                                        <div class="form-group">
                                            <label>Vehicle Type</label>
                                            <select name="type" class="form-control">
                                                <option value="Private"> Private </option>
                                                <option value="Commercial">Commercial </option>
                                                <option value="Government">Government </option>
                                                <option value="Emergency">Emergency </option>
                                                <option value="Passenger Service Vehicle">Passenger Service Vehicle </option>
                                            </select>
                                        </div>
                                        
                                        
                                        
                           <div class="form-group">
                            <label for="reg_number">Registration Number</label>
                            <input required="required" name="reg_number" type="text" class="form-control" id="exampleInputPassword1" placeholder="Registration Number">
                            </div>
                            
                          </div>
                                      
                      
                                          <!-- select -->
                                        <div class="form-group">
                                            <label>VIOLATIONS </label>
                                            <select name="acc_type" class="form-control">
                                                <option value="single">Single vehicle accident</option>
                                                <option value="20">Accidents between vehicles driving same travel direction (2 or more vehicles)</option>
                                                <option value="30">Accidents between vehicles driving opposite travel direction (2 or more vehicles)</option>
                                                <option value="40">Accidents at a junction turning in same or opposite direction (2 or more vehicles)</option>
                                                <option value="50">Collision at a junction between two or more participants</option>
                                                <option value="60" >Accident w. parked vehicles</option>
                                                <option value="70">Pedestrian, animals and other accidents</option>
                                        
                                            </select>
                                        </div>
                                        
                                          <!-- select -->
                                        <div class="form-group">
                                            <label>VEHICLE DEFECTS</label>
                                            <select name="acc_type" class="form-control">
                                                <option value="single">Single vehicle accident</option>
                                                <option value="20">Accidents between vehicles driving same travel direction (2 or more vehicles)</option>
                                                <option value="30">Accidents between vehicles driving opposite travel direction (2 or more vehicles)</option>
                                                <option value="40">Accidents at a junction turning in same or opposite direction (2 or more vehicles)</option>
                                                <option value="50">Collision at a junction between two or more participants</option>
                                                <option value="60" >Accident w. parked vehicles</option>
                                                <option value="70">Pedestrian, animals and other accidents</option>
                                        
                                            </select>
                                        </div>
                                                       
               </div><!-- /.box-body -->

 <div class="box-header">
 
  <h4 class="box-title">DRIVER DETAILS</h4>
 <hr />

 </div><!-- /.box-header -->


<div class="box-body">
                                            <!-- Date mm/dd/yyyy -->
                            
                                      
                                           <div class="form-group">
                                            <label for="surname">Surname</label>
                                            <input required="required" name="surname" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Surname">
                                        </div>
                                        <div class="form-group">
                                            <label for="other_names">Other Names</label>
                                            <input required="required" name="other_names"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Other Names">
                                        </div>
                                           <div class="form-group">
                                            <label for="pAdress">Physical Address</label>
                                            <input required="required" name="pAdress" type="text" class="form-control" id="exampleInputPassword1" placeholder="Physical Address">
                                        </div>
                                           <div class="form-group">
                                            <label for="box">Address PO Box</label>
                                            <input required="required" name="box" type="text" class="form-control" id="exampleInputEmail1" placeholder="Address PO Box">
                                        </div>
                                        <div class="form-group">
                                            <label for="id">National ID</label>
                                            <input required="required" name="id" type="text" class="form-control" id="exampleInputPassword1" placeholder="National ID">
                                        </div>
                                            <div class="form-group">
                                            <label for="phone">Phone No </label>
                                            <input required="required" name="d_phone" type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                             <select name="gender" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                       <div class="form-group">
                                      <label>Date of Birth</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input required="required" name="dob" type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div>
                                           <div class="form-group">
                                            <label for="nationality">Nationality</label>
                                            <input required="required" name= "nationality" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nationality">
                                        </div>
                                        <div class="form-group">
                                            <label for="lisense">Driving License ID</label>
                                            <input required="required" name="lisense" type="text" class="form-control" id="exampleInputPassword1" placeholder="Driving License">
                                        </div>
                                         
                                          <div class="form-group">
                                            <label for="occupation">Occupation</label>
                                            <input required="required" name="occupation" type="text" class="form-control" id="exampleInputPassword1" placeholder="Occupation">
                                        </div>
                                
                                         
                                    </div><!-- /.box-body -->
                                    
                                   <!-- Inner Left --> 
                                        <div class="col-md-2" style="width: inherit;">
                                         <div class="form-group">
                                            <label for="drugs">Drugs</label>
                                            <select name="drugs" class="form-control">
                                                <option value="yes">YES</option>
                                                <option value="no"> NO</option>
                                            </select>
                                        </div>
                                         </div>
                                         
                                         <div class="col-md-2" style="width: inherit;">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Alcohol [%]</label>
                                            <select name="alcohol" class="form-control">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                                <option value="60" >60</option>
                                                <option value="70">70</option>
                                                <option value="80">80</option>
                                                <option value="90">90</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                          <!-- Inner Left -->
                                        <div class="col-md-2" style="width: inherit;">
                                        
                                         <div class="form-group">
                                            <label for="phoneUse">Phone Use</label>
                                            <select name="phone_use" class="form-control">
                                                <option value="yes">YES</option>
                                                <option value="no">NO</option>
                                            </select>
                                        </div>
                                        </div>
                                      
                                        <div class="col-md-2" style="width: inherit;">  
                                         <div class="form-group">
                                            <label for="seat">Seat Belt/ Helmet</label>
                                            
                                            <select name="seat" class="form-control">
                                                <option value="yes">YES</option>
                                                <option value="no">NO</option>
                                            </select>
                                        </div>
                                        
                                        </div>
                                         
                                
</div>


  <!-- right column -->
 

<div class="col-md-6">

 <div class="box-header">
 <h4 class="box-title">INSURANCE</h4>
 <hr />

 </div><!-- /.box-header -->
                                      <div class="col-md-3" style="width: inherit;" >
                                      
                                          <div class="form-group">
                                            <label for="insurance_name">Insurance Company Name</label>
                                            <input required="required" name="insurance_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Company Name">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="insurance_type">Type</label>
                                            <input required="required" name="insurance_type" type="text" class="form-control" id="exampleInputPassword1" placeholder="Insurance Type">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="insurance_phone">Phone Number</label>
                                            <input required="required" name="insurance_phone" type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
                                        </div>
                                        
                                      </div>
                                         
                                        <div class="col-md-3" style="width: inherit;">
                                        
                                         <div class="form-group">
                                            <label for="policy">Policy Number</label>
                                            <input required="required" name="policy" type="text" class="form-control" id="exampleInputEmail1" placeholder="Policy Number">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="policy_period">Policy Period</label>
                                            <input required="required" name="policy_period" type="text" class="form-control" id="exampleInputPassword1" placeholder="Policy Period">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="repair_costs">Estimated repair costs </label>
                                            <input required="required" name="repair_costs" type="text" class="form-control" id="exampleInputEmail1" placeholder="Estimated repair costs">
                                        </div>
                                        
                                        </div>
                                       

</div>
 
 
 <div class="col-md-6" style="margin-top: 10px;">

 <div class="box-header">
 <h4 class="box-title">DAMAGE</h4>
 <hr />

 </div><!-- /.box-header -->
                                <div class="col-md-3" style="width: inherit;">
                                     <div class="form-group">
                                            <label for="vehicle">vehicle</label>
                                            <input required="required" name="vehicle" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter vehicle">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="total">Vehicle Total</label>
                                            <input required="required" name="total" type="text" class="form-control" id="exampleInputPassword1" placeholder="Vehicle Total">
                                        </div>
                                </div>
                                      
                                        
                                        
                               <div class="col-md-3" style="width: inherit;">
                                
                                
                                <div class="form-group">
                                            <label for="infrastructure">Infrastructure</label>
                                            <input required="required" name="infrastructure" type="text" class="form-control" id="exampleInputPassword1" placeholder="Infrastructure">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="cost">Costs</label>
                                            <input required="required" name="cost" type="text" class="form-control" id="exampleInputEmail1" placeholder="Costs">
                                        </div>
                                      
  
  
                                </div>
                                
<div class="box-header">
 <h4 class="box-title">PASSENGER</h4>
 <hr />

 </div><!-- /.box-header -->                  

                                    <div class="box-body">
                                    
                                       <div class="form-group">
                                            <label for="exampleInputEmail1">Passenger Name</label>
                                            <input type="text" class="form-control" id="pass_name" placeholder="Enter email">
                                        </div>
                                            <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                      <label>Date Of Birth :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    
                                  
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">Physical Address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                           <div class="form-group">
                                            <label for="exampleInputPassword1">Nationalty / ID</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Casualty</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                      
                                         <div class="form-group">
                                            <label for="drugs">Drugs</label>
                                            <select name="drugs" class="form-control">
                                                <option value="yes">YES</option>
                                                <option value="no"> NO</option>
                                            </select>
                                        </div>
                                         
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Alcohol [%]</label>
                                            <select name="alcohol" class="form-control">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                                <option value="60" >60</option>
                                                <option value="70">70</option>
                                                <option value="80">80</option>
                                                <option value="90">90</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                        
                                      
                                      
                                      
                                      
                                         
                                    </div><!-- /.box-body -->
                                      


</div>

 <div class="pull-left" style="margin-left: 30px; margin-right: 30px;" >
<button type="submit" class="btn btn-primary">Save and Next</button>
</div>


</form>

</div>

</section><!-- /.content -->

                  
    @stop