<?php
    require_once("models/db_module.php");

    function getupdatecar($carname, $cartitle, $carprice, $carimage, $carimage1, $carimage2, $cardescription, $carnumberofseats, $carstyle, $carfuel, $carorigin, $cargear, $id)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanKhongTraVeDL ($link, "update tbl_car set  name = '".$carname."',
                                                                            title = '".$cartitle."',
                                                                            price = '".$carprice."',
                                                                            image = '".$carimage."',
                                                                            image1 = '".$carimage1."',
                                                                            image2 = '".$carimage2."',
                                                                            description = '".$cardescription."',
                                                                            numberofseats = '".$carnumberofseats."',
                                                                            style = '".$carstyle."',
                                                                            fuel = '".$carfuel."',
                                                                            origin = '".$carorigin."',
                                                                            gear = '".$cargear."'
                                                                            where id = ".$id);
            giaiPhongBoNho($link, $result);
        }
?>