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

<section class="content-header" >
      
<h5 style="margin-left: 10px;">ENTER PASSENGER AND PEDESTRIANS DETAILS</h5>
<hr />

<div class="row">

                                    
<form action="{{url('send_pass')}}" method="post"> 

  <!--left column -->

<div class="col-md-6" style="margin-top: 10px;">

 <div class="box-header">
 <h4 class="box-title">PEDESTRIAN</h4>
 <hr />

 </div><!-- /.box-header -->


                                    <div class="box-body">
                                   
                                       <div class="form-group">
                                            <label for="name">Pedestrian Name</label>
                                            <input type="text" name="pass_name" required="required" class="form-control" id="pass_name" placeholder="Enter Name">
                                        </div>
                                        
                                          <div class="form-group">
                                            <label for="gender">Gender</label>
                                             <select name="gender" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        
                                            <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                      <label>Date Of Birth :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="dob" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    
                                  
                                           <div class="form-group">
                                            <label for="Physical Address">Physical Address</label>
                                            <input type="text" name="address" required="required" class="form-control" id="pAddress" placeholder="Physical Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="box">Address</label>
                                            <input type="text" name="box" required="required" class="form-control" id="exampleInputPassword1" placeholder="Address">
                                        </div>
                                           <div class="form-group">
                                            <label for="nationalty">Nationalty / ID</label>
                                            <input type="text" required="required" name="nationalty" class="form-control" id="exampleInputPassword1" placeholder="Nationalty">
                                        </div>
                                           <div class="form-group">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="text" required="required" name="phone_number" class="form-control" id="Phone_number" placeholder="Phone Number">
                                        </div>
                                        
                                            <input type="text" name="pass_status" value="Passenger" style="visibility: hidden;" class="form-control" id="Phone_number" placeholder="Status ">
                                     
                                        
                                        <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="drugs">Drugs</label>
                                            <select name="drugs" class="form-control">
                                                <option value="yes">YES</option>
                                                <option value="no"> NO</option>
                                            </select>
                                        </div>
                                       </div>   
                                       
                                       <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="drugs">Seat Belt</label>
                                            <select name="seat" class="form-control">
                                                <option value="yes">YES</option>
                                                <option value="no"> NO</option>
                                            </select>
                                        </div>
                                       </div> 
                                       
                                       <div class="col-md-3">
                           <!-- select -->
                                        <div class="form-group">
                                            <label>Casualty</label>
                                            <select name="casualty" class="form-control">
                                                <option value="Light"> Light </option>
                                                <option value="Severe">Severe </option>
                                                <option value="Fatal">Fatal </option>
                                            </select>
                                        </div>
                                       </div>   
                                       
                                    </div><!-- /.box-body -->


 
</div>

  <!--Right column -->

<div class="col-md-6" style="margin-top: 10px;">

 <div class="box-header">
 <h4 class="box-title">WITNESS</h4>
 <hr />

 </div><!-- /.box-header -->


                                    <div class="box-body">
                                    
                                       <div class="form-group">
                                            <label for="exampleInputEmail1">Witness Name</label>
                                            <input type="text" required="required" class="form-control" name="wit_name" placeholder="Witness Name">
                                        </div>
                                        
                                           <div class="form-group">
                                            <label for="gender">Gender</label>
                                             <select name="wit_gender" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        
                                            <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                      <label>Date Of Birth :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text"  name="wit_dob" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    
                                  
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">Physical Address</label>
                                            <input type="text" required="required" name="wit_address" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <input type="text" required="required" name="wit_box" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                           <div class="form-group">
                                            <label for="exampleInputPassword1">Nationalty / ID</label>
                                            <input type="text" required="required" name="wit_nationalty" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="text" required="required" name="wit_phone_no" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                       
                                            <input type="text" required="required" name="wit_status" value="Witness" style="visibility: hidden;" class="form-control" id="Phone_number" placeholder="Status ">
                                     
                                        
                                      
                                         
                                    </div><!-- /.box-body -->

 
</div>
 
                                    
<div class="pull-left" style="margin-left: 20px; margin-right: 20px; margin-top:50px;" >
<button type="submit" class="btn btn-primary">Submit Report</button>
</div>  

       
</form>
 
</div>

</section><!-- /.content --
                  
    @stop