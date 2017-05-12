<?php
session_start();
function isFileUpload()
{
    $res = 0;
    if (isset($_FILES['image'])) {
        $newName = __DIR__ . '/images/' . basename($_FILES['image']['name']);
        if (is_uploaded_file($_FILES['image']['tmp_name'])) {
            $res = move_uploaded_file($_FILES['image']['tmp_name'], $newName);
        }
//        header('Location: /index.php');
    }
}
function isFileExists()
{
    $images=[];
    for ($i = 1; $i < 100; $i++) {
        if (file_exists(__DIR__ . '/images/' . $i . '.jpeg')){
            $images[] ='/images/' . $i . '.jpeg';
        }
    }
    return $images;
}
isFileUpload();
$n = isFileExists();


