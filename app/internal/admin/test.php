<?php
function keep_the_last_date($date){
    static $latestDate = null;
    if ($latestDate === null) {
        $latestDate = $date;
    } else {
        if ($date > $latestDate) {
            $latestDate = $date;
        }
    }
    return $latestDate;
}

$ids= [1,2,3,4,5,6,7,8,9, 5, 8, 7,2];


foreach ($ids as $ids){
    static $lastId = null;
    if ($lastId === null) {
        $lastId = $ids;
    } else {
        if ($ids > $lastId) {
            $lastId = $ids;
        }
    }
    echo $lastId, "<br>";
}








