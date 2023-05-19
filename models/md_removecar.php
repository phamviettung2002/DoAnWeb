<?php
    require_once("models/db_module.php");

    function getremovecar ($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL ($link,"delete from tbl_car where id = ".$id);
        giaiPhongBoNho($link, $result);
    }
?>