<?php
$answers = array(
    'TIKRAI TAIP',
    'TAIP',
    'GAL',
    'NE',
    'NI*UJA'
);
$random_answer = $answers[mt_rand(0, sizeof($answers) - 1)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiaušrakulas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-oracule-egg">
<header>
    <nav class="navigation">
        <ul class="navigation-ul">
            <li class="navigation-list"><a class="navigation-a" href="/index.php">Home</a></li>
            <li class="navigation-list"><a class="navigation-a" href="/kiausrakulas.php">Kiaušrakulas</a></li>
            <li class="navigation-list"><a class="navigation-a" href="/about.php">About</a></li>
            <li class="navigation-list"><a class="navigation-a" href="/contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
<main class="egg-main">
    <h1 class="egg-title-text">KIAUŠRAKULAS</h1>
    <div class='oracule-egg'></div>
    <span class='oracule-answer'><?php print $random_answer; ?></span>
</main>
</body>
</html>