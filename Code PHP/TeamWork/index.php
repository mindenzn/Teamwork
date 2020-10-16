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
    <link rel="stylesheet" href="style.css">
</head>
<body class="main-background">
<nav class="navigation">
    <ul class="navigation-ul">
        <li class="navigation-list">Home<a href="teamwork.lt"></a></li>
        <li class="navigation-list">Kiaušrakulas<a href="teamwork.lt/kiausrakulas.php"></a></li>
        <li class="navigation-list">About<a href="teamwork.lt/about.php"></a></li>
        <li class="navigation-list">Contact<a href="teamwork.lt/contact.php"></a></li>
    </ul>
</nav>
<h1 class="title-text"> We are Vištidė ir Minde</h1>
<img class="chicken-gif" src="https://i.pinimg.com/originals/ee/32/c1/ee32c1af78ec63ebb7760f979de567aa.gif" alt="">
<img class="rooster-gif" src="https://img1.picmix.com/output/stamp/normal/5/6/6/2/292665_760d0.gif" alt="">
<p> Šiuo metu laisvas kiaušrakulas: <?php print $random_name?></p>
</body>
</html>
