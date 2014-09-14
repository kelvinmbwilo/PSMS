@extends('layout.master')

@section('contents')

SAIDA NURUDINI MARTHA SHAKA ISAYAH ZACHARIA

<!-- Small boxes (Stat box) -->

<div class="row">
    <?php
        $totalOffenses = Data::all();
        $totalOffenses->toarray();
        $carpercentage = 0;
    ?>
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">
            <div class="inner">
                <h3 style="font-size: 36px">
                    <?php
                        $totalOffensesCount = count($totalOffenses);
                        echo $totalOffensesCount;
                    ?>
                </h3>
                <br>
                <br>
                <p>
                    Total Offenses Registered
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-android-search"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>
                    <?php
                        $totalCarOffenses = 0;
                        $totalBicycleOffenses = 0;
                        foreach ($totalOffenses as $offenses){
                            if ($offenses->amount === '20000'){
                                $totalBicycleOffenses++;
                            }
                            else{
                                $totalCarOffenses++;
                            }
                        }
                    $percent = $totalCarOffenses/count($totalOffenses)*100;
                    $carpercentage = $percent;
                    ?>
                    {{ $percent }} <sup style="font-size: 20px">%</sup>
                </h3>
                <br>
                <br>
                <p>
                    Vehicle Type Offenses
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>
                    <?php
                        $bcp = 100 - $carpercentage;
                    ?>
                    {{ $bcp }} <sup style="font-size: 20px">%</sup>
                </h3>
                <br>
                <br>
                <p>
                    Bicycle Type Offenses
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
</div><!-- /.row -->




@stop

