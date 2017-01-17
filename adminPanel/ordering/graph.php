<?php

require("../../db/db.php"); //provides database connection

require("charts/fusioncharts.php"); //loading the library for charts


?>


<!-- You need to include the following JS file to render the chart.
When you make your own charts, make sure that the path to this JS file is correct.
Else, you will get JavaScript errors. -->

<script type="text/javascript" src="charts/fusioncharts.js"></script>

<?php

    
    $sql = "Select count(Email) as Number,Date from reportorder GROUP BY date"; //sql query to get the number of orders on each day

    // Execute the query
    $result =mysqli_query($db,$sql);

    // If the query returns a valid response prepare the JSON string
    if ($result) {
        // The `$arrData` array holds the chart attributes and data
        $arrData = array(
            "chart" => array(
              "caption" => "Online orders on daily basis",
              "paletteColors" => "#0075c2",
              "bgColor" => "#ffffff",
              "borderAlpha"=> "50",
              "canvasBorderAlpha"=> "0",
              "usePlotGradientColor"=> "0",
              "plotBorderAlpha"=> "10",
              "showXAxisLine"=> "1",
			   "xAxisName"=> "Date",
              "xAxisLineColor" => "#999999",
              "showValues" => "0",
              "divlineColor" => "#999999",
              "divLineIsDashed" => "1",
              "showAlternateHGridColor" => "0",
			   "yAxisName"=> "Number of online orders"
            )
        );

        $arrData["data"] = array();

// Push the data into the array
        while($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
            "label" => $row["Date"],
            "value" => $row["Number"]
            )
        );
        }

        /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

        $jsonEncodedData = json_encode($arrData);



		//fusinchart(type of chart,chart id,chart width,height,division id to render the chart,data format,data source)
        $columnChart = new FusionCharts("column2D", "myFirstChart" , 700, 500, "chart-1", "json", $jsonEncodedData);

        // Render the chart
        $columnChart->render();

        // Close the database connection
        $db->close();
    }

?>

<div id="chart-1"><!-- Fusion Charts will render here--></div>