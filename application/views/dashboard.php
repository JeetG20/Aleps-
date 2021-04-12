 <!-- Begin Page Content -->
         <div class="container-fluid">
		
          <!-- Page Heading -->
          
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>
          <div class="row">
            <form class="form-inline" id="dashboardfilterform" action="<?php echo base_url(); ?>" method="POST">
              <div class="row mb-4">
                <div class="col-md-2">
                <div class="form-group">
                  <div class='input-group date' id='datetimepicker6'>
                    <input type='text' name="strdate"  id="strdate" placeholder="Start date"  value="<?PHP if(isset($_SESSION['dsstrdate'])){ echo $_SESSION['dsstrdate']; }else{ echo date('Y-m-d', strtotime("-1 month"));}?>" class="form-control" />
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                  </div>
                </div>
                <div class="col-md-2">
                <!-- <label for="pwd">&nbsp;&nbsp;End date:&nbsp;</label> -->
                <div class="form-group">
                  <div class='input-group date' id='datetimepicker7'>
                    <input type="text" name="enddate" id="enddate" placeholder="Start date" value="<?PHP if(isset($_SESSION['dsenddate'])){ echo $_SESSION['dsenddate']; }else{ echo date('Y-m-d');}?>"  class="form-control" />
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <select id="location" name="location" class="form-control">
                      <option value="">Location</option>
                      <?php foreach($locationsdata as $i){ ?>
                        <option value='<?php echo $i['locationid']; ?>' <?PHP if(isset($_SESSION['dslocation']) && $_SESSION['dslocation']==$i['locationid']) echo "selected";?>><?PHP print($i['locationname']); ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <select name="status" id="status" class="form-control">
                      <option value="">Status</option>
                      <option value="O" <?PHP if(isset($_SESSION['dsstatus']) && $_SESSION['dsstatus']=="O")echo "selected";?>>Open</option>
                      <option value="R" <?PHP if(isset($_SESSION['dsstatus']) && $_SESSION['dsstatus']=="R")echo "selected";?>>Resolved</option>
                      <option value="F" <?PHP if(isset($_SESSION['dsstatus']) && $_SESSION['dsstatus']=="F")echo "selected";?>>False Alert</option>
                      <option value="V" <?PHP if(isset($_SESSION['dsstatus']) && $_SESSION['dsstatus']=="V")echo "selected";?>>Detected</option>
                      <option value="U" <?PHP if(isset($_SESSION['dsstatus']) && $_SESSION['dsstatus']=="U")echo "selected";?>>Non-Object Detected</option>
                    </select>
                  </div>
                </div>
              </div>
            </form>
          </div>
		 
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Number of live locations</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">11/11</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-map-marker-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Number of live cameras</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">55/55</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-camera-retro fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total incidents reported</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?PHP echo count($int);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-secret fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Incidents in last 7 days</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?PHP echo count($intweek);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content Row -->
          <!-- Content Row -->
          <div class="row">

            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Location Wise Incidents </h6><!-- Intrutions Barchart -->
                </div>
                <div class="card-body">
                  <p>
                    <?PHP
                    #print_r($locations);
                      
                    function random_color_part() {
                      return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
                    }

                    function random_color() {
                      return random_color_part() . random_color_part() . random_color_part();
                    }

                    #echo random_color();

                      ?>
                    <script type="text/javascript">
                      google.charts.load("current", {packages:['corechart']});
                      google.charts.setOnLoadCallback(drawChart);
                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ["Element", "Number of Intrutions", { role: "style" } ]
                          <?PHP
                      foreach ($locations as $key=>$val){
                        print(','.'["'.$key.'", '.$val.', "color: #'.random_color().'"]');
                      }
                      ?>
                        ]);

                        var view = new google.visualization.DataView(data);
                        view.setColumns([0, 1,
                                        { calc: "stringify",
                                          sourceColumn: 1,
                                          type: "string",
                                          role: "annotation" },
                                        2]);

                        var options = {
                          title: "Location Wise Intrutions",
                          width: 550,
                          height: 350,
                          bar: {groupWidth: "95%"},
                          legend: { position: "none" },
                        };
                        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                        chart.draw(view, options);
                    }
                    </script>
                  <div id="columnchart_values" style="width: 900px; height: 300px;"></div></p>
                </div>
              </div>

            </div>

            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Date Wise Incidents </h6><!-- Intrutions Barchart -->
                </div>
                <div class="card-body">
                  <p>
                    <?PHP
                    #print_r($locations);
                      
                    ?>
                    <script type="text/javascript">
                      google.charts.load("current", {packages:['corechart']});
                      google.charts.setOnLoadCallback(drawChartDW);
                      function drawChartDW() {
                        var data = google.visualization.arrayToDataTable([
                          ["Element", "Number of intrutions", { role: "style" } ]
                          <?PHP
                            foreach ($datewiseincident as $key=>$val){
                              print(','.'["'.$key.'", '.$val.', "color: #'.random_color().'"]');
                            }
                            ?>
                        ]);

                        var view = new google.visualization.DataView(data);
                        view.setColumns([0, 1,
                                        { calc: "stringify",
                                          sourceColumn: 1,
                                          type: "string",
                                          role: "annotation" },
                                        2]);

                        var options = {
                          title: "Date Wise Intrutions",
                          width: 550,
                          height: 350,
                          bar: {groupWidth: "95%"},
                          legend: { position: "none" },
                        };
                        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values2"));
                        chart.draw(view, options);
                    }
                    </script>
                  <div id="columnchart_values2" style="width: 900px; height: 300px;"></div></p>
                </div>
              </div>

            </div>

             <!-- Content Column -->
             <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Incidents Wise Report</h6>
                  </div>
                  <div class="card-body">
                    <div class="text-center">
                    Types of Intrution 
                    </div>
                    <p>
                      <div id="piechart"></div>
                      <script type="text/javascript">
                      // Load google charts
                      google.charts.load('current', {'packages':['corechart']});
                      google.charts.setOnLoadCallback(drawChartIn);

                      // Draw the chart and set the chart values
                      function drawChartIn() {
                        var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day']
                        
                        <?PHP
                          foreach ($intrutype as $key=>$val){
                            print(','.'["'.$key.'", '.$val.']');
                          }
                          ?>
                        
                      ]);

                        // Optional; add a title and set the width and height of the chart
                        var options = {'title':'Types of Incident', 'width':450, 'height':330};

                        // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                      }
                      </script></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Time Distribution</h6>
                  </div>
                  <div class="card-body">
                    <p>
                      <?PHP
                      #print_r($locations);
                        
                      ?>
                      <script type="text/javascript">
                        google.charts.load("current", {packages:['corechart']});
                        google.charts.setOnLoadCallback(drawChartTD);
                        function drawChartTD() {
                          var data = google.visualization.arrayToDataTable([
                            ["Element", "Number of Distribution", { role: "style" } ]
                            <?PHP
                              foreach ($datewiseincident as $key=>$val){
                                print(','.'["'.$key.'", '.$val.', "color: #'.random_color().'"]');
                              }
                              ?>
                          ]);

                          var view = new google.visualization.DataView(data);
                          view.setColumns([0, 1,
                                          { calc: "stringify",
                                            sourceColumn: 1,
                                            type: "string",
                                            role: "annotation" },
                                          2]);

                          var options = {
                            title: "Time Distribution",
                            width: 550,
                            height: 350,
                            bar: {groupWidth: "95%"},
                            legend: { position: "none" },
                          };
                          var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values3"));
                          chart.draw(view, options);
                      }
                      </script>
                    <div id="columnchart_values3" style="width: 900px; height: 300px;"></div></p>
                  </div>
                </div>

              </div>
          </div>
		      <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Incidents Overview</h6>
                  <div class="dropdown no-arrow">
                    ***
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <script type="text/javascript">
                      google.charts.load("current", {packages:["corechart"]});
                      google.charts.setOnLoadCallback(drawChart);
                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Task', 'Hours per Day'],
                          ['Work',     11],
                          ['Eat',      2],
                          ['Commute',  2],
                          ['Watch TV', 2],
                          ['Sleep',    7]
                        ]);

                        var options = {
                          title: 'My Daily Activities',
                          pieHole: 0.4,
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                        chart.draw(data, options);
                      }
                    </script>
                    <div id="donutchart" style="width: 700px; height: 350px;"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pie Chart -->
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example 
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
-->
              <!-- Color System  
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      Primary
                      <div class="text-white-50 small">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      Success
                      <div class="text-white-50 small">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      Info
                      <div class="text-white-50 small">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Warning
                      <div class="text-white-50 small">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Danger
                      <div class="text-white-50 small">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Secondary
                      <div class="text-white-50 small">#858796</div>
                    </div>
                  </div>
                </div>
              </div>
			  -->
            </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <script type='text/javascript'>
            $(document).ready(function(){
              $('#strdate').datetimepicker({format: 'YYYY-MM-DD'});
              $('#enddate').datetimepicker({format: 'YYYY-MM-DD'});
              $('#datetimepicker6').datetimepicker({format: 'YYYY-MM-DD'});
              $('#datetimepicker7').datetimepicker({
                useCurrent: false,format: 'YYYY-MM-DD' //Important! See issue #1075
              });
              $("#datetimepicker6").on("dp.change", function(e) {
                $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
              });
              $("#datetimepicker7").on("dp.change", function(e) {
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
              });
              $("#location,#status").change(function(e){
                $("#dashboardfilterform").submit();
              });
              $("#datetimepicker6").on("dp.change", function(e) {
                $("#dashboardfilterform").submit();
              });
              $("#datetimepicker7").on("dp.change", function(e) {
                $("#dashboardfilterform").submit();
              });
            });
      </script>