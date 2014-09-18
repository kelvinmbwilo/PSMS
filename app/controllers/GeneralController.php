<?php

class GeneralController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make("reports");
    }

    public function processQuery($offencequery){
//        $quer = parent::processRegion($offencequery,Input::get('region'),"");
        $query = parent::processDistrict($quer[0],Input::get('district'),$quer[1]);
//        $query1 = parent::processOffence($query[0],Input::get('offence'),$query[2]);
//        $query2 = parent::processSection($query1[0],Input::get('section'),$query1[2]);

        return $query;
    }

    public function generateArray($value){
        if($value == "General"){
            $columntype = array("Offences"=>"Offences");
        }
        if($value == "Regions"){
            $columntype = Input::get('region');
        }
        if($value == "Districts"){
            $columntype = Input::get('district');
        }
        if($value == "Car type"){
            $columntype = array('Toyota'=>'Toyota','Nissan'=>'Nissan','Benzi'=>'Benzi','Audi'=>'Audi');
        }
        if($value == "Offence Nature"){
            $columntype = Input::get('offence');
        }
        if($value == "Offence Section"){
            $columntype = Input::get('section');
        }
        if($value == "Offence Relating"){
            $columntype = array('bicycle/tricycle'=>'bicycle/tricycle','motor vehicle'=>'motor vehicle');
        }
        if($value == "Amount Paid"){
            $columntype = array('30,000'=>'30,000','20,000'=>'20,000');
        }
        if($value == "Licence Status"){
            $columntype = array('VALID'=>'Valid','BLOCKED'=>'Blocked','EXPIRED'=>'Expired');
        }if($value == "Gender"){
            $columntype = array('Male'=>'Male','Female'=>'Female');
        }
        return $columntype;
    }
    public function checkCondition($query,$pat,$key1){
        switch(Input::get('show')){
            case "General":
                $que = $query[0]->where('id','!=',$key1);
                break;
            case "Gender":
                $que = $query[0]->whereIn('license', Licence::where('gender',$key1)->get()->lists('licenceNo')+array('0'));
                break;
            case "Regions":
                $que = $query[0]->whereIn('region_id', $key1);
                break;
            case "Districts":
                $que = $query[0]->where('district_id', $key1);
                break;
            case "Car type":
                $que = $query[0]->whereIn('plateNumber', Car::where('type',$key1)->get()->lists('plateNo')+array('0'));
                break;
            case "Offence Nature":
                $que = $query[0]->where('offence', $key1);
                break;
            case "Offence Section":
                $que = $query[0]->whereIn('offence', Offence::where('section',"'%'.$key1.'%'")->get()->lists('nature')+array('0'));
                break;
            case "Offence Relating":
                $que = $query[0]->whereIn('offence', Offence::where('relating',$key1)->get()->lists('nature')+array('0'));
                break;
            case "Amount Paid":
                $que = $query[0]->where('amount', $key1);
                break;
            case "Licence Status":
                $que = $query[0]->whereIn('license', Licence::where('status',$key1)->get()->lists('licenceNo')+array('0'));
                break;


        }
        return $que;
    }

    public function makeTable(){
        $title = "";$pat = false;
        $row = array();
        $column = array();
        $columntype = $this->generateArray(Input::get("show"));

        if(Input::get("horizontal") == "Year"){
            $row = array("01"=>"jan","02"=>"feb","03"=>"mar","04"=>"apr","05"=>"may","06"=>"jun","07"=>"jul","08"=>"aug","09"=>"sep","10"=>"oct","11"=>"nov","12"=>"dec");

            foreach($row as $key => $value){
                $from = Input::get('year')."-".$key."-01";
                $to = Input::get('year')."-".$key."-31";
                if(isset($columntype)){
                    foreach($columntype as $key1=>$value1){
                        $offencequery = DB::table('psms_data');
                        $query = $this->processQuery($offencequery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column[$value1][] = $que->count();
                    }
//                    $title = Input::get('vertical')." ". $query[2]." ".Input::get('year');;
                }
            }
        }
        elseif(Input::get("horizontal") == "Years"){
            $row = range(Input::get('start'),Input::get('end'));

            foreach($row as $value){
                $from = $value."-01-01";
                $to = $value."-12-31";
                if(isset($columntype)){
                    foreach($columntype as $key1=>$value1){
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column[$value1][] = $que->count();
                    }
                    $title = Input::get('vertical')." ". $query[2]." ".Input::get('start')." - ".Input::get('end');
                }
            }
        }
        elseif(Input::get("horizontal") == "Age Range"){
            //setting the limits
            if((parent::maxAge()%Input::get('age')) == 0){
                $limit = parent::maxAge();
            } else{
                $limit = (parent::maxAge()-(parent::maxAge()%Input::get('age')))+Input::get('age');
            }
            //making a loop for values
            //year iterator
            $k = 0;
            //getting age
            $range = Input::get('age');
            $yeardate = date("Y")+1;
            $yaerdate1 = $yeardate."-01-01";

            //creating title
            $data = array();
            for($i=$range;$i<=$limit;$i+=$range){
                $row[] = $k ." - ". $i;
                //start year
                $time = $k*365*24*3600;
                $today = date("Y-m-d");
                $timerange = strtotime($today) - $time;
                $start  = (date("Y",$timerange)+1)."-01-01";
                //end year
                $time1 = $i*365*24*3600;
                $timerange1 = strtotime($today) - $time1;
                $end = date("Y",$timerange1)."-01-01";
                if(isset($columntype)){
                    foreach($columntype as $key1=>$value1){
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('birth_date',array($end,$start));
                        $column[$value1][] = $que->count();
                    }
                    $title = Input::get('vertical')." Age Range ". $query[2];
                }
                $k=$i;
            }
        }


        ?>
        <h4 class="text-center"><?php echo $title ?></h4>
        <table class="table table-responsive table-bordered">
            <tr>
                <th><?php echo Input::get("show") ?></th>
                <?php
                foreach($row as $header){
                    echo "<th>$header</th>";
                }
                ?>
            </tr>
            <?php foreach($column as $keys => $cols){ ?>
                <tr>
                    <td><?php echo $keys ?></td>
                    <?php
                    foreach($cols as $colsval){
                        echo "<td>$colsval</td>";
                    }
                    ?>
                </tr>
            <?php } ?>
        </table>

    <?php

    }

    public function makeBar(){
        $title = "";$pat = false;
        $row = "categories: [";
        $column = "";
        $columntype = $this->generateArray(Input::get("show"));
        if(Input::get("vertical") == "Patients"){
            $pat = true;
        }elseif(Input::get("vertical") == "Visits"){
            $vis = true;
        }


        if(Input::get("horizontal") == "Year"){
            $row1 = array("01"=>"jan","02"=>"feb","03"=>"mar","04"=>"apr","05"=>"may","06"=>"jun","07"=>"jul","08"=>"aug","09"=>"sep","10"=>"oct","11"=>"nov","12"=>"dec");
            $j = 1;
            foreach($row1 as $value){
                $row .= ($j < count($row1))?"'".$value."',":"'".$value."'";
                $j++;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{ name: '".$value1."', data: [ ";
                    $i = 1;
                    foreach($row1 as $key => $value){
                        $from = Input::get('year')."-".$key."-01";
                        $to = Input::get('year')."-".$key."-31";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column .= ($i < count($row1))?$que->count().",":$que->count();
                        $i++;
                    }
                    $column .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }
            $title = Input::get('vertical')." ". $query[2]." ".Input::get('Year');
        }
        elseif(Input::get("horizontal") == "Years"){
            $row1 = range(Input::get('start'),Input::get('end'));
            $j = 1;
            foreach($row1 as $value){
                $row .= ($j < count($row1))?"'".$value."',":"'".$value."'";
                $j++;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{ name: '".$value1."', data: [ ";
                    $i = 1;
                    foreach($row1 as $key => $value){
                        $from = $value."-01-01";
                        $to = $value."-12-31";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column .= ($i < count($row1))?$que->count().",":$que->count();
                        $i++;
                    }
                    $column .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }
            $title = Input::get('vertical')." ". $query[2]." ".Input::get('Year');
        }
        elseif(Input::get("horizontal") == "Age Range"){
            //setting the limits
            if((parent::maxAge()%Input::get('age')) == 0){
                $limit = parent::maxAge();
            } else{
                $limit = (parent::maxAge()-(parent::maxAge()%Input::get('age')))+Input::get('age');
            }
            //making a loop for values
            $k = 0;
            //getting age
            $range = Input::get('age');
            $yeardate = date("Y")+1;
            $yaerdate1 = $yeardate."-01-01";

            //creating title
            $j = 1;
            for($i=$range;$i<=$limit;$i+=$range){
                $row .= ($i < $limit)?"'".$k ." - ". $i."',":"'".$k ." - ". $i."'";
                $k=$i;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{ name: '".$value1."', data: [ ";
                    $i = 1;
                    for($i=$range;$i<=$limit;$i+=$range){
                        //start year
                        $time = $k*365*24*3600;
                        $today = date("Y-m-d");
                        $timerange = strtotime($today) - $time;
                        $start  = (date("Y",$timerange)+1)."-01-01";
                        //end year
                        $time1 = $i*365*24*3600;
                        $timerange1 = strtotime($today) - $time1;
                        $end = date("Y",$timerange1)."-01-01";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('birth_date',array($end,$start));
                        $column .= ($i < $limit)?$que->count().",":$que->count();
                        $k=$i;
                    }
                    $column .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }

            $title = Input::get('vertical')." Age Range ". $query[2]." ";

        }

        $row .= "]";
        ?>
        <script type="text/javascript">
            $(function () {
                $('#chartarea').highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: '<?php echo $title ?>'
                    },
                    xAxis: {
                        <?php echo $row  ?>
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: '<?php echo Input::get('vertical') ?>'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:12px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0"> {series.name} :   </td> ' +
                            '<td style="padding:0"><b>{point.y}  </b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [<?php echo $column ?>]
                });
            });


        </script>
    <?php

    }

    public function makeColumn(){
        $title = "";$pat = false;
        $row = "categories: [";
        $column = "";
        $columntype = $this->generateArray(Input::get("show"));
        if(Input::get("vertical") == "Patients"){
            $pat = true;
        }elseif(Input::get("vertical") == "Visits"){
            $vis = true;
        }


        if(Input::get("horizontal") == "Year"){
            $row1 = array("01"=>"jan","02"=>"feb","03"=>"mar","04"=>"apr","05"=>"may","06"=>"jun","07"=>"jul","08"=>"aug","09"=>"sep","10"=>"oct","11"=>"nov","12"=>"dec");
            $j = 1;
            foreach($row1 as $value){
                $row .= ($j < count($row1))?"'".$value."',":"'".$value."'";
                $j++;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{ name: '".$value1."', data: [ ";
                    $i = 1;
                    foreach($row1 as $key => $value){
                        $from = Input::get('year')."-".$key."-01";
                        $to = Input::get('year')."-".$key."-31";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column .= ($i < count($row1))?$que->count().",":$que->count();
                        $i++;
                    }
                    $column .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }
            $title = Input::get('vertical')." ". $query[2]." ".Input::get('Year');
        }
        elseif(Input::get("horizontal") == "Years"){
            $row1 = range(Input::get('start'),Input::get('end'));
            $j = 1;
            foreach($row1 as $value){
                $row .= ($j < count($row1))?"'".$value."',":"'".$value."'";
                $j++;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{ name: '".$value1."', data: [ ";
                    $i = 1;
                    foreach($row1 as $key => $value){
                        $from = $value."-01-01";
                        $to = $value."-12-31";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column .= ($i < count($row1))?$que->count().",":$que->count();
                        $i++;
                    }
                    $column .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }
            $title = Input::get('vertical')." ". $query[2]." ".Input::get('Year');
        }
        elseif(Input::get("horizontal") == "Age Range"){
            //setting the limits
            if((parent::maxAge()%Input::get('age')) == 0){
                $limit = parent::maxAge();
            } else{
                $limit = (parent::maxAge()-(parent::maxAge()%Input::get('age')))+Input::get('age');
            }
            //making a loop for values
            $k = 0;
            //getting age
            $range = Input::get('age');
            $yeardate = date("Y")+1;
            $yaerdate1 = $yeardate."-01-01";

            //creating title
            $j = 1;
            for($i=$range;$i<=$limit;$i+=$range){
                $row .= ($i < $limit)?"'".$k ." - ". $i."',":"'".$k ." - ". $i."'";
                $k=$i;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{ name: '".$value1."', data: [ ";
                    $i = 1;
                    for($i=$range;$i<=$limit;$i+=$range){
                        //start year
                        $time = $k*365*24*3600;
                        $today = date("Y-m-d");
                        $timerange = strtotime($today) - $time;
                        $start  = (date("Y",$timerange)+1)."-01-01";
                        //end year
                        $time1 = $i*365*24*3600;
                        $timerange1 = strtotime($today) - $time1;
                        $end = date("Y",$timerange1)."-01-01";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('birth_date',array($end,$start));
                        $column .= ($i < $limit)?$que->count().",":$que->count();
                        $k=$i;
                    }
                    $column .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }

            $title = Input::get('vertical')." Age Range ". $query[2]." ";

        }

        $row .= "]";
        ?>
        <script type="text/javascript">
            $(function () {
                $('#chartarea').highcharts({
                    chart: {
                        type: 'bar'
                    },
                    title: {
                        text: '<?php echo $title ?>'
                    },
                    xAxis: {
                        <?php echo $row  ?>
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: '<?php echo Input::get('vertical') ?>'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:12px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0"> {series.name} :   </td> ' +
                            '<td style="padding:0"><b>{point.y}  </b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [<?php echo $column ?>]
                });
            });


        </script>
    <?php

    }

    public function makeCombined(){
        $title = "";$pat = false;
        $row = "categories: [";
        $column = "";
        $column1 = "";
        $columntype = $this->generateArray(Input::get("show"));
        if(Input::get("vertical") == "Patients"){
            $pat = true;
        }elseif(Input::get("vertical") == "Visits"){
            $vis = true;
        }


        if(Input::get("horizontal") == "Year"){
            $row1 = array("01"=>"jan","02"=>"feb","03"=>"mar","04"=>"apr","05"=>"may","06"=>"jun","07"=>"jul","08"=>"aug","09"=>"sep","10"=>"oct","11"=>"nov","12"=>"dec");
            $j = 1;
            foreach($row1 as $value){
                $row .= ($j < count($row1))?"'".$value."',":"'".$value."'";
                $j++;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{type: 'column', name: '".$value1."', data: [ ";
                    $column1.= "{type: 'spline', name: '".$value1."', data: [ ";
                    $i = 1;
                    foreach($row1 as $key => $value){
                        $from = Input::get('year')."-".$key."-01";
                        $to = Input::get('year')."-".$key."-31";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column .= ($i < count($row1))?$que->count().",":$que->count();
                        $column1 .= ($i < count($row1))?$que->count().",":$que->count();
                        $i++;
                    }
                    $column .= "]},";
                    $column1 .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }
            $title = Input::get('vertical')." ". $query[2]." ".Input::get('Year');
        }
        elseif(Input::get("horizontal") == "Years"){
            $row1 = range(Input::get('start'),Input::get('end'));
            $j = 1;
            foreach($row1 as $value){
                $row .= ($j < count($row1))?"'".$value."',":"'".$value."'";
                $j++;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{type: 'column', name: '".$value1."', data: [ ";
                    $column1.= "{type: 'spline', name: '".$value1."', data: [ ";
                    $i = 1;
                    foreach($row1 as $key => $value){
                        $from = $value."-01-01";
                        $to = $value."-12-31";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column .= ($i < count($row1))?$que->count().",":$que->count();
                        $column1 .= ($i < count($row1))?$que->count().",":$que->count();
                        $i++;
                    }
                    $column .= "]},";
                    $column1 .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }
            $title = Input::get('vertical')." ". $query[2]." ".Input::get('Year');
        }
        elseif(Input::get("horizontal") == "Age Range"){
            //setting the limits
            if((parent::maxAge()%Input::get('age')) == 0){
                $limit = parent::maxAge();
            } else{
                $limit = (parent::maxAge()-(parent::maxAge()%Input::get('age')))+Input::get('age');
            }
            //making a loop for values
            $k = 0;
            //getting age
            $range = Input::get('age');
            $yeardate = date("Y")+1;
            $yaerdate1 = $yeardate."-01-01";

            //creating title
            $j = 1;
            for($i=$range;$i<=$limit;$i+=$range){
                $row .= ($i < $limit)?"'".$k ." - ". $i."',":"'".$k ." - ". $i."'";
                $k=$i;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{type: 'column', name: '".$value1."', data: [ ";
                    $column1.= "{type: 'spline', name: '".$value1."', data: [ ";
                    $i = 1;
                    for($i=$range;$i<=$limit;$i+=$range){
                        //start year
                        $time = $k*365*24*3600;
                        $today = date("Y-m-d");
                        $timerange = strtotime($today) - $time;
                        $start  = (date("Y",$timerange)+1)."-01-01";
                        //end year
                        $time1 = $i*365*24*3600;
                        $timerange1 = strtotime($today) - $time1;
                        $end = date("Y",$timerange1)."-01-01";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('birth_date',array($end,$start));
                        $column .= ($i < $limit)?$que->count().",":$que->count();
                        $column1 .= ($i < $limit)?$que->count().",":$que->count();
                        $k=$i;
                    }
                    $column .= "]},";
                    $column1 .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }


            $title = Input::get('vertical')." Age Range ". $query[2]." ";

        }

        $row .= "]";
        ?>
        <script type="text/javascript">
            $(function () {
                $('#chartarea').highcharts({
                    title: {
                        text: '<?php echo $title ?>'
                    },
                    xAxis: {
                        <?php echo $row  ?>
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: '<?php echo Input::get('vertical') ?>'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:12px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0"> {series.name} :   </td> ' +
                            '<td style="padding:0"><b>{point.y}  </b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [<?php echo $column.$column1 ?>]
                });
            });


        </script>
    <?php

    }

    public function makeLine(){
        $title = "";$pat = false;
        $row = "categories: [";
        $column = "";
        $columntype = $this->generateArray(Input::get("show"));
        if(Input::get("vertical") == "Patients"){
            $pat = true;
        }elseif(Input::get("vertical") == "Visits"){
            $vis = true;
        }


        if(Input::get("horizontal") == "Year"){
            $row1 = array("01"=>"jan","02"=>"feb","03"=>"mar","04"=>"apr","05"=>"may","06"=>"jun","07"=>"jul","08"=>"aug","09"=>"sep","10"=>"oct","11"=>"nov","12"=>"dec");
            $j = 1;
            foreach($row1 as $value){
                $row .= ($j < count($row1))?"'".$value."',":"'".$value."'";
                $j++;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{ name: '".$value1."', data: [ ";
                    $i = 1;
                    foreach($row1 as $key => $value){
                        $from = Input::get('year')."-".$key."-01";
                        $to = Input::get('year')."-".$key."-31";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column .= ($i < count($row1))?$que->count().",":$que->count();
                        $i++;
                    }
                    $column .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }
            $title = Input::get('vertical')." ". $query[2]." ".Input::get('Year');
        }
        elseif(Input::get("horizontal") == "Years"){
            $row1 = range(Input::get('start'),Input::get('end'));
            $j = 1;
            foreach($row1 as $value){
                $row .= ($j < count($row1))?"'".$value."',":"'".$value."'";
                $j++;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{ name: '".$value1."', data: [ ";
                    $i = 1;
                    foreach($row1 as $key => $value){
                        $from = $value."-01-01";
                        $to = $value."-12-31";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column .= ($i < count($row1))?$que->count().",":$que->count();
                        $i++;
                    }
                    $column .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }
            $title = Input::get('vertical')." ". $query[2]." ".Input::get('Year');
        }
        elseif(Input::get("horizontal") == "Age Range"){
            //setting the limits
            if((parent::maxAge()%Input::get('age')) == 0){
                $limit = parent::maxAge();
            } else{
                $limit = (parent::maxAge()-(parent::maxAge()%Input::get('age')))+Input::get('age');
            }
            //making a loop for values
            $k = 0;
            //getting age
            $range = Input::get('age');
            $yeardate = date("Y")+1;
            $yaerdate1 = $yeardate."-01-01";

            //creating title
            $j = 1;
            for($i=$range;$i<=$limit;$i+=$range){
                $row .= ($i < $limit)?"'".$k ." - ". $i."',":"'".$k ." - ". $i."'";
                $k=$i;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{ name: '".$value1."', data: [ ";
                    $i = 1;
                    for($i=$range;$i<=$limit;$i+=$range){
                        //start year
                        $time = $k*365*24*3600;
                        $today = date("Y-m-d");
                        $timerange = strtotime($today) - $time;
                        $start  = (date("Y",$timerange)+1)."-01-01";
                        //end year
                        $time1 = $i*365*24*3600;
                        $timerange1 = strtotime($today) - $time1;
                        $end = date("Y",$timerange1)."-01-01";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('birth_date',array($end,$start));
                        $column .= ($i < $limit)?$que->count().",":$que->count();
                        $k=$i;
                    }
                    $column .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }

            $title = Input::get('vertical')." Age Range ". $query[2]." ";

        }
        $row .= "]";
        ?>
        <script type="text/javascript">
            $(function () {
                $('#chartarea').highcharts({
                    title: {
                        text: '<?php echo $title ?>'
                    },
                    xAxis: {
                        <?php echo $row  ?>
                    },
                    yAxis: {
                        title: {
                            text: '<?php echo Input::get('vertical') ?>'
                        },
                        plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080'
                        }]
                    },
                    tooltip: {
                        valueSuffix: '<?php  Input::get('vertical') ?>'
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle',
                        borderWidth: 0
                    },
                    series: [<?php echo $column ?>]
                });
            });
        </script>
    <?php

    }

    public function makePie(){
        $title = "";$pat = false;
        $row = "categories: [";
        $column = "";
        $columntype = $this->generateArray(Input::get("show"));
        if(Input::get("vertical") == "Patients"){
            $pat = true;
        }elseif(Input::get("vertical") == "Visits"){
            $vis = true;
        }


        if(Input::get("horizontal") == "Year"){
            $row1 = array("01"=>"jan","02"=>"feb","03"=>"mar","04"=>"apr","05"=>"may","06"=>"jun","07"=>"jul","08"=>"aug","09"=>"sep","10"=>"oct","11"=>"nov","12"=>"dec");
            $j = 1;
            foreach($row1 as $value){
                $row .= ($j < count($row1))?"'".$value."',":"'".$value."'";
                $j++;
            }
            $col = 1;
            if(isset($columntype)){
                $column.= "{ type:'pie' name: 'Patients', data: [ ";
                foreach($columntype as $key1=>$value1){

                    $i = 1;
                    foreach($row1 as $key => $value){
                        $from = Input::get('year')."-".$key."-01";
                        $to = Input::get('year')."-".$key."-31";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column .= ($i < count($row1))?"['".$value."',".$que->count()."],":"['".$value."',".$que->count()."]";
                        $i++;
                    }

                    $col++;
                }
                $column .= "]}";
            }
            $title = Input::get('vertical')." ". $query[2]." ".Input::get('Year');
        }
        elseif(Input::get("horizontal") == "Years"){
            $row1 = range(Input::get('start'),Input::get('end'));
            $j = 1;
            foreach($row1 as $value){
                $row .= ($j < count($row1))?"'".$value."',":"'".$value."'";
                $j++;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{ name: '".$value1."', data: [ ";
                    $i = 1;
                    foreach($row1 as $key => $value){
                        $from = $value."-01-01";
                        $to = $value."-12-31";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('created_at',array($from,$to));
                        $column .= ($i < count($row1))?$que->count().",":$que->count();
                        $i++;
                    }
                    $column .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }
            $title = Input::get('vertical')." ". $query[2]." ".Input::get('Year');
        }
        elseif(Input::get("horizontal") == "Age Range"){
            //setting the limits
            if((parent::maxAge()%Input::get('age')) == 0){
                $limit = parent::maxAge();
            } else{
                $limit = (parent::maxAge()-(parent::maxAge()%Input::get('age')))+Input::get('age');
            }
            //making a loop for values
            $k = 0;
            //getting age
            $range = Input::get('age');
            $yeardate = date("Y")+1;
            $yaerdate1 = $yeardate."-01-01";

            //creating title
            $j = 1;
            for($i=$range;$i<=$limit;$i+=$range){
                $row .= ($i < $limit)?"'".$k ." - ". $i."',":"'".$k ." - ". $i."'";
                $k=$i;
            }
            $col = 1;
            if(isset($columntype)){
                foreach($columntype as $key1=>$value1){
                    $column.= "{ name: '".$value1."', data: [ ";
                    $i = 1;
                    for($i=$range;$i<=$limit;$i+=$range){
                        //start year
                        $time = $k*365*24*3600;
                        $today = date("Y-m-d");
                        $timerange = strtotime($today) - $time;
                        $start  = (date("Y",$timerange)+1)."-01-01";
                        //end year
                        $time1 = $i*365*24*3600;
                        $timerange1 = strtotime($today) - $time1;
                        $end = date("Y",$timerange1)."-01-01";
                        $patientquery = DB::table('patient');
                        $visitquery   = DB::table('visit');
                        $query = $this->processQuery($patientquery,$visitquery);
                        $que = $this->checkCondition($query,$pat,$key1)->whereBetween('birth_date',array($end,$start));
                        $column .= ($i < $limit)?$que->count().",":$que->count();
                        $k=$i;
                    }
                    $column .= ($col < count($columntype))?"]},":"]}";
                    $col++;
                }
            }

            $title = Input::get('vertical')." Age Range ". $query[2]." ";

        }

        $row .= "]";
        ?>
        <script type="text/javascript">
            $(function () {
                $('#chartarea').highcharts({
                    chart: {
                        type: 'pie',
                        options3d: {
                            enabled: true,
                            alpha: 45,
                            beta: 0
                        }
                    },
                    title: {
                        text: 'Browser market shares at a specific website, 2014'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            depth: 35,
                            dataLabels: {
                                enabled: true,
                                format: '{point.name}'
                            }
                        }
                    },
                    series: [<?php echo $column ?>]
                });
            });


        </script>
    <?php

    }

    /**
     * a function to export data to excel
     */
    public function excelDownload(){
        /** Include PHPExcel */
        require_once dirname(__FILE__) . '/Classes/PHPExcel.php';


        // Create new PHPExcel object
        $objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
            ->setLastModifiedBy("Maarten Balliauw")
            ->setTitle("Office 2007 XLSX Test Document")
            ->setSubject("Office 2007 XLSX Test Document")
            ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Test result file");


        // Add some data
        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Hello')
            ->setCellValue('B2', 'world!')
            ->setCellValue('C1', 'Hello')
            ->setCellValue('D2', 'world!');

        // Miscellaneous glyphs, UTF-8
        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A4', 'Miscellaneous glyphs')
            ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');

        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Simple');


        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);


        // Redirect output to a client’s web browser (Excel2007)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="01simple.xlsx"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;
    }

}