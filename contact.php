<?php
$random_number_Minde = rand(1000000, 9999999);
$random_number_Agne = rand(1000000, 9999999);
$random_number_Aiste = rand(1000000, 9999999);
$random_number_Sigis = rand(1000000, 9999999);

$background_image_rand = rand(1, 2);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="background-img-contacts<?php print $background_image_rand; ?>">
<header>
    <nav class="navigation">
        <ul class="navigation-ul">
            <li class="navigation-list"><a class="navigation-a" href="/index.php">Home</a></li>
            <li class="navigation-list"><a class="navigation-a" href="/kiausrakulas.php">Kiaušrakulas</a></li>
            <li class="navigation-list"><a class="navigation-a" href="/about.php">About</a></li>
            <li class="navigation-list"><a class="navigation-a" href="/contact.php">Contact</a></li>
        </ul>
    </nav>
    </nav>
</header>
<main>
    <section class="contacts-container">
        <h1 class="title-contact">Contact us "Višty-ydė ir Mindė"</h1>
        <ul>
            <li class="list-contacts">
                <img class="photo-img"
                     src="https://scontent.fvno2-1.fna.fbcdn.net/v/t1.0-9/105016988_3229042567134035_5230164987909762088_n.jpg?_nc_cat=105&_nc_sid=09cbfe&_nc_ohc=erYvMof4afcAX9L-C3w&_nc_ht=scontent.fvno2-1.fna&oh=44882ff3c61c038c2eee354fb92f9db5&oe=5FAE3A91">
                <span>Mindė: +370<?php print $random_number_Minde; ?></span>
            </li>
            <li class="list-contacts">
                <img class="photo-img"
                     src="https://sadanduseless.b-cdn.net/wp-content/uploads/2020/05/funny-chickens-in-tutus21.jpg">
                <span> Agnė: +370<?php print $random_number_Agne; ?></span>
            </li>
            <li class="list-contacts">
                <img class="photo-img" src="https://i.pinimg.com/474x/51/39/43/513943bf0e8a1e82369e048aca190d98.jpg">
                <span> Aistė: +370<?php print  $random_number_Aiste; ?></span>
            </li>
            <li class="list-contacts">
                <img class="photo-img"
                     src="https://2.bp.blogspot.com/-y5o88uBdaos/T5PlQy4_bTI/AAAAAAAHgRI/6omkXRgZvJ4/s1600/funny+chickens,+chicken+photos,+funny+birds+photo+(1).jpg">
                <span>Sigis: +370<?php print $random_number_Sigis; ?></span>
            </li>
        </ul>
    </section>
</main>
</body>
</html>