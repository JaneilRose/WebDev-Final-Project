<?php

$is_success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = require __DIR__. "/database.php";

    $sql = "INSERT INTO user (name, email, password) VALUES (?,?,?)";

    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql)){
        die("SQL error: ". $mysqli->error);
    }

    $stmt->bind_param("sss",
                        $_POST["name"],
                        $_POST["email"],
                        $_POST["password"]);

    if ($stmt->execute()){
        $is_success = true;
        header ("location: login.php");
    }
    else{
        die($mssqli->error. " " . $mysqli->errno);
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="login.js"></script>
    <title>Register | LeafyLoom🍃</title>
</head>
<body>
    <header>
        <h2 class="logo">.LeafyLoom🍃</h2>
    </header>
    <section class = "parallax">
        <img src="birds-csldallas-14.png" id="birds">
        <img src="clipart-mountain-background-1.png" id="mount">  
        <img src="R (1).png" id="forest"  >
    </section>   
    <section class="header">
        <form class="register" id="login1" action='register.php' method="post">
            <h1>Register</h1><br>
            <label for="name">Enter username:</label>
            <input type="text" id="username" name="name" autocomplete="off" required>
            <br>
            <br>
            <label for="email">Enter email:</label><br>
            <input type="text" id="email" name="email" autocomplete="off" required>
            <br>
            <br>
            <label for="password">Enter password:</label>
            <input type="password" id="password" name="password" autocomplete="off" required>
            <br><br>
            <label for="password">Re-enter password:</label>
            <input type="password" id="password" autocomplete="off" required>
            <br><br><br>
            <button>Create Account</button><br><br>
            <h5>Already have an account? <a href="login.php"><br><br>Login Now.</a></h5></p>
        </form>
    </section>
    <section class="sec">
        <br>
        <h2>LeafyLoom🍃</h2>
        <h3>Your Gateway to Boundless Stories!</h3><br>
        <p>Unlock a World of Literary Delights: Why Register with LeafyLoom<br><br>
            Welcome to LeafyLoom, where the doors to a vast universe of free books await you. If you're wondering why you should take a moment to check out our offerings and consider registering, allow us to illuminate the myriad benefits that await you:<br><br>
            1. Access to a Treasure Trove of Free Books: <br>
            ➢Dive into a diverse collection of books spanning genres, from timeless classics to contemporary gems. <br>
            ➢Enjoy unlimited access to high-quality literature without spending a dime. Why buy books when you can explore an extensive library for free? <br><br>
            2. Curated Collections for Every Taste: <br>
            ➢Discover curated collections tailored to your interests, making it easy to find your next favorite read. <br>
            ➢Our collections cater to a wide range of preferences, ensuring there's something for everyone, whether you're a fiction aficionado, a non-fiction enthusiast, or a poetry lover. <br><br>
            3. User-Friendly Interface for Effortless Exploration: <br>
            ➢Navigate our intuitive platform seamlessly. Our user-friendly design ensures a hassle-free browsing experience. <br>
            ➢Use advanced search features to find specific titles, authors, or explore new genres effortlessly. <br><br>
            4. Build Your Virtual Bookshelf: <br>
            ➢Create a personalized virtual bookshelf where you can save and organize your favorite reads. <br>
            ➢Keep track of books you've read, want to read, or recommend to fellow readers. <br><br>
            5. Join a Community of Like-minded Readers: <br>
            ➢Connect with fellow book enthusiasts in our vibrant community. <br>
            ➢Share your thoughts, recommendations, and engage in discussions about your favorite books and authors. <br><br>
            6. Stay Updated on New Releases and Recommendations: <br>
            ➢Receive notifications about new releases, curated book lists, and personalized recommendations based on your reading history. <br>
            ➢Stay in the loop with the latest literary trends and discoveries. <br><br>
            7. Support a Vision for Inclusive Reading: <br>
            ➢By registering with LeafyLoom, you contribute to a community that believes in making literature accessible to all. <br>
            ➢Join us in promoting a culture of knowledge-sharing and reading without financial barriers. <br><br>

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
                <a href="https://www.facebook.com/janeilrose.formoso" style="--i:2;"><i class='bx bxl-facebook' ></i></a>
                <a href="#" style="--i:3;"><i class='bx bxl-instagram' ></i></a>
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

</body>
</html>