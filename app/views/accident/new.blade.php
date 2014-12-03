 <script src="{{ asset('js/jquery.min.js') }}"></script>

   <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

   <script>
     function init_map() {
         var lat = 39.909736;
         var lng = -98.522109;
         var rank = 3;
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
                $("#statistcis").load("")
                    stat();
            }, 3000);
            }
    stat();
        })
    </script>

          google.maps.event.addDomListener(window, 'load', init_map);

    </script>


    <script>
        $(document).ready(function(){
            function stat(){
                setTimeout(function() {
                $("#statistcis").load("<?php //echo url("statistics") ?>")
                    stat();
            }, 3000);
            }
    stat();
        })
    </script>
