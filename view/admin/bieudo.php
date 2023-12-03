<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <link rel="stylesheet" href="./conten/cssadmin.css">

    <style>
        
        .highcharts-credits {
            display: none;
        }
        div#chart-container {
    margin: 30px 0;
    position: relative;
}
.ab {
    position: absolute;
    left: 30px;
    z-index: 15;
}
    </style>
</head>
<?php
        $newData = array();
        foreach ($data as $value) {
            if ($value['type'] == 1) {
                $newData[] = array(
                    'date' => $value['date'],
                    'total' => (int)$value['total']
                );
            }
        }
        // echo "<pre>";
        // print_r($newData);
        // echo "</pre>";
        ?>
        
<body>
<a href="index.php?action=admin" target="_blank" rel="noopener noreferrer" class="btn ab" >Back</a>

    <div id="chart-container"></div>

    <script>
       

        let data = <?=json_encode($newData)?>;
        // console.log(data);
        // for (var i = 0; i < data.length; i++) {
        //     data[i].total = parseInt(data[i].total);
        // }
    
        // var data1 = [{
        //     "date": "2013-10-03",
        //     "total": 400
        // },
        // ]
        // console.log(data1);
      
        

        var aggregatedData = {};
        var aggregatedMonthlyData = {};
        var aggregatedYearlyData = {};
        var total2016 = 0;

        data.forEach(function(item) {
            var date = item.date;
            var year = date.substring(0, 4);
            var month = date.substring(5, 7);
            if (year === "2016") {
                total2016 += item.total;
            }
            if (aggregatedData[date]) {
                aggregatedData[date] += item.total;
            } else {
                aggregatedData[date] = item.total;
            }

            var yearMonth = year + "-" + month;
            if (aggregatedMonthlyData[yearMonth]) {
                aggregatedMonthlyData[yearMonth] += item.total;
            } else {
                aggregatedMonthlyData[yearMonth] = item.total;
            }

            if (aggregatedYearlyData[year]) {
                aggregatedYearlyData[year] += item.total;
            } else {
                aggregatedYearlyData[year] = item.total;
            }
        });

        var formattedData = Object.keys(aggregatedData).map(function(date) {
            var dateParts = date.split("-");
            var year = parseInt(dateParts[0]);
            var month = parseInt(dateParts[1]) - 1; // Trừ 1 vì tháng trong JavaScript bắt đầu từ 0
            var day = parseInt(dateParts[2]);

            return [Date.UTC(year, month, day), aggregatedData[date]];
        });

        var formattedMonthlyData = Object.keys(aggregatedMonthlyData).map(function(
            yearMonth
        ) {
            var year = parseInt(yearMonth.substring(0, 4));
            var month = parseInt(yearMonth.substring(5, 7)) - 1; // Trừ 1 vì tháng trong JavaScript bắt đầu từ 0

            return [Date.UTC(year, month), aggregatedMonthlyData[yearMonth]];
        });

        var formattedYearlyData = Object.keys(aggregatedYearlyData).map(function(year) {
            return [Date.UTC(parseInt(year), 0, 1), aggregatedYearlyData[year]];
        });

        Highcharts.chart("chart-container", {
            title: {
                text: "Biểu đồ thống kê tổng số tiền theo ngày, tháng và năm",
            },
            xAxis: {
                type: "datetime",
                dateTimeLabelFormats: {
                    day: "%e-%b-%Y", // Định dạng ngày-tháng (VD: 1-Oct-2023)
                    month: "%b-%Y", // Định dạng tháng-năm (VD: Oct-2023)
                    year: "%Y", // Định dạng năm (VD: 2023)
                },
                title: {
                    text: "Ngày",
                },
            },
            yAxis: {
                title: {
                    text: "Tổng số tiền",
                },
            },
            series: [{
                    name: "Tổng số tiền theo ngày",
                    data: formattedData ,
                    // [1,2,3,4,5] cua zai ['1','2','3']
                },
                {
                    name: "Tổng số tiền theo tháng",
                    data: formattedMonthlyData,
                },
                {
                    name: "Tổng số tiền theo năm",
                    data: formattedYearlyData,
                },
            ],
        });
    </script>
</body>

</html>