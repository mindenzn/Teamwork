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
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li>Home<a href="teamwork.lt"></a></li>
            <li>Kiausrakulas<a href="teamwork.lt/kiausrakulas.php"></a></li>
            <li>About<a href="teamwork.lt/about.php"></a></li>
            <li>Contact<a href="teamwork.lt/contact.php"></a></li>
        </ul>
    </nav>
    <h1>We are Vištidė ir Mindė</h1>
    <h2>How it works...</h2>
    <p><?php print $random_story; ?></p>
    <p><?php print $time_left_s; ?></p>
    
    
</body>
</html>