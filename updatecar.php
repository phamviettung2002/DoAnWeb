<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="file.css/updatecar.css">
</head>
<body>
    <div>
        <h1>Update Car</h2>
    </div>

    <?php 
        require_once ("models/model.php");
        $getmethodofModel = new Model();
        $car = $getmethodofModel->getCar($_GET["carid"]);
    
    ?>

    <form method = "post" action = "">
        <div class = "container">
        <div class = "row">
                <div class = "col-md-6">
                    <label class = "lb" for="carname">Tên xe:</label>
                    <input class = "btn-input" type="text" name = "carname" value = "<?php echo $car->getname(); ?>"> <br/>

                    <label class = "lb" for="cartitle">Biệt danh:</label>
                    <input class = "btn-input" type="text" name = "cartitle" value = "<?php echo $car->gettitle(); ?>"><br/>

                    <label class = "lb" for="carprice">Giá:</label>
                    <input class = "btn-input" type="text" name = "carprice" value = "<?php echo $car->getprice(); ?>"><br/>

                    <label class = "lb" for="carimage">Hình:</label>
                    <input class = "btn-input" type="text" name = "carimage" value = "<?php echo $car->getimage(); ?>"><br/>

                    <label class = "lb" for="carimage1">Hình 1:</label>
                    <input class = "btn-input" type="text" name = "carimage1" value = "<?php echo $car->getimage1(); ?>"><br/>

                    <label class = "lb" for="carimage2">Hình 2:</label>
                    <input class = "btn-input" type="text" name = "carimage2" value = "<?php echo $car->getimage2(); ?>"><br/>

                    <label class = "lb" for="carnumberofseats">Số ghế:</label>
                    <input class = "btn-input" type="text" name = "carnumberofseats" value = "<?php echo $car->getnumberofseats(); ?>"><br/>

                    <label class = "lb" for="carstyle">Kiểu dáng:</label>
                    <input class = "btn-input" type="text" name = "carstyle" value = "<?php echo $car->getstyle(); ?>"><br/>

                    <label class = "lb" for="carfuel">Nhiên liệu:</label>
                    <input class = "btn-input" type="text" name = "carfuel" value = "<?php echo $car->getfuel(); ?>"><br/>

                    <label class = "lb" for="carorigin">Xuất sứ:</label>
                    <input class = "btn-input" type="text" name = "carorigin" value = "<?php echo $car->getorigin(); ?>"><br/>

                    <label class = "lb" for="cargear">Hộp số:</label>
                    <input class = "btn-input" type="text" name = "cargear" value = "<?php echo $car->getgear(); ?>"><br/>
                </div>

                <div class = "col-md-6">
                    <label class = "lb" for="cardescription">Mô tả:</label>
                    <textarea class = "btn-input"  type="text" name = "cardescription" rows="17" cols="62" style = "margin-left: 0px;"><?php echo $car->getdescription(); ?></textarea>
                </div>
            </div>

            <div class = "row row-footer">
                <input class = "btn-action" type="submit" value = "Update">
                <a href = "index.php" class = "btn-action" style = "text-decoration: none;">Back</a>
            </div>
        </div>
    </form>

    <?php
        if (isset($_POST['carname'], $_POST['cartitle'], $_POST['carprice'], $_POST['carimage'], $_POST['carimage1'], $_POST['carimage2'], $_POST['cardescription'], $_POST['carnumberofseats'], $_POST['carstyle'], $_POST['carfuel'],$_POST['carorigin'], $_POST['cargear'])){
            $carname = $_POST["carname"];
            $cartitle = $_POST['cartitle'];
            $carprice = $_POST['carprice'];
            $carimage = $_POST['carimage'];
            $carimage1 = $_POST['carimage1'];
            $carimage2 = $_POST['carimage2'];
            $cardescription = $_POST['cardescription'];
            $carnumberofseats = $_POST['carnumberofseats'];
            $carstyle = $_POST['carstyle'];
            $carfuel = $_POST['carfuel'];
            $carorigin = $_POST['carorigin'];
            $cargear = $_POST['cargear'];

            require_once "models/md_updatecar.php";
            getupdatecar($carname, $cartitle, $carprice, $carimage, $carimage1, $carimage2, $cardescription, $carnumberofseats, $carstyle, $carfuel, $carorigin, $cargear, $_GET["carid"]);
        }
        
    ?>
</body>
 </html> 