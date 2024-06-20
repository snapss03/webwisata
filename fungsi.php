<?php
function tampil($teks)
{
    $data = explode('.', $teks);


    return $data[0] . '.' . $data[1] . '.';
}

function tampiltext($teks)
{
    $data = explode('</p>', $teks);
    $data1 = explode('.', $data[0]);
    $data2 = substr($data[0], 0, 100);
    return $data2 . '....';
}