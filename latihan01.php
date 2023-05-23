<?php
    $dta[0]["nama"] = "Ita Purnama";
    $dta[0]["alamat"] = "JL. Raya Mas No 10";
    $dta[0]["tgl_lahir"] = "2003-02-16";
    $dta[0]["Hoby"] = "Marah-Marah";

    $dta[1]["nama"] = "Tya";
    $dta[1]["alamat"] = "JL. Melati No 11";
    $dta[1]["tgl_lahir"] = "2002-03-12";
    $dta[1]["Hoby"] = "Ngelawak";

    $dta[2]["nama"] = "Satya Wardanna";
    $dta[2]["alamat"] = "JL. Ketewel No 30";
    $dta[2]["tgl_lahir"] = "2003-01-06";
    $dta[2]["Hoby"] = "Nonton Anime";

    header("Conten-Type: application/json; charset=utf-8");
    echo json_encode($dta);