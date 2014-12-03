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
<section class="content-header">


<hr />

<div class="row">
<!-- left column -->


 <!-- form start -->
<form action="{{url('send_accident')}}" method="post">


<!-- Left Column -->

<div class="col-md-6">
      
      <!-- general form elements -->
 <div class="form-group">
<label for="reg_number">Accident Registration Number</label>
<input type="text" required="required" class="form-control" id="reg_number" placeholder="Accident Registration Number">
</div>

 <div class="box-header">
 <h4 class="box-title">TIME AND LOCATION</h4>
 <hr />

 </div><!-- /.box-header -->

<div class="box-body">
                               
                          <!-- Date mm/dd/yyyy -->
                            <div class="form-group">
                                      <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input name="acc_date" type="text"  required="required" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div>
                                      <!-- time Picker -->
                                    <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                            <label>Time picker:</label>
                                            <div class="input-group">
                                                <input name="acc_time" required="required" type="text" class="form-control timepicker"/>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                    </div>
                              
                               
                                 <div class="col-md-3">      
                                      
                                           <div class="form-group">
                                            <label for="area">Area Name</label>
                                            <input name="area" required="required" type="text" class="form-control" id="exampleInputEmail1" placeholder="Area Name">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="district">District</label>
                                            <input name="district" required="required" type="text" class="form-control" id="exampleInputPassword1" placeholder="District">
                                        </div>
                                        
                                           <div class="form-group">
                                            <label for="region">City/Region</label>
                                            <input name="region" required="required" type="text" class="form-control" id="exampleInputPassword1" placeholder="Region/City">     
                                            </div>
                                            
                          </div>                  
                                                              
                                          
                                 
                                         <!-- Inner Column-->
                                                       
                               <div class="col-md-3" style="width: inherit;">
                              
                              <div class="form-group">
                                            <label for="road_name">Road Name</label>
                                            <input name="road_name"required="required" type="text" class="form-control" id="exampleInputEmail1" placeholder=" Road Name">
                                   
                                        </div>
                                           <div class="form-group">
                                            <label for="road_no">Road Number</label>
                                            <input  name="road_no" required="required" type="text" class="form-control" id="exampleInputPassword1" placeholder=" Road Number">
                                            </div>
                             
                                       
                                        
                                            <div class="form-group">
                                            <label for="road_mark">Road Kilometer (mark) </label>
                                            <input name="road_mark" type="text" class="form-control" id="exampleInputEmail1" placeholder=" Road Kilometer (mark) ">
                                            </div>
                             
                                </div>
                                
                                 <div class="col-md-3" style="width: auto;">
                                        <div class="form-group">
                                            <label for="inter_name">Intersection Name</label>
                                            <input name="inter_name" required="required" type="text" class="form-control" id="exampleInputPassword1" placeholder=" Intersection Name">
                                        </div>
                                      
                                           <div class="form-group">
                                            <label for="inter_no">Intersection Number</label>
                                            <input name="inter_no" required="required" type="text" class="form-control" id="exampleInputEmail1" placeholder=" Intersection Number">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="inter_mark">Intersection Kilometer (mark)</label>
                                            <input name="inter_mark" required="required" type="text" class="form-control" id="exampleInputPassword1" placeholder=" Intersection Kilometer (mark) ">
                                        </div>
                                        
                                 </div>
                               

</div>

</div>
<div class="col-md-6" style="margin-top: 65px;">
 
 <div class="box-header">
 <h4 class="box-title">ACCIDENT TYPE CLASSIFICATION</h4>
 <hr />

 </div><!-- /.box-header -->

<div class="box-body">
                     
                                         <!-- select -->
                                        <div class="form-group">
                                            <label>ACCIDENT TYPE</label>
                                            <select name="acc_type" class="form-control">
                                                <option value="single">Single vehicle accident</option>
                                                <option value="same travel direction ">Accidents between vehicles driving same travel direction (2 or more vehicles)</option>
                                                <option value="opposite travel direction">Accidents between vehicles driving opposite travel direction (2 or more vehicles)</option>
                                                <option value="40">Accidents at a junction turning in same or opposite direction (2 or more vehicles)</option>
                                                <option value="Collision at a junction ">Collision at a junction between two or more participants</option>
                                                <option value="parked vehicles" >Accident with parked vehicles</option>
                                                <option value="other accidents">Pedestrian, animals and other accidents</option>
                                        
                                            </select>
                                        </div>
                 

                               <!-- select -->
                                        <div class="form-group">
                                            <label>JUNCTION TYPE</label>
                                            <select name="junc_type" class="form-control">
                                                <option value="Crossing Roads">Crossing Roads</option>
                                                <option value="Round About"></option></option>
                                                <option value="T Junction">T Junction</option>
                                                <option value="Y Junction">Y Junction</option>
                                                <option value="Staggered Junction">Staggered Junction</option>
                                                <option value="Rail Cros no Sign" >Rail Cros no Sign</option>
                                                <option value="Pedestrian Cross">Pedestrian Cross</option>
                                                <option value="None">None</option>
                                            </select>
                                        </div>
                                     
                                     
                                      <!-- select -->
                                        <div class="form-group">
                                            <label>JUNCTION CONTROL</label>
                                            <select name="junc_control" class="form-control">
                                                <option value="Uncontrolled">Uncontrolled</option>
                                                <option value="Police Officer">Police Officer</option>
                                                <option value="Traffic Signs"></option>
                                                <option value="Traffic Light">Traffic Light</option>
                                                <option value="Flashing Signal" >Flashing Signal</option>
                                                <option value="None">None</option>
                                        
                                            </select>
                                        </div> 
                                       
                                         <!-- select -->
                                        <div class="form-group">
                                            <label>ROAD TYPE</label>
                                            <select name="road_type" class="form-control">
                                                <option value="Trunk ">Trunk Roads</option>
                                                <option value="Regional ">Regional Roads</option>
                                                <option value="District ">District Roads)</option>
                                                <option value="City ">City Roads</option>
                                                <option value="Rural ">Rural Roads</option>
                                                <option value="Bridge" >Bridge</option>
                                                <option value="70">Pedestrian, animals and other accidents</option>
                                        
                                            </select>
                                        </div>
                                   
                                   <h5>STREET CONDITION</h5>
                                   <div class="col-md-3" >
                                   <!-- select -->
                                        <div class="form-group">
                                            <label>ROAD SURFACE</label>
                                            <select name="road_surface" class="form-control">
                                                <option value="Dry">Dry</option>
                                                <option value="Wet">Wet</option>
                                                <option value="Rain">Rain</option>
                                                <option value="Water">Water</option>
                                                <option value="Muddy">Muddy</option>
                                                <option value="Debris" >Debris</option>
                                            </select>
                                        </div>
                                   </div>  
                                   
                                      <div class="col-md-3" >
                                   <!-- select -->
                                        <div class="form-group">
                                            <label>LIGHT</label>
                                            <select name="weather" class="form-control">
                                                <option value="Day">Day</option>
                                                <option value="Twilight">Twilight</option>
                                                <option value="Night">Night</option>
                                                <option value="Smoke">Smoke</option> 
                                                <option value="Street Light">Street Light</option>
                                            </select>
                                        </div>
                                   </div>
                                   
                                      <div class="col-md-3" >
                                   <!-- select -->
                                        <div class="form-group">
                                            <label>WEATHER</label>
                                            <select name="light" class="form-control">
                                               <option value="Clear">Clear</option>
                                                <option value="Cloudy">Cloudy</option>
                                                <option value="Storm">Storm</option>
                                                <option value="Fog">Fog</option> 
                                            </select>
                                        </div>
                                   </div>
                                   
                                       <div class="col-md-3" >
                                   <!-- select -->
                                        <div class="form-group">
                                            <label>ROAD CONTROL </label>
                                            <select name="road_control" class="form-control">
                                                <option value="Traffic Signal">Traffic Signal</option>
                                                <option value="No Traffic Signal">No Traffic Signal</option>
                                                <option value="Lane Marking">Lane Marking</option>
                                                <option value="Speed Limit/Sign">Speed Limit/Sign</option> 
                                            </select>
                                        </div>
                                   </div>
                                     

 </div><!-- /.box-header -->                   
                       
</div>
                               
                            
 <div class="pull-left" style="margin-left:20px; margin-top:20px;" >
<button type="submit" class="btn btn-primary">Save and Next</button>
</div>                                         
      
</div>

</form>

</div>


</section><!-- /.content -->
                  
    @stop