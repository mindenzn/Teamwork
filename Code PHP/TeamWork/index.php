<?php
$names = array(
    'Minde',
    'Sigis',
    'Aistė',
    'Agnė',
);
$random_name = $names[mt_rand(0, sizeof($names) - 1)];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

</style>
<body>
<nav>
    <ul>
        <li>Home<a href="teamwork.lt"></a></li>
        <li>Kiausrakulas<a href="teamwork.lt/kiausrakulas.php"></a></li>
        <li>About<a href="teamwork.lt/about.php"></a></li>
        <li>Contact<a href="teamwork.lt/contact.php"></a></li>
    </ul>
</nav>
<h1> Vištidė ir Minde <img src="https://i.pinimg.com/originals/ee/32/c1/ee32c1af78ec63ebb7760f979de567aa.gif" alt=""></h1>
<p> Šiuo metu laisvas kiaušrakulas: <?php print $random_name?></p>
</body>
</html>
