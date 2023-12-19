<?php

session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__. "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home | LeafyLoom🍃</title>
</head>
<body>
    <header>
        <h2 class="logo">.LeafyLoom🍃</h2>
            <nav class="navbar">
                <a href="#" class="active">HOME</a>
                <a href="about.html">ABOUT US</a>
                <a href="stories.html">STORIES</a>
                <a href="author.html">AUTHOR</a>
                <a href="login.php"class="active1">LOG OUT</a>
            </nav>  
    </header>

    <section class = "parallax">
        <img src="birds-csldallas-14.png" id="birds">
        <img src="clipart-mountain-background-1.png" id="mount">
        <img src="R (1).png" id="forest"  >
        <img src="text-1702612049204.png" id="text" height=10% width=30%>
        <img src="text-1702613725296.png" id="text1" height=10% width=30%>
        <h1 class="welcome">Welcome <p class="user"><?= htmlspecialchars($user["name"])?>!🍃</p></h1>
    </section>   
    <section class="sec">
        <br>
        <h2>LeafyLoom🍃</h2>
        <h3>Your Gateway to Boundless Stories!</h3><br><br>
        <p>Welcome to LeafyLoom, your ultimate destination for literary exploration without any cost! Immerse yourself in a world of captivating stories, insightful knowledge, and thrilling adventures, all at the click of a button. Our platform is dedicated to providing a diverse collection of free books for readers of all tastes and interests.<br><br>

            Discover a vast library of literary treasures, ranging from classic masterpieces to contemporary gems, spanning various genres and topics. Whether you're a fan of timeless novels, cutting-edge science fiction, informative non-fiction, or heartwarming poetry, we have something for everyone.<br><br>
            
            Why spend a fortune on books when you can access an extensive selection without opening your wallet? At LeafyLoom, we believe in the power of literature to enrich lives and foster a love for reading. Our mission is to make quality literature accessible to all, promoting a culture of knowledge-sharing and enjoyment.<br><br>
            
            Navigating our user-friendly interface, you'll find an intuitive search system and curated collections that make it easy to discover your next favorite read. From page-turning thrillers to thought-provoking essays, our virtual shelves are stocked with hidden gems waiting to be explored.<br><br>
            
            Join our community of avid readers who value the freedom to indulge in literary adventures without financial barriers. Whether you're a seasoned bookworm or a casual reader, LeafyLoom is your go-to source for free, high-quality reading material that sparks imagination and fuels intellectual curiosity.<br><br>
            
            Embark on a literary journey with us at LeafyLoom – where the joy of reading meets the freedom of access. Start exploring the world of free books today!<br><br>
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
    let text = document.getElementById('text');
    let text1 = document.getElementById('text1');
    let birds = document.getElementById('birds');
    let forest = document.getElementById('forest');
    let mount = document.getElementById('mount');
    
    window.addEventListener('scroll', function() {
        let value = window.scrollY;
        birds.style.left = value  + 'px';
        text.style.top = value + 'px';
        text1.style.top = value + 'px';
        mount.style.left = value + 'px';
    });
</script>
    
</body>
<style>
    
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    scroll-behavior: smooth;
}
body{
    background: linear-gradient( #afd9e6 0%, #879dc6 40%);
    min-height: 100vh;
    overflow-x: hidden;
    scroll-behavior: smooth;

}

.user{
    font-size: 90px;
    font-weight: 500;
    margin-top: 0%;
}
header{
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    padding: 30px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}
.welcome{
    position: absolute;
    text-align: center;
    top: 30%;
    left: 5%;
    font-size: 100px;
    color: white;
    text-shadow: 0 0 15px black;
    animation: slideLeft 1.2s ease forwards;
    animation-delay: 1s;
}

h1{
    position: absolute;
    text-align: center;
    top: 30%;
    left: 5%;
    font-size: 100px;
    color: white;
    text-shadow: 0 0 15px black;
    animation: slideLeft 1.2s ease forwards;
    animation-delay: 1s;
}
.logo{
    color: rgb(46, 126, 14);
    font-size: 2em;
    cursor: default;
    padding: 2px;
    background: solid transparent;
    border-color: white;

}
.logo:hover{
  
    color: rgb(109, 180, 80);
    border-color: white;
    transition: 0.5s;

}
.navbar a{
    color: white;
    text-decoration: none;
    margin-left: 20px;
    font-weight: 600;
    padding: 6px 15px;
    border-radius: 20px;
    opacity: 0;
    animation: slideLeft 1.2s ease forwards;
    animation-delay: 1s;
}
.navbar a:hover, 
.navbar a.active {
    background: rgb(46, 126, 14);
    transition: 0.5s;
}


.navbar a.active1 {
    padding: 15px;
    background: transparent;
    border: 3px solid rgb(46, 126, 14);
    color: rgb(46, 126, 14);
}
.parallax{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.parallax img{
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    pointer-events: none;
}

.parallax #birds{
    top: 0;
    left: 5%;
    height: 70%;
    width: 50%;
}
.parallax #forest{
    top: 40%;
    height: 60%;
    width: 100%;
}
.parallax #mount{
    top: 40%;
    left: 20%;
    right: 0;
    bottom: 80%;
    height: 60%;
    width: 100%;


}
.parallax #text{
    top: 30%;
    left: 60%;
    right: 0;
    bottom: 80%;
    height: 30%;
    width: 60%;
    width: auto;
    margin-top: 20%;

}
.parallax #text1{
    top: 60%;
    left: 70%;
    right: 0;
    bottom: 80%;
    height: 4%;
    width: 8%;
    width: auto;
    margin-top: 35%;

}
.sec{
    position: relative;
    padding: 100px;
    background:linear-gradient( #78bb76 0%, #6487c8 50%); 
}
.sec h2{
    font-size: 3em;
    color: white;
    margin-bottom: 10px;
}
.sec h3{
    font-size: 2em;
    color: white;
    margin-bottom: 10px;
}
p{
    color: white;
    display: flex;
    margin-bottom: 0%;
    font-weight: 400;
    font-size: 20px;
}


footer{
    width: 100%;
    position:relative;
    bottom:0;
    background: rgb(207, 142, 142);
    color: #fff;
    padding: 50px 0 20px;
    font-size: 13px;
    line-height: 15px;
    text-align: center;
    margin-left: 0;
    margin: auto;

}

.row{
    width: 85%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
    font-size: medium;
    text-align: center;
}

.col1 i{
    width: 25%;
    height: auto;
    margin-left: 5%;
    font-size: xx-large;
    text-align: center;
    color: rgb(255, 255, 255);
}

.col1 a i:hover{
    color: rgb(46, 126, 14);
    cursor: pointer;
    transition: .3s;
    
}
.col{
    align-items:  center;
}

.col1 {
    align-items:  center;
}

.col2{
    align-items:  center;
}

hr{
    width: 90%;
    border: 0;
    border-bottom: 1px solid #ffffff;
    margin: 20px auto;
}

.copyright{
    text-align: center;
}
h3{
    text-align: center;
}
h2{
    text-align: center;
}
.underline{
    width: 100%;
    height: 5px;
    background: #767676;
    border-radius: 3px;
    position: absolute;
    top: 25px;
    left: 0;
}

.underline span{
    width: 100px;
    height: 100%;
    background: #fff;
    border-radius: 3px;
    position: absolute;
    top: 0;
    left: 10px;
    animation: moving 5s linear infinite;

}

@keyframes moving{
    0%{
        left: -20px;
    }
    100%{
        left: 100%;
    }
    
}
@keyframes slideLeft{
    100%{
        transform: translateY(0);
        opacity: 1;
    }
    0%{
        transform: translateY(-100px);
        opacity: 0;
    }
}
</style>
</html>