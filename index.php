<?php

$i  =1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма загрузки</title>
</head>
<body>

<img src="<?php echo '/images/'.$i.'.jpeg'; ?>" alt="some text">
<form action="/handler.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/jpeg">
    <input type="submit" value="Отправить">
</form>
</body>
</html>

