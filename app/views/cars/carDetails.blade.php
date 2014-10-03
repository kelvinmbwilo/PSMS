
@extends('layout.master')
@section('contents')

<?php
/**
 * Created by PhpStorm.
 * User: isaiah
 * Date: 9/18/14
 * Time: 3:23 PM
 */ ?>

<!--main content start-->
<section class="wrapper">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">

<!--                <ul class="timeline">-->
<!--
<!--                    <!-- timeline time label -->
<!--                    <li class="time-label">-->
<!--                        <span class="bg-red">-->
<!--                           {{{ $offenses[0]->car->plateNo or 'Details' }}}-->
<!--                        </span>-->
<!--                    </li>-->
<!--                    <!-- /.timeline-label -->
<!--
<!--                    <!-- timeline item -->
<!--                    <li>-->
<!--                        <!-- timeline icon -->
<!--                        <i class="fa fa-envelope bg-blue"></i>-->
<!--                        <div class="timeline-item">-->
<!--                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>-->
<!--
<!--                            <h3 class="timeline-header"><span>Car Information</span></h3>-->
<!--
<!--                            <div class="timeline-body">-->
<!--                                ...-->
<!--                                Content goes here-->
<!--                            </div>-->
<!--
<!--                            <div class='timeline-footer'>-->
<!--                                <a class="btn btn-primary btn-xs">...</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <!-- END timeline item -->
<!--                    <!-- timeline time label -->
<!--                    <li class="time-label">-->
<!--                                    <span class="bg-green">-->
<!--                                        3 Jan. 2014-->
<!--                                    </span>-->
<!--                    </li>-->
<!--                    <!-- /.timeline-label -->
<!--                    <!-- timeline item -->
<!--                    <li>-->
<!--                        <i class="fa fa-camera bg-purple"></i>-->
<!--                        <div class="timeline-item">-->
<!--                            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>-->
<!--                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>-->
<!--                            <div class="timeline-body">-->
<!--                                <img src="http://placehold.it/150x100" alt="..." class='margin' />-->
<!--                                <img src="http://placehold.it/150x100" alt="..." class='margin'/>-->
<!--                                <img src="http://placehold.it/150x100" alt="..." class='margin'/>-->
<!--                                <img src="http://placehold.it/150x100" alt="..." class='margin'/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <!-- END timeline item -->
<!--                </ul>-->


                <!-- START CUSTOM TABS -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs pull-right">
                                <li class="pull-left header"><i class="fa fa-info-circle"></i>Car Details</li>
                            </ul>
                            <br>
                            <br>

                                <div class="box-body">
                                    <dl class="dl-horizontal">
                                        <dt>Type</dt>
                                        <dd> {{ $mCar->type }} </dd>
                                        <dt>Make</dt>
                                        <dd> {{ $mCar->make }} </dd>
                                        <dt>Color</dt>
                                        <dd> {{ $mCar->color }} </dd>
                                        <dt>Year<dt>
                                        <dd> 2010 </dd>
                                        <dt>Owner Name </dt>
                                        <dd> Jason Derulo </dd>

                                        <br>
                                        <br>

                                        <dt>More information</dt>
                                        <dd>other details may come down here</dd>
                                    </dl>
                                </div><!-- /.box-body -->
                            <br>
                            <br>

                        </div><!-- nav-tabs-custom -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <!-- Custom Tabs (Pulled to the right) -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs pull-right">
                                <li class="pull-left header"><i class="fa fa-picture-o"></i>Pictures</li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1-1">
                                    <img src="{{ asset('img/psms/150x100.gif') }}" alt="{{ asset('img/avatar.png') }}" class='margin' />
                                    <img src="{{ asset('img/psms/150x100.gif') }}" alt="{{ asset('img/avatar.png') }}" class='margin' />
                                    <img src="{{ asset('img/psms/150x100.gif') }}" alt="{{ asset('img/avatar.png') }}" class='margin' />
                                    <img src="{{ asset('img/psms/150x100.gif') }}" alt="{{ asset('img/avatar.png') }}" class='margin' />
                                    <img src="{{ asset('img/psms/150x100.gif') }}" alt="{{ asset('img/avatar.png') }}" class='margin' />
                                    <img src="{{ asset('img/psms/150x100.gif') }}" alt="{{ asset('img/avatar.png') }}" class='margin' />
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div><!-- nav-tabs-custom -->
                    </div><!-- /.col -->
                </div> <!-- /.row -->
                <!-- END CUSTOM TABS -->

            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">

                    @if($offenses)
                    offenses related to {{ $offenses[0]->car->plateNo }}
                    @endif
                    <!--                        <a class="btn btn-success pull-right" href="{{ url('offenses/add') }}">New Offense</a>-->


                </header>

                <div class="panel-body">
                    <section id="unseen">
                        <table id="dynamic-table" class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Offense No</th>
                                <th>Driver Name</th>
                                <th>Driver Adress</th>
                                <th>Part</th>
                                <th>Offense</th>
                                <th>License No</th>
                                <th class="numeric">Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($offenses as $offense)
                            <tr>
                                <td class="col-lg-1">{{ $offense->id }}</td>
                                <td> @if($offense->licence){{$offense->licence->name}} @endif</td>
                                <td> @if($offense->licence){{$offense->licence->address}} @endif</td>
                                <td>{{$offense->commit}}</td>
                                <td class="col-lg-3">{{$offense->offence}}</td>
                                <td>{{$offense->license}}</td>
                                <td class="numeric">{{$offense->created_at}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </section>
        </div>

    </div>
    <!-- page end-->
</section>
<!--script for this page-->

<script>
    $(function(){
        $("#dynamic-table").dataTable();
        $('.form').on('submit' , function(e){
            var that = $(this),
                url = that.attr('action'),
                type = that.attr('method'),
                data = {};

            that.find('[name]').each(function(index, value){
                var that = $(this),
                    name = that.attr('name'),
                    value = that.val();

                data[name] = value;

            });
            $.ajax({
                url:url,
                type:type,
                data:data,
                success:function(response){
                    if(response == 'success'){
                        $('#response').css({opacity:1});
                        $('#dynamic-table').load('stakeholder.stakeholders.blade.php');
                        window.location.reload();
                        //$('#response').delay(770).animate({opacity:0},1000);
                        //$('#update').load('update_assets.php');
                        //$('#edit_table').find('.newtr').remove();
                    }
                }
            });

        });
    });
</script>

@stop