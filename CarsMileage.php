<?php
include("connect.php");

$CarsMileagee = $_POST["CarsMileagee"];

    $collections = (new MongoDB\Client)->Lb6_Var6->cars;
    
    $filter = ['mileages' => ['$lt' => $CarsMileagee]]; // get cars with mileage less than selected
    $projection = ['carBrands' => 1];
    $cursor = $collections->find($filter, $projection);

    $result = array();
    foreach ($cursor as $Documents) 
    {
        foreach ($Documents['carBrands'] as $carBrand)
            {
                $result[] = $carBrand;
            }
    }

    $unique_carBrands = array_unique($result);
    foreach ($unique_carBrands as $carBrand) {
        echo $carBrand. "<br>";
    }

    echo "<script>localStorage.setItem('request', '" . json_encode($result)."'); </script>";
?>
