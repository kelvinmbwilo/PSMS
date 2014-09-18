@extends('layout.master')

@section('contents')

<fieldset><legend>Edit user</legend>

    <form action="{{ url('user/edit')}}/{{$user->id}}" method="post">
        <div class="entry">
            <div class="row">
                <div class="col-lg-2"><p>Rank No</p></div>
                <div class="col-lg-2"> <input type="text"  name= "rankNo" class="form-control" value="{{$user->rankNo}}"/> </div>

            </div>
            <div class="entry">
                <div class="row">
                    <div class="col-lg-2"><p>Full Name</p></div>
                    <div class="col-lg-2"> <input type="text"  name= "fullName" class="form-control" value="{{$user->fullName}}" /> </div>

                </div>
                <div class="entry">
                    <div class="row">
                        <div class="col-lg-2"><p>Email</p></div>
                        <div class="col-lg-2"> <input type="text"  name= "email" class="form-control" value="{{$user->email}}" /> </div>

                    </div>
                        <div class="entry">
                            <div class="row">
                                <div class="col-lg-2"><p>Password</p></div>
                                <div class="col-lg-2"> <input type="password"  name= "password" class="form-control" value="{{$user->password}}"/> </div>

                            </div>
                            <div class="entry">
                                <div class="row">
                                    <div class="col-lg-2"><p>Station</p></div>
                                    <div class="col-lg-2"> <input type="text"  name= "station" class="form-control"  value="{{$user->station}}"/> </div>

                                </div>


                                            <hr>
                                            <div class="sep"></div>

                                            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                                            <a class="btn btn-danger" href="{{ url('user') }}"> Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
    </form>
</fieldset>
@stop

















