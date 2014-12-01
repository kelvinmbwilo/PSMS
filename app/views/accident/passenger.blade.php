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

<div style="  display: block; margin-left: auto; margin-right: auto">
<img src="{{asset('accident_includes/img/police_icon.jpg')}}"  alt="Police icon"/>
</div>
<section class="content-header">

<div style="alignment-adjust: middle;"> <h4> Report Accident Here. </h4> </div>

<hr />

<div class="row">
<!-- left column -->

<div class="col-md-6">

 <div class="box-header">
 <h4 class="box-title">PASSENGER:VEHICLE ONE</h4>
 <hr />

 </div><!-- /.box-header -->

 <!-- form start -->
<form role="form">
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
                                            <label for="exampleInputPassword1">Drugs / Alcohol [‰]</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Seat Belt / Helmet (Y/N) </label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Casualty</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                      
                                      
                                         
                                    </div><!-- /.box-body -->

  </form>                              
                                
</div>


 
 <div class="col-md-6" style="margin-top: 10px;">

 <div class="box-header">
 <h4 class="box-title">PEDESTRIAN</h4>
 <hr />

 </div><!-- /.box-header -->

 <!-- form start -->
<form role="form">
                                    <div class="box-body">
                                    
                                       <div class="form-group">
                                            <label for="exampleInputEmail1">Pedestrian Name</label>
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
                                            <label for="exampleInputPassword1">Drugs / Alcohol [‰]</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Casualty</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                      
                                      
                                         
                                    </div><!-- /.box-body -->

  </form> 
</div>
 
 </div>
 
 <div class="row">
  <div class="col-md-3">
  </div>
 <div class="col-md-6" style="margin-top: 10px;">

 <div class="box-header">
 <h4 class="box-title">WITNESS</h4>
 <hr />

 </div><!-- /.box-header -->

                            <!-- form start -->
                                 <form role="form">
                                    <div class="box-body">
                                    
                                       <div class="form-group">
                                            <label for="exampleInputEmail1">WITNESS Name</label>
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
                                            <label for="exampleInputPassword1">Drugs / Alcohol [‰]</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Casualty</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                      
                                      
                                         
                                    </div><!-- /.box-body -->

                              </form> 
                               <div >
                              <button type="submit" class="btn btn-primary" >Save and Next</button>
                               </div>
                     </div>
                     
                       <div class="col-md-3">
  </div>
                     
      </div>               
              
       
</section><!-- /.content -->



<hr />

                  
    @stop