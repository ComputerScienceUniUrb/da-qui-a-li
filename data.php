<?php
/* General data */

function get_user_disability($telegram_id) {
    $dis = db_scalar_query("SELECT `disability` FROM `status` WHERE `telegram_id` = {$telegram_id} LIMIT 1");

    if($dis)
        return $dis;
    else
        return $disabilities_code[0];
}

$disabilities_code = array(
    "a1",
    "a2",
    "a3",
    "a4",
    "a5",
    "a6",
    "a7",
    "a8",
    "a9",
    "a10",
    "a11"
);

$disabilities_to_name_map = array(
    "a1" => "Deambulazione normale",
    "a2" => "Stampelle o bastone",
    "a3" => "Tripode o quadripode",
    "a4" => "Deambulatore",
    "a5" => "Carrozzina manuale",
    "a6" => "Carrozzina elettrica",
    "a7" => "Bastone tattile",
    "a8" => "Passeggino",
    "a9" => "Carrozzina",
    "a10" => "Donna incinta",
    "a11" => "Adulto con bambino"
);