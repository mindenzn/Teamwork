<?php
    $story = array(
        "the chickens met the Minde and everything was jolly",
        "ze chicks were going put of town and saw Minde and decided to build a chicken coop for parties",
        "the chicks had the best party and tequilla in the backyard and all the chicks get down in the yard, and damn right - it is better than yours, and daamn righ, we have Minde!"
    );
    
    $random_story = $story[mt_rand(0, sizeof($story) - 1)];
    
    $time_left_s = 10 - (date('s') % 10);

    if($time_left_s === 0){
        $random_story;
    }
    $background_image_rand = rand(1, 2);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="background_img_contacts<?php print $background_image_rand ?>">
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
    <h1 class="title-text">We are Vištidė ir Mindė</h1>
    <h2 class="title-text">How it works...</h2>
    <p class="title-para"><?php print $random_story; ?></p>
    <p class="title-para"><?php print $time_left_s; ?></p>
    
    
</body>
</html>