<?php
/**
 * Created by PhpStorm.
 * User: Isaiah
 * Date: 10/8/14
 * Time: 1:24 PM
 */ ?>
<h2>Recently Reported</h2>
<address>
    <strong>Bagamoyo Rd, Kinondoni</strong><br>
    {{ $mLast->car->color ." ".$mLast->car->type ." ".$mLast->car->make}}<br>
    {{ $mLast->license }}<br>
    {{ $mLast->offence }}<br>
    <abbr>Time:</abbr> {{ substr($mLast->created_at, 10, 19) }}
</address>