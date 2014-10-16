@extends('layout.master')

@section('contents')


<div id="statistcis">
    @include('statistics')
</div>

<div class="row" id="myMap">
    <?php
    $last = Data::orderBy('id', 'DESC')->get();
    $mLast = $last[0];
    ?>
    <div class="panel">
        <div class="panel-body">
            <div id="map-outer" class="col-md-12">
                <div id="address" class="col-md-4">
                       @include('recently')
                </div>

                 <div id="mMap">
                        @include('map')
                 </div>

            </div>
         </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script>
     function init_map() {
         var lat = <?php echo $mLast->latitude; ?>;
         var lng = <?php echo $mLast->longitude; ?>;
         var rank = <?php echo $mLast->rankNo; ?>;
         var var_location = new google.maps.LatLng(lat,lng);
        var var_mapoptions = {
              center: var_location,
              zoom: 16
            };
        var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title:"Rank No: "+rank

        });
        var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);
        var_marker.setMap(var_map);

        }

          google.maps.event.addDomListener(window, 'load', init_map);

    </script>


    <script>
        $(document).ready(function(){
            function stat(){
                setTimeout(function() {
                $("#statistcis").load("<?php echo url("statistics") ?>")
                    stat();
            }, 3000);
            }
    stat();
        })
    </script>


@stop

