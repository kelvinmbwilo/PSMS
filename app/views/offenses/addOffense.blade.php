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
        {{ Form::open(array('action' => 'OffenseController@store' , 'method' => 'post', 'class'=>'form')) }}
        <div class="form-group">
            <label>Name</label>
            <input type="text" id="name" class="form-control" name="name"/>
        </div>
        {{ Form::submit('Submit', array('class' => 'btn pull-right')) }}
        </form>
        @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
        @endif
    </div>
</section>