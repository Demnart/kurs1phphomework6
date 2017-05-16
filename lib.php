<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 16.05.17
 * Time: 10:42
 */
function fileUpload()
{
    $res = 0;
    if (isset($_FILES['image'])) {
        $newName = __DIR__ . '/images/' . basename($_FILES['image']['name']);
        if (is_uploaded_file($_FILES['image']['tmp_name'])) {
            $res = move_uploaded_file($_FILES['image']['tmp_name'], $newName);
        }
    }
}
function getFiles($dirname){

    $list_files = scandir($dirname);
    $images = [];
    foreach ($list_files as $value){
        if ($value == '.' || $value == '..'){
            continue;
        }
        $images[]=$value;
    }
    return $images;
}

function getDir(){
    return __DIR__ . '/images/';
}