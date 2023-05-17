<!-- "Варіант 3" -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent</title>
</head>
<body>
    <h2>Отриманий дохід з прокату станом на обрану дату</h2>
    <form action="CostOfRent.php" method="post">
        
        <select name="CostOfRent">
            <?php
            include("connect.php");
            require_once("connect.php");
            $collections = (new MongoDB\Client)->Lb6_Var6->rent;
            $endDates = $collections->distinct('endDate');
          foreach($endDates as $endDate)
         {
             echo '<option value = "' .$endDate. '">' .$endDate . '</option>';
         }
        ?>
        </select>
            <input type="submit" value="Результат">       
    </form>
    <h2>Автомобілі з пробігом, меншим за вказаний</h2>
<form action="carsMileage.php" method="post">
    <select name="CarsMileagee">
        <?php
        include("connect.php");
        require_once("connect.php");
        $collections = (new MongoDB\Client)->Lb6_Var6->cars;
        $mileages = $collections->distinct('mileages');
        foreach($mileages as $mileage)
        {
            echo '<option value="' . $mileage . '">' . $mileage . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="Результат">
</form>

<form action="process.php" method="post">
    <h2>Наявні в цьому пункті марки автомобілів</h2>
    <select name="id" id="id">
        <?php
        include("connect.php");
        $collections = (new MongoDB\Client)->Lb6_Var6->rent;
        $ids = $collections->distinct('id');
        foreach($ids as $id)
        {
            echo '<option value="' . $id . '">' . $id . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="Отримати марки автомобілів">
</form>


    <script>
        const data = localStorage.getItem("request");
        const result = JSON.parse(data);
        if (result.length > 0) {
            let output = "";
            result.forEach(function(element){
                output += " " + element;
            });
            document.write("Попередній запит:" + output);
        }
    </script>
</body>
</html>