<section class="panel">
    <input type="text" id="userId"/>
    <div class="wrapped">
        <div class="btn-group btn-group-justified">
            <a class="btn btn-default" href="{{ url('user') }}"> CANCEL </a>
            <a class="btn btn-danger" href="{{ url('user/delete')}}/{{$user->id}}" id="DeleteButton">OK</a>

        </div>
    </div>
</section>