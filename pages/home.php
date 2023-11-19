<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>

        <img class="aaa"; src="../images/icons/spiral.png">
        
        <div class="home_div">
            <h1>Eddie's Website</h1>
            <p style="color: white; font-family: monospace; font-size: 2vw;"><----spin me</p>
        </div>
        

        <div class="menu1">
            <div class = "container">
                <a href="home.php">
                    <img src = "../images/icons/home.png" alt="Home" width="274" height="52">
                </a>
            </div>
            <div class = "container">
                <a href="contact_us.php">
                    <img src = "../images/icons/sports.png" alt="Sports" width="274" height="52">
                </a>
            </div>
            <div class = "container">
                <a href="gallery.php">
                    <img src = "../images/icons/hobbies.png" alt="Hobbies" width="274" height="52">
                </a>
            </div>
            <div class = "container">
                <a href="CV.php">
                    <img src = "../images/icons/CV.png" alt="CV" width="274" height="52">
                </a>
            </div>
            <div class = "container">Welcome: <?php echo $_SESSION["username"]; ?>!&nbsp;&nbsp;&nbsp;</div>
            <div class = "container"><a href="../index.php">Sign Out<?php $SESSION["username"]=""?></a>&nbsp;&nbsp;&nbsp;</div>
        </div>

        <div class="div_ibutton">
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://instagram.com/eddie_btz?igshid=OGQ5ZDc2ODk2ZA==','_blank')">
                    <img src = "../images/icons/insta.png" alt="Instagram" width="50" height="50">
                </button>
            </div>
            <div style="margin:10;">
                <button class="ibutton" onclick=" window.open('https://open.spotify.com/user/4tszupm5da5e81bkdjvcedrcw?si=78514fa38e8b478c','_blank')">
                    <img src = "../images/icons/spoti.webp" alt="Spotify" width="50" height="50">
                </button>
            </div>
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://www.linkedin.com/in/edward-prescott-decie-552584263','_blank')">
                    <img src = "../images/icons/linkedin.png" alt="LinkedIn" width="50" height="50">
                </button>
            </div>
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrgDMhTMlqJGLhQXGTsrTWFgsmbfzpHvlVSCwjrXQvmvdNPpqbmhFGjPPtWgjcfhgXFzLB','_blank')">
                    <img src = "../images/icons/gmail.png" alt="Gmail" width="50" height="38">
                </button>
            </div>
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://twitter.com/DecieEddie','_blank')">
                    <img src = "../images/icons/twit.png" alt="Twitter" width="50" height="50">
                </button>
            </div>
        </div>
    </body>
</html>