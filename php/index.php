<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$connect = mysqli_connect("localhost", "root", "", "edit_html");
$query = mysqli_query($connect, "SELECT * FROM quiz.pytania;");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
foreach($result as $r){
    echo $r["pytanie"]."<br>";
}

mysqli_close($connect);
?>
</body>
</html>