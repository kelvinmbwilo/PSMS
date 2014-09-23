@extends('layout.master')
@section('contents')


<?php
/**
 * Created by PhpStorm.
 * User: isaiah
 * Date: 9/18/14
 * Time: 4:36 PM
 */ ?>

<!--main content start-->
<section class="wrapper">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">

                    @if($offenses)
                    offenses reported by <b>{{ $offenses[0]->user->fullName }}</b>
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
                                <th>Offense</th>
                                <th>Part</th>
                                <th>Amount</th>
                                <th>License No</th>
                                <th>Reg No</th>
                                <th class="numeric">Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($offenses as $offense)
                            <tr>

                                <td>{{ $offense->id }}</td>
                                <td> @if($offense->licence){{$offense->licence->name}} @endif</td>
                                <td> @if($offense->licence){{$offense->licence->address}} @endif</td>
                                <td class="col-lg-3">{{$offense->offence}}</td>
                                <td>{{$offense->commit}}</td>
                                <td>{{$offense->amount}}</td>
                                <td>{{$offense->license}}</td>
                                <td>{{$offense->plateNumber}}</td>
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