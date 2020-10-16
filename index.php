<?php
$names = rand(1, 4);
if ($names == 1) {
    $name = 'Minde';
} elseif ($names == 2) {
    $name = 'Sigis';
} elseif ($names == 3) {
    $name = 'Aistė';
} elseif ($names == 4) {
    $name = 'Agnė';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TeamWork</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="main-background">
<header>
    <nav class="navigation">
        <ul class="navigation-ul">
            <li class="navigation-list"><a class="navigation-a" href="#">Home</a></li>
            <li class="navigation-list"><a class="navigation-a" href="/kiausrakulas.php">Kiaušrakulas</a></li>
            <li class="navigation-list"><a class="navigation-a" href="/about.php">About</a></li>
            <li class="navigation-list"><a class="navigation-a" href="/contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1 class="title-text"> We are Vištidė ir Minde</h1>
    <img class="chicken-gif" src="https://i.pinimg.com/originals/ee/32/c1/ee32c1af78ec63ebb7760f979de567aa.gif" alt="">
    <img class="rooster-gif" src="https://img1.picmix.com/output/stamp/normal/5/6/6/2/292665_760d0.gif" alt="">
    <p class="random-name-text">Šiuo metu laisvas kiaušrakulas: <span
                class="random-name-bold"><?php print $name ;?></span></p>
</main>
</body>
</html>
