<?php
    require_once "koolreport/core/autoload.php"; 
   
    use \koolreport\widgets\koolphp\Table;
   // use \koolreport\widgets\google\ColumnChart;
    use \koolreport\datasources\PdoDataSource; 
    $connection = array(
        "connectionString"=>"mysql:host=localhost;dbname=scmdb",
        "username"=>"root",
        "password"=>"@leps238737",
        "charset"=>"utf8"
    );
?>
<html>
    <head>
        <title>KoolReport's Widgets</title>
    </head>
    <body>
    <body>
        <?php 
        Table::create(array(
            "dataSource"=>(new PdoDataSource($connection))->query("
                SELECT 	intrusion_id,intrusion_fileName,intrusiontype,intrusion_time,locationid FROM `intrusiondetails` where 	incidentstatus = 'O' ORDER BY `intrusion_id` DESC limit 100
            ")
        ));
        ?>
    </body>
</html>