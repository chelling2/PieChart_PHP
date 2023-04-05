<!DOCTYPE html>
<html>

<head>
    <title>피자 재료분석 차트 </title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            "packages": ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var pizza = [
                <?php
                $rows = [];
                for ($i = 1; $i <= 5; $i++) {
                    $material_name = isset($_POST["material_name$i"]) ? $_POST["material_name$i"] : "";
                    $amount_count = isset($_POST["amount_count$i"]) ? intval($_POST["amount_count$i"]) : 0;

                    if (!empty($material_name) && $amount_count > 0) {
                        $rows[] = '["' . $material_name . '", ' . $amount_count . ']';
                    }
                }
                echo implode(',', $rows);
                ?>
            ];
            var data = new google.visualization.DataTable();
            data.addColumn('string', '재료');
            data.addColumn('number', '개수');
            data.addRows(pizza);

            var options = {
                title: "재료분석 파이 차트"
            };

            var chart = new google.visualization.PieChart(document.getElementById("piechart"));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <center>
        <div id="piechart" style="width: 800px; height: 600px;"></div>
    </center>
</body>

</html>