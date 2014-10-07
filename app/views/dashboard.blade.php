@extends('layout.master')

@section('contents')


<div id="statistcis">
    @include('statistics')
</div>

<div class="row">
    <div class="panel">
        <div class="panel-body">
            <div id="map-outer" class="col-md-12">
                <div id="address" class="col-md-4">
                    <h2>Recently Reported</h2>
                    <address>
                        <strong>Bagamoyo Rd, Kinondoni</strong><br>
                        Black TOYOTA IST<br>
                        4000373843<br>
                        Failing to carry a reflector on a bycicle<br>
                        <abbr>Time:</abbr> 0830 53
                    </address>
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
        var var_location = new google.maps.LatLng(-6.774040,39.241663);
        var var_mapoptions = {
              center: var_location,
              zoom: 16
            };
        var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title:"Rank No: 12BF60"

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

<script>
        $(document).ready(function(){
            function stat(){
                setTimeout(function() {
                $("#mMap").load("<?php echo url("map") ?>")
                    stat();
            }, 3000);
            }
    stat();
        })
    </script>

@stop

