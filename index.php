<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./res/bootstrap.css">
    <link rel="stylesheet" href="./res/style.css">
</head>
<body>
    <div class="div_main rounded p-4">
        <form action="index.php" method="get">
            <fieldset>
                <h2 class="titulo">comparar datas</h2>
                <ul>
                    <li>
                        <label for="date_1">Data 1</label>
                        <input type="date" name="date_1" id="date_1" class="form form-control">
                    </li>
                    <li>
                        <label for="date_2">Data 2</label>
                        <input type="date" name="date_2" id="date_2" class="form form-control">
                    </li>
                    <li>
                        <input type="submit" value="Comparar" class="btn btn-outline-success">
                    </li>
                </ul>
            </fieldset>
        </form>
        <?php
            $date1 = (isset($_GET["date_1"]))?$_GET["date_1"]:false;
            $date2 = (isset($_GET["date_2"]))?$_GET["date_2"]:false;

            if($date1 and $date2){

                $dateFormat1 = new DateTime($date1);
                $dateFormat2 = new DateTime($date2);

                $dateDiff = $dateFormat1->diff($dateFormat2);

                echo "<hr>";
                echo "<h3> A diferença de dias é de:".  $dateDiff->days . " </h3>";
            }
        ?>
    </div>
    <script src="./res/jquery.js"></script>
    <script src="./res/popper.js"></script>
    <script src="./res/bootstrap.js"></script>
</body>
</html>