<?php
require __DIR__ . '/lib.php';
fileUpload();
$dirname = getDir();
$images = getFiles($dirname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма загрузки</title>
</head>
<body>
<?php foreach ($images as $value ): ?>
    <img src="/images/<?php echo $value;?>" alt="">
<?php endforeach;?>
<form action="/index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/jpeg">
    <input type="submit" value="Отправить">
</form>
</body>
</html>

