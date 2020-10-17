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
    <meta http-equiv="refresh" content="3">
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
    <h1 class="title-text"> We are "Višty-ydė ir Minde"</h1>
    <div class="chicken-gif"></div>
    <div class="rooster-gif"></div>
    <p class="random-name-text">Šiuo metu laisvas kiaušrakulas:
        <span class="random-name-bold"><?php print $name; ?></span>
    </p>
</main>
</body>
</html>
