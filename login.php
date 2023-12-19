<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = require __DIR__. "/database.php";

    $sql = sprintf("SELECT * FROM user
            WHERE email = '%s'",
            $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);
    session_start();

    $user = $result->fetch_assoc();

    if ($user) {
       if ( $_POST["password"] == $user["password"]){

        session_start();

        $_SESSION["user_id"] = $user["id"];

        header("Location: homepage.php");

       } 
    }

    $is_invalid = true;  
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>LeafyLoom | A Forest of Stories🍃</title>
</head>
<body>
    <header>
        <h2 class="logo">.LeafyLoom🍃</h2>
    </header>
    <?php if($is_invalid){
        echo '<script>alert("wrong username or password")</script>';
        
    }
    ?>
    <section class = "parallax">
        <img src="birds-csldallas-14.png" id="birds">
        <img src="clipart-mountain-background-1.png" id="mount">  
        <img src="R (1).png" id="forest"  >
    </section>   
    <section class="header">
        <form class="login" id="login1" method="post">
            <h1>LOGIN</h1>
            <br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" autocomplete="off" required>
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" autocomplete="off" required>
            <br><br>
            <button class="login1">Login</button>
            <br>
            <br>
            <hr>
            <br>
            <p class="link" onclick="register()"><h5>Don't have an account? <a href="register.php"><br><br>Register Now.</a></h5></p>
        </form>
    </section>
    <section class="sec">
        <br>
        <h2>LeafyLoom🍃</h2>
        <h3>Your Gateway to Boundless Stories!</h3><br>
        <p>Unlock the World of Infinite Reading Pleasure<br><br>
            Why You Should Check and Login to LeafyLoom🍃<br><br>
            1. Access to a Treasure Trove of Books:<br>
            By logging into [Your Website Name], you unlock the doors to a vast and diverse library. Immerse yourself in a world of literary wonders, from timeless classics to contemporary gems. Our curated collection caters to all tastes and interests, ensuring there's something for every reader.<br><br>
            2. Personalized Reading Experience:<br>
            Create your profile and tailor your reading experience. Save your favorite books, bookmark where you left off, and receive personalized recommendations based on your preferences. Your journey through the world of literature becomes uniquely yours.<br><br>
            3. Stay Updated with New Releases:<br>
            Subscribers enjoy early access to new releases and exclusive content. Be the first to discover the latest literary sensations and hidden gems before the rest of the world. Stay ahead of the curve in the literary landscape.<br><br>
            4. Connect with a Community of Readers:<br>
            LeafyLoom🍃 is more than just a library—it's a thriving community of passionate readers. Engage in discussions, share your thoughts on books, and connect with like-minded individuals who share your love for literature. Reading becomes a social adventure!<br><br>
            5. Track Your Reading Progress:<br>
            Set reading goals, track your progress, and celebrate your literary achievements. Whether you're aiming to read a certain number of books or exploring a new genre, our platform helps you stay motivated and engaged.<br><br>
            6. Receive Exclusive Offers and Events:<br>
            As a member, you'll gain access to exclusive promotions, events, and giveaways. Enjoy special perks that enhance your reading experience, including discounts on book-related merchandise and invitations to virtual book clubs and author Q&A sessions.<br><br>
            7. Support a Reading Revolution:<br>
            By logging in and actively participating, you become an integral part of our mission to make literature accessible to all. Join us in fostering a culture of knowledge-sharing and inclusivity, where the joy of reading knows no boundaries.<br><br>
            Ready to Dive In?<br>
            Don't miss out on the full potential of LeafyLoom🍃. Create an account, log in, and embark on a literary adventure that's personalized, engaging, and enriching. Your next favorite book awaits, and so does a community of fellow readers eager to share the journey with you.<br><br>
            
            Join LeafyLoom🍃 today and let the pages come alive!<br><br>
        </p>
    </section>
    <footer>
        <div class="row">
            <div class="col">
                <h4>Call: <div class="underline"><span></span></div></h4><br><br>
                <p>0999-526-0178</p>
            </div>
            <div class="col1">
                <h4>Follow: <div class="underline"><span></span></div> </h4><br><br>
                <a href="#" style="--i:1;"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.facebook.com/janeilrose.formoso" style="--i:2;"><i class='bx bxl-facebook'></i></a>
                <a href="#" style="--i:3;"><i class='bx bxl-instagram'></i></a>
            </div>
            <div class="col2">
                <h4>Email: <div class="underline"><span></span></div></h4><br><br> 
                <p>formosojaneil@gmail.com</p>
            </div>  
        </div>
        <br>
        <hr>
        <br>
        <p class="copyright"><h4>©2023 by .LeafyLoom🍃 - All Rights Reserved</h4></p>
    </footer>
    <script>
        let birds = document.getElementById('birds');
        let mount = document.getElementById('mount');
        
        window.addEventListener('scroll', function() {
            let value = window.scrollY;
            birds.style.left = value  + 'px';
            mount.style.left = value * 2.5 + 'px';
        });
    </script>
</body>

</html>