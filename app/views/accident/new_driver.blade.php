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
<!-- left column -->
      
<h3 style="padding-left: 20px;">DRIVER DETAILS</h3>
<div class="col-md-6">


 <div class="box-header">
 <div class="box-footer" style="left:important;">
<button type="submit" class="btn btn-primary">Add New Driver</button>
</div>
 <hr />

 </div><!-- /.box-header -->

 <!-- form start -->
<form role="form">
                                    <div class="box-body">
                                            <!-- Date mm/dd/yyyy -->
                            
                                      
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">Surname</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Other Names</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                           <div class="form-group">
                                            <label for="exampleInputPassword1">Physical Address</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">Address PO Box</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">National ID</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Phone No </label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Gender</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                       <div class="form-group">
                                      <label>Date of Birth</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div>
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">Nationality</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Driving License ID</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                         
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Occupation</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                         
                                    </div><!-- /.box-body -->

                                
                                
</div>


  <!-- right column -->
 

<div class="col-md-6">

 <div class="box-header">
 <h4 class="box-title">INSURANCE</h4>
 <hr />

 </div><!-- /.box-header -->

 <!-- form start -->
<form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Insurance Company Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Type</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phone Number</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Policy Number</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Policy Period</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Estimated repair costs </label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                      
</form>


</div>
 
 
 <div class="col-md-6" style="margin-top: 10px;">

 <div class="box-header">
 <h4 class="box-title">DAMAGE</h4>
 <hr />

 </div><!-- /.box-header -->

 <!-- form start -->
<form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">vehicle</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Vehicle Total</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phone Number</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Infrastructure</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        
                                        
                                      
</form>


</div>

 <div class="pull-left" style="margin-left: 30px; margin-right: 30px;" >
<button type="submit" class="btn btn-primary">Save and Next</button>
</div>

 <div class="pull-rught" style="margin-left: 30px;">
<button type="submit" class="btn btn-primary"><a href="{{url('accident')}}">Cancel </a></button>
</div>
</div>

</section><!-- /.content -->

                  
    @stop