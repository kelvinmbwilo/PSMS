@extends('layout.master')
@section('contents')
@include('offenses.delete')
    <!--main content start-->
<section class="wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
        Offenses
                    <button data-toggle="modal" data-target="#myModal" class="btn btn-success pull-right" }}>
                    New Offense
                    </button>

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

<div class="modal fade" id="myModal" style="padding-top: 10%" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
@include('offenses.addOffense')
        </div>
        </div>
    </div>
</div>

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