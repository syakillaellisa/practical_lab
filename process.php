<?php

$error = "";
$showbill = false;
//check if the form is submitted dan ada value ke dak
if (isset($_POST['calculate'])) {
    // echo "The input for the first kwh: " . $_POST['first'];

    // get the data from the form and store it in variable
    $firstkwh = $_POST['first'];
    $secondkwh = $_POST['second'];
    $thirdkwh = $_POST['third'];
    $fourthkwh = $_POST['fourth'];
    $fifthkwh = $_POST['fifth'];

    //if user did not input any value, set the value to 0
    //validation 1
    if ($firstkwh == "")
        $firstkwh = 0;
    if ($secondkwh == "")
        $secondkwh = 0;
    if ($thirdkwh == "")
        $thirdkwh = 0;
    if ($fourthkwh == "")
        $fourthkwh = 0;
    if ($fifthkwh == "")
        $fifthkwh = 0;

    //validation 2
    //check if the input is negative number
    if ($firstkwh < 0 || $secondkwh < 0 || $thirdkwh < 0 || $fourthkwh < 0 || $fifthkwh < 0) {
        $error = "<br>Invalid input. Please enter a positive number.";
        //validation 3
        //check if the input exceed the limit
    } else if ($firstkwh > 200)
        $error = "<br>Invalid input. The first kWh should not exceed 200.";
    else if ($secondkwh > 100)
        $error = "<br>Invalid input. The second kWh should not exceed 100.";
    else if ($thirdkwh > 300)
        $error = "<br>Invalid input. The third kWh should not exceed 300.";
    else if ($fourthkwh > 300)
        $error = "<br>Invalid input. The fourth kWh should not exceed 300.";

    //sambung minggu depan validation keempat, tambah semua kalau kosong, 
    //keluar warning kata kena tulis at least tulis satu value
    else if ($firstkwh + $secondkwh + $thirdkwh + $fourthkwh + $fifthkwh == 0)
        $error = "Please enter at least one value!!!";
    else {        
        $firstcharge = $firstkwh * 0.218;
        $secondcharge = $secondkwh * 0.334;
        $thirdcharge = $thirdkwh * 0.516;
        $fourthcharge = $fourthkwh * 0.546;
        $fifthcharge = $fifthkwh * 0.571;

        //totalkwh
        $totalkwh = $firstkwh + $secondkwh + $thirdkwh + $fourthkwh + $fifthkwh;
        //total rm
        $totalcharge = $firstcharge + $secondcharge + $thirdcharge + $fourthcharge + $fifthcharge;
        //total sst; 6% if above 600kwh
        if($totalcharge > 600) {
            $sst = $totalcharge + 0.06;
            //$totalcharge += $sst; //pendek sikit
            //$totalcharge = $totalcharge + $sst;
        } else {
            $sst = 0;
        }
        $totalbill = $totalcharge + $sst;
        $showbill = true;

    }
}
?>