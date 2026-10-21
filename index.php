<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate House Electricity Bill</title>
</head>
<body>
    <div>
        <table border="1">
            <tr> 
                <th>Block Tariff (per month)</th>
                <th>Unit</th>
                <th>Rate</th>
            </tr>
            <tr> 
                <td>For the first 200 kWh (1-200 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.128</td>
            </tr>
            <tr> 
                <td>For the next 100 kWh (201-300 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.344</td>
            </tr>
            <tr> 
                <td>For the next 300 kWh (301-600 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.516</td>
            </tr>
            <tr> 
                <td>For the next 300 kWh (601-900 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.546</td>
            </tr>
            <tr> 
                <td>For the next kWh (901 kWh onwards) per month</td>
                <td>sen/kWh</td>
                <td>0.571</td>
            </tr>
            <tr>
                <td>The minimum monthly chafe is RM300</td>
            </tr>
        </table>
    </div>
    <?php
    include "process.php";
    if($error!=""){
        echo "<p style='color:red;'>". $error."</p>";
    }
    ?>
    <div>
        <form action="" method="post">
            <br>
            <label for="">Enter your first 200 kWh (1-200 kWh) per month</label>
            <input type="number" name="first" id="" >
            <br>
            <br>
            <label for="">Enter next 100 kWh (201-300 kWh) per month</label>
            <input type="number" name="second" id="" >
            <br>
            <br>
            <label for="">Enter next 300 kWh (301–600 kWh) per month</label>
            <input type="number" name="third" id="" >
            <br>
            <br>
            <label for="">Enter next 300 kWh (601-900 kWh) per month</label>
            <input type="number" name="fourth" id="" >
            <br>
            <br>
            <label for="">For the next kWh (901 kWh onwards) per month</label>
            <input type="number" name="fifth" id="" >
            <br>
            <br>
            <input type="submit" name="calculate" value="Calculate">
            <input type="submit" name="reset" value="Reset">
        </form>
    </div>                 
</body>
</html>
<?php
if($showbill){
echo "First input: " . $firstkwh . " * 0.218 = RM" . $firstcharge . "<br>";
echo "Second input: " . $secondkwh . " * 0.218 = RM" . $secondcharge . "<br>";
echo "Third input: " . $thirdkwh . " * 0.218 = RM" . $thirdcharge . "<br>";
echo "Fourth input: " . $fourthkwh . " * 0.218 = RM" . $fourthcharge . "<br>";
echo "Fifth input: " . $fifthkwh . " * 0.218 = RM" . $fifthcharge . "<br>";

echo "Total kWh: " . $totalkwh . "kWh<br>";
echo "Total Charge: RM" . $totalcharge . "<br>";
echo "Total SST: RM" . $sst . "<br>";
echo "Total Bill: RM" . $totalbill . "<br>";
}
?>