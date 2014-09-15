@extends('layout.master')

@section('contents')

SAIDA NURUDINI MARTHA SHAKA ISAYAH ZACHARIA

<div id="statistcis">
@include('statistics')
</div>
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

