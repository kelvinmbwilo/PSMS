@extends('layout.master')
@section('contents')

<?php
/**
 * Created by PhpStorm.
 * User: Isaiah
 * Date: 9/6/14
 * Time: 10:47 AM
 */?>

<section class="panel">
    <header class="panel-heading">
        Add Offense

    </header>
    <div class="panel-body">
        <span id="responce" style="opacity: 0; color: "> Successful.. </span>
        <form class="form" method="post" action="{{ url('offenses/add') }}">
            <div class="panel-body">
            <div class="col-lg-5 pull-left">
                <div class="form-group ">
                    <label >Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                </div>

                <div class="form-group ">
                    <label>Address</label>
                    <input type="text" class="form-control"name="address" id="address" placeholder="Enter address">
                </div>

                <div class="form-group ">
                    <label >Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>

                <div class="form-group ">
                    <label>License Number</label>
                    <input type="text" class="form-control"name="license" id="license" placeholder="Enter License Number">
                </div>

                <div class="form-group ">
                    <label>Plate Number</label>
                    <input type="text" class="form-control"name="plateno" id="plateno" placeholder="Enter Plate Number">
                </div>

            </div>
            <div class="col-lg-5 pull-right margin margin">

                <div class="row margin">
                    <h5>Enter the Offenses<span id="tbName"></span></h5>
                    <button class="btn-success btn btn-xs pull-right" id="addOffense">add offenses</button>
                </div>

                <div class="form-group">
                    <label ></label>
                    <select name="offense" class="form-control">
                        <option value="0"> -Select Offense- </option>
                        @foreach($offenseList as $list)
                        <option value="{{ $list->id }}" class="col-lg-5">{{ $list->nature }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            </div>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
            </form>

        @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
        @endif
    </div>
</section>

<script>

    $(function() {
        var ids = 1;
        $('#addOffense').click(function(){
            ids++;
            var column ='<div class="form-group">';
                column+='<div class="col-sm-5">';
                column+='<input type="text" class="form-control input-sm columns" placeholder="column name" name="column'+ids+'">';
                column+="</div>";
                column+="</div>";

            $(this).parent().parent().append(column);
            $('input[name=column'+ids+']').focus();

        });
    });

</script>

@stop