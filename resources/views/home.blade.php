<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 400px;
}
#chartedad {
    width: 100%;
    height: 300px;
  }
#chartayudas {
    width: 100%;
    height: 400px;
  }
  #charttoxico {
    width: 100%;
    height: 400px;
  }
   #chartoxigeno {
    width: 100%;
    height: 400px;
  }
   #chartcontrol {
    width: 100%;
    height: 400px;
  }
  #chartpoblacion {
    width: 100%;
    height: 400px;
  }
  #chartescolaridad {
    width: 100%;
    height: 400px;
  }
 #charteps {
    width: 100%;
    height: 500px;
  }
  #chartepss {
    width: 100%;
    height: 400px;
  }
    #chartsisben{
        width: 100%;
        height: 400px;
      }
      #chartdieta {
  width: 100%;
  height: 400px;
}
    #chartinfluenza {
        width: 100%;
        height: 400px;
      }
      #chartyesavage {
  width: 100%;
  height: 400px;
}
    #chartpfeffer {
        width: 100%;
        height: 400px;
      }
      #chartpfeffer {
        width: 100%;
        height: 400px;
      }
</style>
<!-- Resources -->
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>



<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

@extends('layouts.plantilla')

@section('content')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">


                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <!-- page encabezado -->
                            <div class="right_col" role="main">

                                <!-- top tiles -->
                                <div class="row" style="display: inline-block;" >
                                <div class="tile_count">
                                  <div class="col-md-2 col-sm-4  tile_stats_count">
                                    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                                    <div class="count">{{$totaladul}}</div>
                                    <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                                  </div>
                                  <div class="col-md-2 col-sm-4  tile_stats_count">
                                    <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                                    <div class="count">123.50</div>
                                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                                  </div>
                                  <div class="col-md-2 col-sm-4  tile_stats_count">
                                    <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                                    <div class="count green">2,500</div>
                                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                                  </div>
                                  <div class="col-md-2 col-sm-4  tile_stats_count">
                                    <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                                    <div class="count">4,567</div>
                                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                                  </div>
                                  <div class="col-md-2 col-sm-4  tile_stats_count">
                                    <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                                    <div class="count">2,315</div>
                                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                                  </div>
                                  <div class="col-md-2 col-sm-4  tile_stats_count">
                                    <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                                    <div class="count">7,325</div>
                                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                                  </div>
                                </div>
                              </div>
                                <!-- /top tiles -->
                              <div class="">


                                <div class="clearfix"></div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="x_panel">
                                          <div class="x_title">
                                            <h2>Clasificación por edad<small></small></h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                              </li>
                                              <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                  </div>
                                              </li>
                                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                                              </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                          </div>
                                          <div class="x_content">
                                            <!-- Chart code -->
                                            <script>
                                            am4core.ready(function() {

                                            // Themes begin
                                            am4core.useTheme(am4themes_material);
                                            am4core.useTheme(am4themes_animated);
                                            // Themes end

                                            // Create chart instance
                                            var chart = am4core.create("chartedad", am4charts.XYChart);

                                            // Add data
                                            chart.data = [{
                                              "age": "100+",
                                              "male": -{{$edad10}},
                                              "female": {{$edad9}}
                                            },{
                                              "age": "91-100",
                                              "male": -{{$edad8}},
                                              "female": {{$edad7}}
                                            }, {
                                              "age": "81-90",
                                              "male": -{{$edad6}},
                                              "female": {{$edad5}}
                                            }, {
                                              "age": "71-80",
                                              "male": -{{$edad4}},
                                              "female": {{$edad3}}
                                            }, {
                                              "age": "60-70",
                                              "male": -{{$edad2}},
                                              "female": {{$edad1}}
                                            }];

                                            // Use only absolute numbers
                                            chart.numberFormatter.numberFormat = "#.#s";

                                            // Create axes
                                            var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
                                            categoryAxis.dataFields.category = "age";
                                            categoryAxis.renderer.grid.template.location = 0;
                                            categoryAxis.renderer.inversed = true;

                                            var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
                                            valueAxis.extraMin = 0.1;
                                            valueAxis.extraMax = 0.1;
                                            valueAxis.renderer.minGridDistance = 40;
                                            valueAxis.renderer.ticks.template.length = 5;
                                            valueAxis.renderer.ticks.template.disabled = false;
                                            valueAxis.renderer.ticks.template.strokeOpacity = 0.4;
                                            valueAxis.renderer.labels.template.adapter.add("text", function(text) {
                                              return text == "Male" || text == "Female" ? text : text ;
                                            })

                                            // Create series
                                            var male = chart.series.push(new am4charts.ColumnSeries());
                                            male.dataFields.valueX = "male";
                                            male.dataFields.categoryY = "age";
                                            male.clustered = false;

                                            var maleLabel = male.bullets.push(new am4charts.LabelBullet());
                                            maleLabel.label.text = "{valueX}";
                                            maleLabel.label.hideOversized = false;
                                            maleLabel.label.truncate = false;
                                            maleLabel.label.horizontalCenter = "right";
                                            maleLabel.label.dx = -10;

                                            var female = chart.series.push(new am4charts.ColumnSeries());
                                            female.dataFields.valueX = "female";
                                            female.dataFields.categoryY = "age";
                                            female.clustered = false;

                                            var femaleLabel = female.bullets.push(new am4charts.LabelBullet());
                                            femaleLabel.label.text = "{valueX}";
                                            femaleLabel.label.hideOversized = false;
                                            femaleLabel.label.truncate = false;
                                            femaleLabel.label.horizontalCenter = "left";
                                            femaleLabel.label.dx = 10;

                                            var maleRange = valueAxis.axisRanges.create();
                                            maleRange.value = -10;
                                            maleRange.endValue = 0;
                                            maleRange.label.text = "Masculino";
                                            maleRange.label.fill = chart.colors.list[0];
                                            maleRange.label.dy = 20;
                                            maleRange.label.fontWeight = '600';
                                            maleRange.grid.strokeOpacity = 1;
                                            maleRange.grid.stroke = male.stroke;

                                            var femaleRange = valueAxis.axisRanges.create();
                                            femaleRange.value = 0;
                                            femaleRange.endValue = 10;
                                            femaleRange.label.text = "Femenino";
                                            femaleRange.label.fill = chart.colors.list[1];
                                            femaleRange.label.dy = 20;
                                            femaleRange.label.fontWeight = '600';
                                            femaleRange.grid.strokeOpacity = 1;
                                            femaleRange.grid.stroke = female.stroke;

                                            }); // end am4core.ready()
                                            </script>

                                            <!-- HTML -->
                                            <div id="chartedad"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12 col-sm-12  ">
                                        <div class="x_panel">
                                          <div class="x_title">
                                            <h2>Enfermería<small></small></h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                              </li>
                                              <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                  </div>
                                              </li>
                                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                                              </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                          </div>
                                          <div class="x_content">
                                            <!-- patologicos -->
                                         <div class="col-md-8 col-sm-8  ">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>Antecedentes patológicos "FALTA"<small></small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                          </li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                              </div>
                                          </li>
                                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                                          </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">
                                        <!-- Chart code -->
                                        <script>
                                        am4core.ready(function() {

                                        // Themes begin
                                        am4core.useTheme(am4themes_material);
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end

                                        // Create chart instance
                                        var chart = am4core.create("chartdiv", am4charts.XYChart);
                                        chart.exporting.menu = new am4core.ExportMenu();

                                        // Add data
                                        chart.data = [{
                                          "country": "Hipertensión",
                                          "visits": 325
                                        }, {
                                          "country": "Diabetes",
                                          "visits": 182
                                        }, {
                                          "country": "EPOC",
                                          "visits": 109
                                        }, {
                                          "country": "Artritis",
                                          "visits": 122
                                        }, {
                                          "country": "Hipotiroidismo",
                                          "visits": 122
                                        }, {
                                          "country": "Enf. corazón",
                                          "visits": 114
                                        }, {
                                          "country": "Otro",
                                          "visits": 84
                                        }, {
                                          "country": "Ninguno",
                                          "visits": 11

                                        }];

                                        // Create axes
                                        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                                        categoryAxis.dataFields.category = "country";
                                        categoryAxis.renderer.grid.template.location = 0;
                                        categoryAxis.renderer.minGridDistance = 30;
                                        categoryAxis.renderer.labels.template.horizontalCenter = "right";
                                        categoryAxis.renderer.labels.template.verticalCenter = "middle";
                                        categoryAxis.renderer.labels.template.rotation = 270;
                                        categoryAxis.tooltip.disabled = true;
                                        categoryAxis.renderer.minHeight = 110;

                                        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                                        valueAxis.renderer.minWidth = 50;

                                        // Create series
                                        var series = chart.series.push(new am4charts.ColumnSeries());
                                        series.sequencedInterpolation = true;
                                        series.dataFields.valueY = "visits";
                                        series.dataFields.categoryX = "country";
                                        series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
                                        series.columns.template.strokeWidth = 0;

                                        series.tooltip.pointerOrientation = "vertical";

                                        series.columns.template.column.cornerRadiusTopLeft = 10;
                                        series.columns.template.column.cornerRadiusTopRight = 10;
                                        series.columns.template.column.fillOpacity = 0.8;

                                        // on hover, make corner radiuses bigger
                                        var hoverState = series.columns.template.column.states.create("hover");
                                        hoverState.properties.cornerRadiusTopLeft = 0;
                                        hoverState.properties.cornerRadiusTopRight = 0;
                                        hoverState.properties.fillOpacity = 1;

                                        series.columns.template.adapter.add("fill", function(fill, target) {
                                          return chart.colors.getIndex(target.dataItem.index);
                                        });

                                        // Cursor
                                        chart.cursor = new am4charts.XYCursor();


                                        }); // end am4core.ready()
                                        </script>

                                        <!-- HTML -->
                                        <div id="chartdiv"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- End patologicos -->
                                  <!-- Oxigenoterapia -->
                                  <div class="col-md-4 col-sm-4  ">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>Oxigenoterapia CHECK <small></small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                          </li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                              </div>
                                          </li>
                                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                                          </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">
                                        <!-- Chart code -->
                                        <script>
                                        am4core.ready(function() {

                                        // Themes begin
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end

                                        // Create chart instance
                                        var chart = am4core.create("chartoxigeno", am4charts.PieChart);

                                        // Add and configure Series
                                        var pieSeries = chart.series.push(new am4charts.PieSeries());
                                        pieSeries.dataFields.value = "litres";
                                        pieSeries.dataFields.category = "country";

                                        // Let's cut a hole in our Pie chart the size of 30% the radius
                                        chart.innerRadius = am4core.percent(30);

                                        // Put a thick  around each Slice
                                        pieSeries.slices.template.stroke = am4core.color("#fff");
                                        pieSeries.slices.template.strokeWidth = 2;
                                        pieSeries.slices.template.strokeOpacity = 1;
                                        pieSeries.slices.template
                                          // change the cursor on hover to make it apparent the object can be interacted with
                                          .cursorOverStyle = [
                                            {
                                              "property": "cursor",
                                              "value": "pointer"
                                            }
                                          ];

                                        pieSeries.alignLabels = false;
                                        pieSeries.labels.template.bent = true;
                                        pieSeries.labels.template.radius = 3;
                                        pieSeries.labels.template.padding(0,0,0,0);

                                        pieSeries.ticks.template.disabled = true;

                                        // Create a base filter effect (as if it's not there) for the hover to return to
                                        var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
                                        shadow.opacity = 0;

                                        // Create hover state
                                        var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

                                        // Slightly shift the shadow and make it more prominent on hover
                                        var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
                                        hoverShadow.opacity = 0.7;
                                        hoverShadow.blur = 5;

                                        chart.exporting.menu = new am4core.ExportMenu();
                                        chart.legend = new am4charts.Legend();

                                        chart.data = [{
                                          "country": "Si",
                                          "litres": {{$oxigenotera1}} 
                                        },{
                                          "country": "No",
                                          "litres": {{$oxigenotera2}}
                                        }];

                                        }); // end am4core.ready()
                                        </script>

                                        <!-- HTML -->
                                        <div id="chartoxigeno"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- end Oxigenoterapia -->
                                  <!-- Toxico -->
                                  <div class="col-md-8 col-sm-8  ">
                                 <div class="x_panel">
                                   <div class="x_title">
                                     <h2>Tóxico - Alérgico "Tóxico"<small></small></h2>
                                     <ul class="nav navbar-right panel_toolbox">
                                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                       </li>
                                       <li class="dropdown">
                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                             <a class="dropdown-item" href="#">Settings 1</a>
                                             <a class="dropdown-item" href="#">Settings 2</a>
                                           </div>
                                       </li>
                                       <li><a class="close-link"><i class="fa fa-close"></i></a>
                                       </li>
                                     </ul>
                                     <div class="clearfix"></div>
                                   </div>
                                   <div class="x_content">
                                     <div class="x_content">
                                         <!-- Chart code -->
                                         <script>
                                         am4core.ready(function() {

                                         // Themes begin
                                         am4core.useTheme(am4themes_material);
                                         am4core.useTheme(am4themes_animated);
                                         // Themes end

                                         // Create chart instance
                                         var chart = am4core.create("charttoxico", am4charts.XYChart);
                                         chart.exporting.menu = new am4core.ExportMenu();

                                         // Add data
                                         chart.data = [{
                                           "country": "Ninguno",
                                           "visits": 0
                                         }, {
                                           "country": "Fumador",
                                           "visits": {{$adiccion1}}
                                         }, {
                                           "country": "Alcoholismo",
                                           "visits": {{$adiccion2}}
                                         }, {
                                           "country": "Consumo SPA",
                                           "visits": {{$adiccion3}}
                                         }, {
                                           "country": "Otro",
                                           "visits": 0
                                         }];

                                         // Create axes
                                         var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                                         categoryAxis.dataFields.category = "country";
                                         categoryAxis.renderer.grid.template.location = 0;
                                         categoryAxis.renderer.minGridDistance = 30;
                                         categoryAxis.renderer.labels.template.horizontalCenter = "right";
                                         categoryAxis.renderer.labels.template.verticalCenter = "middle";
                                         categoryAxis.renderer.labels.template.rotation = 270;
                                         categoryAxis.tooltip.disabled = true;
                                         categoryAxis.renderer.minHeight = 110;

                                         var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                                         valueAxis.renderer.minWidth = 50;

                                         // Create series
                                         var series = chart.series.push(new am4charts.ColumnSeries());
                                         series.sequencedInterpolation = true;
                                         series.dataFields.valueY = "visits";
                                         series.dataFields.categoryX = "country";
                                         series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
                                         series.columns.template.strokeWidth = 0;

                                         series.tooltip.pointerOrientation = "vertical";

                                         series.columns.template.column.cornerRadiusTopLeft = 10;
                                         series.columns.template.column.cornerRadiusTopRight = 10;
                                         series.columns.template.column.fillOpacity = 0.8;

                                         // on hover, make corner radiuses bigger
                                         var hoverState = series.columns.template.column.states.create("hover");
                                         hoverState.properties.cornerRadiusTopLeft = 0;
                                         hoverState.properties.cornerRadiusTopRight = 0;
                                         hoverState.properties.fillOpacity = 1;

                                         series.columns.template.adapter.add("fill", function(fill, target) {
                                           return chart.colors.getIndex(target.dataItem.index);
                                         });

                                         // Cursor
                                         chart.cursor = new am4charts.XYCursor();


                                         }); // end am4core.ready()
                                         </script>

                                         <!-- HTML -->
                                         <div id="charttoxico"></div>
                                       </div>
                                   </div>
                                 </div>
                               </div>
                               <!-- end Toxico -->
                                  <!-- control medico -->
                                        <div class="col-md-4 col-sm-4  ">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>Control médico "CHECK"<small>últimos 3 meses</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                          </li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                              </div>
                                          </li>
                                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                                          </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">
                                        <!-- Chart code -->
                                        <script>
                                        am4core.ready(function() {

                                        // Themes begin
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end

                                        // Create chart instance
                                        var chart = am4core.create("chartcontrol", am4charts.PieChart);

                                        // Add and configure Series
                                        var pieSeries = chart.series.push(new am4charts.PieSeries());
                                        pieSeries.dataFields.value = "litres";
                                        pieSeries.dataFields.category = "country";

                                        // Let's cut a hole in our Pie chart the size of 30% the radius
                                        chart.innerRadius = am4core.percent(30);

                                        // Put a thick  around each Slice
                                        pieSeries.slices.template.stroke = am4core.color("#fff");
                                        pieSeries.slices.template.strokeWidth = 2;
                                        pieSeries.slices.template.strokeOpacity = 1;
                                        pieSeries.slices.template
                                          // change the cursor on hover to make it apparent the object can be interacted with
                                          .cursorOverStyle = [
                                            {
                                              "property": "cursor",
                                              "value": "pointer"
                                            }
                                          ];

                                        pieSeries.alignLabels = false;
                                        pieSeries.labels.template.bent = true;
                                        pieSeries.labels.template.radius = 3;
                                        pieSeries.labels.template.padding(0,0,0,0);

                                        pieSeries.ticks.template.disabled = true;

                                        // Create a base filter effect (as if it's not there) for the hover to return to
                                        var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
                                        shadow.opacity = 0;

                                        // Create hover state
                                        var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

                                        // Slightly shift the shadow and make it more prominent on hover
                                        var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
                                        hoverShadow.opacity = 0.7;
                                        hoverShadow.blur = 5;

                                        chart.exporting.menu = new am4core.ExportMenu();
                                        chart.legend = new am4charts.Legend();

                                        chart.data = [{
                                          "country": "Si",
                                          "litres": {{$atencionmedica1}}
                                        },{
                                          "country": "No",
                                          "litres": {{$atencionmedica2}}
                                        }];

                                        }); // end am4core.ready()
                                        </script>

                                        <!-- HTML -->
                                        <div id="chartcontrol"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- end control medico -->
                                  <!-- Ayudas técnicas -->
                                  <div class="col-md-8 col-sm-8  ">
                                   <div class="x_panel">
                                     <div class="x_title">
                                       <h2>Ayudas técnicas "CHECK"<small></small></h2>
                                       <ul class="nav navbar-right panel_toolbox">
                                         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                         </li>
                                         <li class="dropdown">
                                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                               <a class="dropdown-item" href="#">Settings 1</a>
                                               <a class="dropdown-item" href="#">Settings 2</a>
                                             </div>
                                         </li>
                                         <li><a class="close-link"><i class="fa fa-close"></i></a>
                                         </li>
                                       </ul>
                                       <div class="clearfix"></div>
                                     </div>
                                     <div class="x_content">
                                       <!-- Chart code -->
                                       <script>
                                       am4core.ready(function() {

                                       // Themes begin
                                       am4core.useTheme(am4themes_material);
                                       am4core.useTheme(am4themes_animated);
                                       // Themes end

                                       // Create chart instance
                                       var chart = am4core.create("chartayudas", am4charts.XYChart);
                                       chart.exporting.menu = new am4core.ExportMenu();

                                       // Add data
                                       chart.data = [{
                                         "country": "Prótesis dental",
                                         "visits": {{$ayudast1}}
                                       }, {
                                         "country": "Gafas",
                                         "visits": {{$ayudast2}}
                                       }, {
                                         "country": "Audífono auditivo",
                                         "visits": {{$ayudast3}}
                                       }, {
                                         "country": "Marcapasos",
                                         "visits": {{$ayudast4}}
                                       }, {
                                         "country": "Bastón",
                                         "visits": {{$ayudast5}}
                                       }, {
                                         "country": "Muletas",
                                         "visits": {{$ayudast6}}
                                       }, {
                                         "country": "Caminador",
                                         "visits": {{$ayudast7}}
                                       }, {
                                         "country": "Silla de ruedas",
                                         "visits": {{$ayudast8}}

                                       },
                                       {
                                           "country": "Otro",
                                           "visits": 0

                                         }];

                                       // Create axes
                                       var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                                       categoryAxis.dataFields.category = "country";
                                       categoryAxis.renderer.grid.template.location = 0;
                                       categoryAxis.renderer.minGridDistance = 30;
                                       categoryAxis.renderer.labels.template.horizontalCenter = "right";
                                       categoryAxis.renderer.labels.template.verticalCenter = "middle";
                                       categoryAxis.renderer.labels.template.rotation = 270;
                                       categoryAxis.tooltip.disabled = true;
                                       categoryAxis.renderer.minHeight = 110;

                                       var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                                       valueAxis.renderer.minWidth = 50;

                                       // Create series
                                       var series = chart.series.push(new am4charts.ColumnSeries());
                                       series.sequencedInterpolation = true;
                                       series.dataFields.valueY = "visits";
                                       series.dataFields.categoryX = "country";
                                       series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
                                       series.columns.template.strokeWidth = 0;

                                       series.tooltip.pointerOrientation = "vertical";

                                       series.columns.template.column.cornerRadiusTopLeft = 10;
                                       series.columns.template.column.cornerRadiusTopRight = 10;
                                       series.columns.template.column.fillOpacity = 0.8;

                                       // on hover, make corner radiuses bigger
                                       var hoverState = series.columns.template.column.states.create("hover");
                                       hoverState.properties.cornerRadiusTopLeft = 0;
                                       hoverState.properties.cornerRadiusTopRight = 0;
                                       hoverState.properties.fillOpacity = 1;

                                       series.columns.template.adapter.add("fill", function(fill, target) {
                                         return chart.colors.getIndex(target.dataItem.index);
                                       });

                                       // Cursor
                                       chart.cursor = new am4charts.XYCursor();


                                       }); // end am4core.ready()
                                       </script>

                                       <!-- HTML -->
                                       <div id="chartayudas"></div>
                                     </div>
                                   </div>
                                 </div>
                                 <!-- end ayudas tecnicas -->
                                 <!-- influenza -->
                                 <div class="col-md-4 col-sm-4  ">
                             <div class="x_panel">
                               <div class="x_title">
                                 <h2>Influenza "check"<small>últimos 3 meses</small></h2>
                                 <ul class="nav navbar-right panel_toolbox">
                                   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                   </li>
                                   <li class="dropdown">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                         <a class="dropdown-item" href="#">Settings 1</a>
                                         <a class="dropdown-item" href="#">Settings 2</a>
                                       </div>
                                   </li>
                                   <li><a class="close-link"><i class="fa fa-close"></i></a>
                                   </li>
                                 </ul>
                                 <div class="clearfix"></div>
                               </div>
                               <div class="x_content">
                                 <!-- Chart code -->
                                 <script>
                                 am4core.ready(function() {

                                 // Themes begin
                                 am4core.useTheme(am4themes_animated);
                                 // Themes end

                                 // Create chart instance
                                 var chart = am4core.create("chartinfluenza", am4charts.PieChart);

                                 // Add and configure Series
                                 var pieSeries = chart.series.push(new am4charts.PieSeries());
                                 pieSeries.dataFields.value = "litres";
                                 pieSeries.dataFields.category = "country";

                                 // Let's cut a hole in our Pie chart the size of 30% the radius
                                 chart.innerRadius = am4core.percent(30);

                                 // Put a thick  around each Slice
                                 pieSeries.slices.template.stroke = am4core.color("#fff");
                                 pieSeries.slices.template.strokeWidth = 2;
                                 pieSeries.slices.template.strokeOpacity = 1;
                                 pieSeries.slices.template
                                   // change the cursor on hover to make it apparent the object can be interacted with
                                   .cursorOverStyle = [
                                     {
                                       "property": "cursor",
                                       "value": "pointer"
                                     }
                                   ];

                                 pieSeries.alignLabels = false;
                                 pieSeries.labels.template.bent = true;
                                 pieSeries.labels.template.radius = 3;
                                 pieSeries.labels.template.padding(0,0,0,0);

                                 pieSeries.ticks.template.disabled = true;

                                 // Create a base filter effect (as if it's not there) for the hover to return to
                                 var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
                                 shadow.opacity = 0;

                                 // Create hover state
                                 var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

                                 // Slightly shift the shadow and make it more prominent on hover
                                 var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
                                 hoverShadow.opacity = 0.7;
                                 hoverShadow.blur = 5;

                                 chart.exporting.menu = new am4core.ExportMenu();
                                 chart.legend = new am4charts.Legend();

                                 chart.data = [{
                                   "country": "Si",
                                   "litres": {{$influenza1}}
                                 },{
                                   "country": "No",
                                   "litres": {{$influenza2}}
                                 }];

                                 }); // end am4core.ready()
                                 </script>

                                 <!-- HTML -->
                                 <div id="chartinfluenza"></div>
                               </div>
                             </div>
                           </div>
                           <!-- end influenza -->
                           <!-- YESAVAGE -->
                           <div class="col-md-6 col-sm-6  ">
                       <div class="x_panel">
                         <div class="x_title">
                           <h2>YESAVAGE "Uy no"<small>últimos 3 meses</small></h2>
                           <ul class="nav navbar-right panel_toolbox">
                             <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                             </li>
                             <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                   <a class="dropdown-item" href="#">Settings 1</a>
                                   <a class="dropdown-item" href="#">Settings 2</a>
                                 </div>
                             </li>
                             <li><a class="close-link"><i class="fa fa-close"></i></a>
                             </li>
                           </ul>
                           <div class="clearfix"></div>
                         </div>
                         <div class="x_content">
                           <!-- Chart code -->
                           <script>
                           am4core.ready(function() {

                           // Themes begin
                           am4core.useTheme(am4themes_animated);
                           // Themes end

                           // Create chart instance
                           var chart = am4core.create("chartyesavage", am4charts.PieChart);

                           // Add and configure Series
                           var pieSeries = chart.series.push(new am4charts.PieSeries());
                           pieSeries.dataFields.value = "litres";
                           pieSeries.dataFields.category = "country";

                           // Let's cut a hole in our Pie chart the size of 30% the radius
                           chart.innerRadius = am4core.percent(30);

                           // Put a thick  around each Slice
                           pieSeries.slices.template.stroke = am4core.color("#fff");
                           pieSeries.slices.template.strokeWidth = 2;
                           pieSeries.slices.template.strokeOpacity = 1;
                           pieSeries.slices.template
                             // change the cursor on hover to make it apparent the object can be interacted with
                             .cursorOverStyle = [
                               {
                                 "property": "cursor",
                                 "value": "pointer"
                               }
                             ];

                           pieSeries.alignLabels = false;
                           pieSeries.labels.template.bent = true;
                           pieSeries.labels.template.radius = 3;
                           pieSeries.labels.template.padding(0,0,0,0);

                           pieSeries.ticks.template.disabled = true;

                           // Create a base filter effect (as if it's not there) for the hover to return to
                           var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
                           shadow.opacity = 0;

                           // Create hover state
                           var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

                           // Slightly shift the shadow and make it more prominent on hover
                           var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
                           hoverShadow.opacity = 0.7;
                           hoverShadow.blur = 5;

                           chart.exporting.menu = new am4core.ExportMenu();
                           chart.legend = new am4charts.Legend();

                           chart.data = [{
                             "country": "Normal",
                             "litres": {{$yesavage1}}
                           },{
                             "country": "Depresión moderada",
                             "litres": {{$yesavage2}}
                           },{
                            "country": "Depresión Severa",
                            "litres": {{$yesavage3}}
                          }];

                           }); // end am4core.ready()
                           </script>

                           <!-- HTML -->
                           <div id="chartyesavage"></div>
                         </div>
                       </div>
                     </div>
                     <!-- end yesavage -->
                     <!-- PFEFFER -->
                     <div class="col-md-6 col-sm-6  ">
                 <div class="x_panel">
                   <div class="x_title">
                     <h2>PFEFFER "Uy no"<small>últimos 3 meses</small></h2>
                     <ul class="nav navbar-right panel_toolbox">
                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                       </li>
                       <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                             <a class="dropdown-item" href="#">Settings 1</a>
                             <a class="dropdown-item" href="#">Settings 2</a>
                           </div>
                       </li>
                       <li><a class="close-link"><i class="fa fa-close"></i></a>
                       </li>
                     </ul>
                     <div class="clearfix"></div>
                   </div>
                   <div class="x_content">
                     <!-- Chart code -->
                     <script>
                     am4core.ready(function() {

                     // Themes begin
                     am4core.useTheme(am4themes_animated);
                     // Themes end

                     // Create chart instance
                     var chart = am4core.create("chartpfeffer", am4charts.PieChart);

                     // Add and configure Series
                     var pieSeries = chart.series.push(new am4charts.PieSeries());
                     pieSeries.dataFields.value = "litres";
                     pieSeries.dataFields.category = "country";

                     // Let's cut a hole in our Pie chart the size of 30% the radius
                     chart.innerRadius = am4core.percent(30);

                     // Put a thick  around each Slice
                     pieSeries.slices.template.stroke = am4core.color("#fff");
                     pieSeries.slices.template.strokeWidth = 2;
                     pieSeries.slices.template.strokeOpacity = 1;
                     pieSeries.slices.template
                       // change the cursor on hover to make it apparent the object can be interacted with
                       .cursorOverStyle = [
                         {
                           "property": "cursor",
                           "value": "pointer"
                         }
                       ];

                     pieSeries.alignLabels = false;
                     pieSeries.labels.template.bent = true;
                     pieSeries.labels.template.radius = 3;
                     pieSeries.labels.template.padding(0,0,0,0);

                     pieSeries.ticks.template.disabled = true;

                     // Create a base filter effect (as if it's not there) for the hover to return to
                     var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
                     shadow.opacity = 0;

                     // Create hover state
                     var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

                     // Slightly shift the shadow and make it more prominent on hover
                     var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
                     hoverShadow.opacity = 0.7;
                     hoverShadow.blur = 5;

                     chart.exporting.menu = new am4core.ExportMenu();
                     chart.legend = new am4charts.Legend();

                     chart.data = [{
                       "country": "Normalidad",
                       "litres": {{$faq1}}
                     },{
                        "country": "Alteracion Funcional",
                        "litres": {{$faq2}}
                      }];

                     }); // end am4core.ready()
                     </script>

                     <!-- HTML -->
                     <div id="chartpfeffer"></div>
                   </div>
                 </div>
               </div>
               <!-- end pfeffer -->
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <!--nutricion -->
                                <div class="clearfix"></div>
                                <div class="row">
                                <div class="col-md-12 col-sm-12  ">
                                 <div class="x_panel">
                                   <div class="x_title">
                                     <h2>Tipo de dieta <small></small></h2>
                                     <ul class="nav navbar-right panel_toolbox">
                                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                       </li>
                                       <li class="dropdown">
                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                             <a class="dropdown-item" href="#">Settings 1</a>
                                             <a class="dropdown-item" href="#">Settings 2</a>
                                           </div>
                                       </li>
                                       <li><a class="close-link"><i class="fa fa-close"></i></a>
                                       </li>
                                     </ul>
                                     <div class="clearfix"></div>
                                   </div>
                                   <div class="x_content">
                                    <!-- Chart code -->
                                    <script>
                                    am4core.ready(function() {

                                    // Themes begin
                                    am4core.useTheme(am4themes_material);
                                    am4core.useTheme(am4themes_animated);
                                    // Themes end

                                    // Create chart
                                    var chart = am4core.create("chartdieta", am4charts.PieChart);
                                    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                                    chart.data = [
                                      {
                                        country: "Hipoglúcida",
                                        value: {{$dieta1}}
                                      },
                                      {
                                        country: "Hiposódica",
                                        value: {{$dieta2}}
                                      },
                                      {
                                        country: "Hipocalórica",
                                        value: {{$dieta3}}
                                      },
                                      {
                                        country: "Hipercalórica",
                                        value: {{$dieta4}}
                                      },
                                      {
                                        country: "Carne blanca",
                                        value: {{$dieta5}}
                                      },
                                      {
                                        country: "Normal",
                                        value: {{$dieta6}}
                                      }
                                    ];

                                    var series = chart.series.push(new am4charts.PieSeries());
                                    series.dataFields.value = "value";
                                    series.dataFields.radiusValue = "value";
                                    series.dataFields.category = "country";
                                    series.slices.template.cornerRadius = 6;
                                    series.colors.step = 3;

                                    series.hiddenState.properties.endAngle = -90;

                                    chart.legend = new am4charts.Legend();
                                    chart.exporting.menu = new am4core.ExportMenu();
                                    }); // end am4core.ready()
                                    </script>

                                    <!-- HTML -->
                                    <div id="chartdieta"></div>
                                   </div>
                                 </div>
                               </div>
                              </div>

                               <!-- end nutricion -->
                            <div class="clearfix"></div>
                                <div class="row">
                                  <div class="col-md-12 col-sm-12  ">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>Grupo poblacional <small></small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                          </li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                              </div>
                                          </li>
                                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                                          </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">
                                        <!-- Chart code -->
                                        <script>
                                        am4core.ready(function() {

                                        // Themes begin
                                        am4core.useTheme(am4themes_material);
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end

                                        // Create chart
                                        var chart = am4core.create("chartpoblacion", am4charts.PieChart);
                                        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                                        chart.data = [
                                          {
                                            country: "En discapacidad",
                                            value: {{$grupop1}}
                                          },
                                          {
                                            country: "Conflicto armado",
                                            value: {{$grupop2}}
                                          },
                                          {
                                            country: "Grupo étnico",
                                            value: {{$grupop3}}
                                          },
                                          {
                                            country: "Ninguno",
                                            value: {{$grupop4}}
                                          }
                                        ];

                                        var series = chart.series.push(new am4charts.PieSeries());
                                        series.dataFields.value = "value";
                                        series.dataFields.radiusValue = "value";
                                        series.dataFields.category = "country";
                                        series.slices.template.cornerRadius = 6;
                                        series.colors.step = 3;

                                        series.hiddenState.properties.endAngle = -90;

                                        chart.legend = new am4charts.Legend();
                                        chart.exporting.menu = new am4core.ExportMenu();
                                        }); // end am4core.ready()
                                        </script>

                                        <!-- HTML -->
                                        <div id="chartpoblacion"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12  ">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>Nivel de escolaridad <small></small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                          </li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                              </div>
                                          </li>
                                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                                          </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">
                                        <!-- Chart code -->
                                        <script>
                                        am4core.ready(function() {

                                        // Themes begin
                                        am4core.useTheme(am4themes_material);
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end



                                        var chart = am4core.create('chartescolaridad', am4charts.XYChart)
                                        chart.colors.step = 2;

                                        chart.legend = new am4charts.Legend()
                                        chart.legend.position = 'top'
                                        chart.legend.paddingBottom = 20
                                        chart.legend.labels.template.maxWidth = 95

                                        var xAxis = chart.xAxes.push(new am4charts.CategoryAxis())
                                        xAxis.dataFields.category = 'category'
                                        xAxis.renderer.cellStartLocation = 0.1
                                        xAxis.renderer.cellEndLocation = 0.9
                                        xAxis.renderer.grid.template.location = 0;

                                        var yAxis = chart.yAxes.push(new am4charts.ValueAxis());
                                        yAxis.min = 0;

                                        function createSeries(value, name) {
                                            var series = chart.series.push(new am4charts.ColumnSeries())
                                            series.dataFields.valueY = value
                                            series.dataFields.categoryX = 'category'
                                            series.name = name

                                            series.events.on("hidden", arrangeColumns);
                                            series.events.on("shown", arrangeColumns);

                                            var bullet = series.bullets.push(new am4charts.LabelBullet())
                                            bullet.interactionsEnabled = false
                                            bullet.dy = 30;
                                            bullet.label.text = '{valueY}'
                                            bullet.label.fill = am4core.color('#ffffff')

                                            return series;
                                        }

                                        chart.data = [
                                            {
                                                category: 'Primaria',
                                                first: {{$primaria1}},
                                                second: {{$primaria2}},
                                                third: {{$primaria3}}
                                            },
                                            {
                                                category: 'Secundaria',
                                                first: {{$secundaria1}},
                                                second: {{$secundaria2}},
                                                third: {{$secundaria3}}
                                            },
                                            {
                                                category: 'Superior',
                                                first: {{$superior1}},
                                                second: {{$superior2}},
                                                third: {{$superior3}}
                                            }
                                        ]


                                        createSeries('first', 'No presenta');
                                        createSeries('second', 'Incompleta');
                                        createSeries('third', 'Completa');

                                        function arrangeColumns() {

                                            var series = chart.series.getIndex(0);

                                            var w = 1 - xAxis.renderer.cellStartLocation - (1 - xAxis.renderer.cellEndLocation);
                                            if (series.dataItems.length > 1) {
                                                var x0 = xAxis.getX(series.dataItems.getIndex(0), "categoryX");
                                                var x1 = xAxis.getX(series.dataItems.getIndex(1), "categoryX");
                                                var delta = ((x1 - x0) / chart.series.length) * w;
                                                if (am4core.isNumber(delta)) {
                                                    var middle = chart.series.length / 2;

                                                    var newIndex = 0;
                                                    chart.series.each(function(series) {
                                                        if (!series.isHidden && !series.isHiding) {
                                                            series.dummyData = newIndex;
                                                            newIndex++;
                                                        }
                                                        else {
                                                            series.dummyData = chart.series.indexOf(series);
                                                        }
                                                    })
                                                    var visibleCount = newIndex;
                                                    var newMiddle = visibleCount / 2;

                                                    chart.series.each(function(series) {
                                                        var trueIndex = chart.series.indexOf(series);
                                                        var newIndex = series.dummyData;

                                                        var dx = (newIndex - trueIndex + middle - newMiddle) * delta

                                                        series.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
                                                        series.bulletsContainer.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
                                                    })
                                                }
                                            }
                                        }
                                        chart.exporting.menu = new am4core.ExportMenu();
                                        }); // end am4core.ready()
                                        </script>

                                        <!-- HTML -->
                                        <div id="chartescolaridad"></div>
                                      </div>
                                    </div>
                                  </div>
                                   </div>
                              </div>

                                  <div class="col-md-12 col-sm-12  ">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>EPS <small></small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                          </li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                              </div>
                                          </li>
                                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                                          </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">
                                        <!-- Chart code -->
                                        <script>
                                        am4core.ready(function() {

                                        // Themes begin
                                        am4core.useTheme(am4themes_material);
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end

                                        // Create chart instance
                                        var chart = am4core.create("chartepss", am4charts.XYChart);
                                        chart.exporting.menu = new am4core.ExportMenu();

                                        // Add data
                                        chart.data = [{
                                          "country": "Salud vida",
                                          "visits": 25
                                        }, {
                                          "country": "Gafas",
                                          "visits": 82
                                        }, {
                                          "country": "Audífono auditivo",
                                          "visits": 9
                                        }, {
                                          "country": "Marcapasos",
                                          "visits": 22
                                        }, {
                                          "country": "Bastón",
                                          "visits": 22
                                        }, {
                                          "country": "Muletas",
                                          "visits": 14
                                        },
                                        {
                                            "country": "eps",
                                            "visits": 11

                                          }, {
                                            "country": "eps2",
                                            "visits": 11

                                          }, {
                                            "country": "eps3",
                                            "visits": 11

                                          }, {
                                            "country": "eps4",
                                            "visits": 11

                                          }, {
                                            "country": "eps5",
                                            "visits": 11

                                          }, {
                                            "country": "eps6s",
                                            "visits": 11

                                          }, {
                                            "country": "eps7",
                                            "visits": 11

                                          }, {
                                            "country": "eps78",
                                            "visits": 11

                                          }, {
                                          "country": "asdasa",
                                          "visits": 11

                                        },
                                        {
                                            "country": "Sasd",
                                            "visits": 11

                                          },
                                          {
                                            "country": "asd",
                                            "visits": 11

                                          },
                                          {
                                            "country": "ada",
                                            "visits": 11

                                          },
                                          {
                                            "country": "aasfsaf",
                                            "visits": 11

                                          },
                                          {
                                            "country": "asdasdas",
                                            "visits": 11

                                          },
                                          {
                                            "country": "qweqwe",
                                            "visits": 11

                                          },
                                        {
                                            "country": "Otro",
                                            "visits": 11

                                          }];

                                        // Create axes
                                        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                                        categoryAxis.dataFields.category = "country";
                                        categoryAxis.renderer.grid.template.location = 0;
                                        categoryAxis.renderer.minGridDistance = 30;
                                        categoryAxis.renderer.labels.template.horizontalCenter = "right";
                                        categoryAxis.renderer.labels.template.verticalCenter = "middle";
                                        categoryAxis.renderer.labels.template.rotation = 270;
                                        categoryAxis.tooltip.disabled = true;
                                        categoryAxis.renderer.minHeight = 110;

                                        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                                        valueAxis.renderer.minWidth = 50;

                                        // Create series
                                        var series = chart.series.push(new am4charts.ColumnSeries());
                                        series.sequencedInterpolation = true;
                                        series.dataFields.valueY = "visits";
                                        series.dataFields.categoryX = "country";
                                        series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
                                        series.columns.template.strokeWidth = 0;

                                        series.tooltip.pointerOrientation = "vertical";

                                        series.columns.template.column.cornerRadiusTopLeft = 10;
                                        series.columns.template.column.cornerRadiusTopRight = 10;
                                        series.columns.template.column.fillOpacity = 0.8;

                                        // on hover, make corner radiuses bigger
                                        var hoverState = series.columns.template.column.states.create("hover");
                                        hoverState.properties.cornerRadiusTopLeft = 0;
                                        hoverState.properties.cornerRadiusTopRight = 0;
                                        hoverState.properties.fillOpacity = 1;

                                        series.columns.template.adapter.add("fill", function(fill, target) {
                                          return chart.colors.getIndex(target.dataItem.index);
                                        });

                                        // Cursor
                                        chart.cursor = new am4charts.XYCursor();
                                        chart.exporting.menu = new am4core.ExportMenu();

                                        }); // end am4core.ready()
                                        </script>

                                        <!-- HTML -->
                                        <div id="chartepss"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12  ">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>EPS <small></small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                          </li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                              </div>
                                          </li>
                                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                                          </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">
                                        <!-- Chart code -->
                                        <script>
                                        am4core.ready(function() {

                                        // Themes begin
                                        am4core.useTheme(am4themes_material);
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end

                                        var chart = am4core.create("charteps", am4charts.XYChart);

                                        var data = [];
                                        var value = 120;

                                        var names = ["Raina",
                                          "Demarcus",
                                          "Carlo",
                                          "Jacinda",
                                          "Richie",
                                          "Antony",
                                          "Amada",
                                          "Idalia",
                                          "Janella",
                                          "Marla",
                                          "Curtis",
                                          "Shellie",
                                          "Meggan",
                                          "Nathanael",
                                          "Jannette",
                                          "Tyrell",
                                          "Sheena",
                                          "Maranda",
                                          "Briana",
                                          "Rosa",
                                          "Rosanne",
                                          "Herman",
                                          "Wayne",
                                          "Shamika",
                                          "Suk",
                                          "Clair",
                                          "Olivia",
                                          "Hans",
                                          "Glennie",
                                        ];

                                        for (var i = 0; i < names.length; i++) {
                                          value += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 5);
                                          data.push({ category: names[i], value: value });
                                        }

                                        chart.data = data;
                                        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                                        categoryAxis.renderer.grid.template.location = 0;
                                        categoryAxis.dataFields.category = "category";
                                        categoryAxis.renderer.minGridDistance = 15;
                                        categoryAxis.renderer.grid.template.location = 0.5;
                                        categoryAxis.renderer.grid.template.strokeDasharray = "1,3";
                                        categoryAxis.renderer.labels.template.rotation = -90;
                                        categoryAxis.renderer.labels.template.horizontalCenter = "left";
                                        categoryAxis.renderer.labels.template.location = 0.5;

                                        categoryAxis.renderer.labels.template.adapter.add("dx", function(dx, target) {
                                            return -target.maxRight / 2;
                                        })

                                        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                                        valueAxis.tooltip.disabled = true;
                                        valueAxis.renderer.ticks.template.disabled = true;
                                        valueAxis.renderer.axisFills.template.disabled = true;

                                        var series = chart.series.push(new am4charts.ColumnSeries());
                                        series.dataFields.categoryX = "category";
                                        series.dataFields.valueY = "value";
                                        series.tooltipText = "{valueY.value}";
                                        series.sequencedInterpolation = true;
                                        series.fillOpacity = 0;
                                        series.strokeOpacity = 1;
                                        series.strokeDashArray = "1,3";
                                        series.columns.template.width = 0.01;
                                        series.tooltip.pointerOrientation = "horizontal";

                                        var bullet = series.bullets.create(am4charts.CircleBullet);

                                        chart.cursor = new am4charts.XYCursor();

                                        chart.exporting.menu = new am4core.ExportMenu();

                                        }); // end am4core.ready()
                                        </script>

                                        <!-- HTML -->
                                        <div id="charteps"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12  ">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>Nivel de SISBEN <small></small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                          </li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                              </div>
                                          </li>
                                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                                          </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">
                                        <!-- Chart code -->
                                        <script>
                                        am4core.ready(function() {

                                        // Themes begin
                                        am4core.useTheme(am4themes_material);
                                        am4core.useTheme(am4themes_animated);
                                        // Themes end

                                        // Create chart
                                        var chart = am4core.create("chartsisben", am4charts.PieChart);
                                        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                                        chart.data = [
                                          {
                                            country: "Nivel 1",
                                            value: {{$psisben1}}
                                          },
                                          {
                                            country: "Nivel 2",
                                            value: {{$psisben2}}
                                          },
                                          {
                                            country: "Nivel 3",
                                            value: {{$psisben3}}
                                          }
                                        ];

                                        var series = chart.series.push(new am4charts.PieSeries());
                                        series.dataFields.value = "value";
                                        series.dataFields.radiusValue = "value";
                                        series.dataFields.category = "country";
                                        series.slices.template.cornerRadius = 6;
                                        series.colors.step = 3;

                                        series.hiddenState.properties.endAngle = -90;

                                        chart.legend = new am4charts.Legend();
                                        chart.exporting.menu = new am4core.ExportMenu();
                                        }); // end am4core.ready()
                                        </script>

                                        <!-- HTML -->
                                        <div id="chartsisben"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- page encabezado -->


                    </div>

                </div>
                <!-- End row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->


        <!-- ============================================================== -->
        <!-- End Page wrapper  CALENDARIO -->
        <!-- ==============================================================


         <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="">
                                <div class="row">
                                    <div class="col-right pr-0">
                                        <div class="card-bottom">
                                            <h4 class="card-title mt-2">Drag & Drop Event</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="calendar-events" class="">
                                                        <div class="calendar-events mb-3" data-class="bg-info"><i
                                                                class="fa fa-circle text-info mr-2"></i>Event One</div>
                                                        <div class="calendar-events mb-3" data-class="bg-success"><i
                                                                class="fa fa-circle text-success mr-2"></i> Event Two
                                                        </div>
                                                        <div class="calendar-events mb-3" data-class="bg-danger"><i
                                                                class="fa fa-circle text-danger mr-2"></i>Event Three
                                                        </div>
                                                        <div class="calendar-events mb-3" data-class="bg-warning"><i
                                                                class="fa fa-circle text-warning mr-2"></i>Event Four
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="card-body b-l calender-sidebar">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
@endsection
