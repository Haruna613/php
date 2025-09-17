<?php

function addNumber($a, $b, $c)
{
    $add=$a + $b + $c;
    if($add > 210){
        echo '合計点は' . $add . 'なので合格です';
    }else if{
        echo '合計点は' . $add . 'なので不合格です';
    }
    return $add;
}

echo (addNumber(80, 60, 90));

