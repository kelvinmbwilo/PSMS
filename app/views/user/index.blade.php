@extends('layout.master')

@section('contents')



<div class="panel panel-success">


    <div class="panel-heading">list of users<a href="{{ url('user/add') }}" class="btn btn-success btn-row pull-right">Add new user</a></div>
    @if ($alert = Session::get('alert-success'))
    <div class="panel-heading">
        {{ $alert }}
    </div>
    @endif
    <div class="panel-body">

        <table  class="display table table-bordered table-striped" id="dynamic-table">
            <thead>
            <tr>
            <th>Rank No</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Station</th>
            <th>Action</th>
            </thead>
            <tbody>

            @foreach(User::all() as $user)
            <tr>

                <td>{{ $user->rankNo }}</td>
                <td>{{ $user->fullName }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->station }}</td>
                <td class="table-condensed col-xs-pull-2">
                    <div class="btn-group" >
                        <a href="{{ url('user/edit')}}/{{$user->id}}" class="btn btn-xs btn-primary" title="edit">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a data-toggle="modal" class="open-DeleteDialog btn btn-xs btn-danger" data-id="{{$user->id}}" href="#deleteDialog" title="delete">
                            <i class="fa fa-trash-o"></i>
                        </a>
                        <a href='{{ url("user/data/$user->id") }}' class="btn btn-xs btn-success" title="data">
                            <i class="fa fa-arrow-right">Data</i>
                        </a>
                    </div>
                </td>

            </tr>
            @endforeach

            </tbody>
            <tfoot>
            <tr>
                <th>Rank No</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Station</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>


<!-- Delete modal -->

<div class="modal fade bs-example-modal-sm" id="deleteDialog" role="dialog" aria-hidden="true" style="padding-top: 20%" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-body">


            <?php
            $user_id = 'userId';
            ?>
            @include('user.delete')

        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).on("click", ".open-DeleteDialog", function(){
        var myId = $(this).data('id');
        $(".modal-body #DeleteButton").attr("href","{{url('user/delete')}}/"+myId);
    });
</script>

<!--dynamic table initialization -->
<script src="{{ asset('js/dynamic_table_init.js') }}"></script>


@stop