<?php
    require_once "koolreport/core/autoload.php"; 
   
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\ColumnChart;
    use \koolreport\datasources\PdoDataSource; 
    $connection = array(
        "connectionString"=>"mysql:host=localhost;dbname=scmdb",
        "username"=>"root",
        "password"=>"@leps238737",
        "charset"=>"utf8"
    );
	
	$data = array(
        array("location"=>"Books","sale"=>32000,"cost"=>20000,"profit"=>12000),
        array("location"=>"Accessories","sale"=>43000,"cost"=>36000,"profit"=>7000),
        array("location"=>"Phones","sale"=>54000,"cost"=>39000,"profit"=>15000),
        array("location"=>"Movies","sale"=>23000,"cost"=>18000,"profit"=>5000),
        array("location"=>"Others","sale"=>12000,"cost"=>6000,"profit"=>6000)
    );
	
	$new = (array(
            "dataSource"=>(new PdoDataSource($connection))->query("
                SELECT 	intrusion_id,intrusion_fileName,intrusiontype,intrusion_time,locationid 
				FROM `intrusiondetails` where 	incidentstatus = 'O' 
				ORDER BY `intrusion_id` DESC limit 100
            ")
        ));
	
	print_r($new);
	
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
                SELECT 	intrusion_id,intrusion_fileName,intrusiontype,intrusion_time,locationid 
				FROM `intrusiondetails` where 	incidentstatus = 'O' 
				ORDER BY `intrusion_id` DESC limit 100
            ")
        )); 
        ?>
		<?php 
        ColumnChart::create(array(
            "dataSource"=>($data)
        ));
        ?>
    </body>
</html>