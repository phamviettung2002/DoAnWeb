<?php
    require_once("models/db_module.php");

    function getcreatcar($carname, $cartitle, $carprice, $carcolor, $carimage, $carimage1, $carimage2, $cardescription, $carnumberofseats, $carstyle, $carfuel, $carorigin, $cargear)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL ($link, "insert into tbl_car (id, name, title, price, color, image, image1, image2, description, numberofseats, style, fuel, origin, gear) values (NULL,'".$carname."',
                                                                                                                                                                                                    '".$cartitle."',
                                                                                                                                                                                                    '".$carprice."',
                                                                                                                                                                                                    '".$carcolor."',
                                                                                                                                                                                                    '".$carimage."',
                                                                                                                                                                                                    '".$carimage1."',
                                                                                                                                                                                                    '".$carimage2."',
                                                                                                                                                                                                    '".$cardescription."',
                                                                                                                                                                                                    '".$carnumberofseats."',
                                                                                                                                                                                                    '".$carstyle."',
                                                                                                                                                                                                    '".$carfuel."',
                                                                                                                                                                                                    '".$carorigin."',
                                                                                                                                                                                                    '".$cargear."')");
                                                                                        
        giaiPhongBoNho($link, $result);
    }

?>