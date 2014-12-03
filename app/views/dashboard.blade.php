@extends('layout.master')

@section('contents')

<div id="statistcis">
   @include('statistics')
</div>

<div class="row" id="myMap">
<?php
 //   $last = Data::orderBy('id', 'DESC')->get();
//   $mLast = $last[0];
//    ?>
    <div class="panel">
        <div class="panel-body">
            <div id="map-outer" class="col-md-12">
                <div id="address" class="col-md-4">
                       @include('recently')
                </div>
            </div>
            
         </div>
    </div>     
</div>


<div class= "row">

<div class="col-md-2"></div>
     <div class="col-md-8" id="map-canvas" style="height: 450px;"></div>

</div>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.11&sensor=false" type="text/javascript"></script>
        
        
        
 <script type="text/javascript">
   

    var map = new google.maps.Map(document.getElementById('map-canvas'), {
      zoom: 10,
      center: new google.maps.LatLng(-6.771856, 39.241116),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

      
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(-6.771856, 39.241116),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker) {
        return function() {
          infowindow.open(map, marker);
        }
      })(marker));

    
  </script>
@stop

