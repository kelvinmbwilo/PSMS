@extends('layout.master')
@section('contents')

<!--main content start-->
<section class="wrapper">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Licenses
                </header>

                <div class="panel-body">
                    <section id="unseen">
                        <table id="dynamic-table" class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>License Number</th>
                                <th>Address</th>
                                <th>Class</th>
                                <th>Expiry Date</th>
                                <th>Status</th>
                                <th>Data</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $j = 0 ?>
                            @foreach($lisence as $lisence)
                            <tr>
                                <td>{{ ++$j }}</td>
                                <td>{{ $lisence->name }}</td>
                                <td>{{ $lisence->licenceNo }}</td>
                                <td>{{ $lisence->address }}</td>
                                <td>{{ $lisence->class }}</td>
                                <td>{{ $lisence->expiryDate }}</td>
                                <td>{{$lisence->status}}</td>
                                <td><a class="btn btn-xs btn-success" href='{{ url("license/data/$lisence->id") }}'><i class="fa fa-arrow-right">Data</i> </a> </td>
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