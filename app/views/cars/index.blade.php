@extends('layout.master')
@section('contents')
<!--main content start-->
<section class="wrapper">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cars
<!--                    <a class="btn btn-success pull-right" href="{{ url('cars/add') }}">New Car</a>-->
<!--<!--                    New Car-->
<!--                    </button>-->

                </header>

                <div class="panel-body">
                    <section id="unseen">
                        <table id="dynamic-table" class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Make</th>
                                <th>Color</th>
                                <th>Plate No</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $j = 0 ?>
                            @foreach($cars as $car)
                            <tr>
                                <td>{{ ++$j }}</td>
                                <td>{{ $car->type }}</td>
                                <td>{{ $car->make }}</td>
                                <td>{{ $car->color }}</td>
                                <td class="col-lg-3">{{$car->plateNo}}</td>
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