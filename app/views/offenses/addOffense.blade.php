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
        @if ($alert = Session::get('alert-success'))
        <div class="panel-heading">
            {{ $alert }}
        </div>
        @endif
    </header>
    <div class="panel-body">
        <span id="responce" style="opacity: 0; color: "> Successful.. </span>
        <form class="form" method="post" action="{{ url('offenses/add') }}">
            <div class="panel-body">
                <div class="form-group col-lg-6">
                    <label >Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                </div>
                <div class="form-group col-lg-6">
                    <label>Address</label>
                    <input type="text" class="form-control"name="address" id="address" placeholder="Enter address">
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="form-group col-lg-6">
                    <label>License Number</label>
                    <input type="text" required="required" class="form-control"name="license" id="license" placeholder="Enter License Number">
                </div>


                <div class="form-group col-lg-6">
                    <label>Plate Number</label>
                    <input type="text" required="required" class="form-control"name="plateno" id="plateno" placeholder="Enter Plate Number">
                </div>

                <div class="form-group col-lg-6">

                    <input type="radio" class="radio" name="commit" value="PartA"> Court
                    <input checked type="radio" class="radio" name="commit" value="PartB"> Gulty

                </div>

                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="panel-body">

                    <?php
                    $partA = array();
                    $partB = array();
                    ?>
                    <label>Select Offenses committed</label>
                    <br>
                    @foreach($offenseList as $list)
                    @if( $list->relating === 'bicycle/tricycle')
                    <?php
                        array_push($partB, $list);
                    ?>
                    @else
                    <?php
                        array_push($partA, $list);
                    ?>
                    @endif
                    @endforeach

                    <ul class="media-list">
                        <li>
                            <input type="hidden" name="0" value="0" />
                        </li>

                    </ul>

                    <select onchange="selectIngredient(this);" class="form-control" required="required">
                        <option value="0" hidden="hidden"> Select Offenses </option>
                        <optgroup label="Part A">
                            @for ($i = 0; $i < count($partA); $i++)
                                <option value="{{ $partA[$i]->id }}" class="col-lg-2 margin">{{ $partA[$i]->nature }}</option>
                            @endfor
                        </optgroup>
                        <optgroup label="Part B">
                            @for ($i = 0; $i < count($partB); $i++)
                            <option value="{{ $partB[$i]->id }}" class="col-lg-2 margin">{{ $partB[$i]->nature }}</option>
                            @endfor
                        </optgroup>
                    </select>

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

    function selectIngredient(select)
    {
        var option = select.options[select.selectedIndex];
        var ul = select.parentNode.getElementsByTagName('ul')[0];

        var choices = ul.getElementsByTagName('input');
        for (var i = 0; i < choices.length; i++)
            if (choices[i].value == option.value)
                return;

        var li = document.createElement('li');
        var input = document.createElement('input');
        var text = document.createTextNode(option.firstChild.data);

        input.type = 'hidden';
        input.name = 'ingredients[]';
        input.value = option.value;

        li.appendChild(input);
        li.appendChild(text);
        li.setAttribute('onclick', 'this.parentNode.removeChild(this);');

        ul.appendChild(li);
    }

</script>

@stop