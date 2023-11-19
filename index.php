<html>
    <head>
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/form.css">
    </head>
    <body>
        <div class="center">
            <div>
                <form action="./BE/login.php" method="POST" id="login-form">
                    <label for="un">User Name</label>
                    <br>
                    <input type="text" name="username" id="un">
                    <br><br>
                    <label for="pass">Password</label>
                    <br>
                    <input type="password" name="password" id="pass">
                    <br><br>
                    <input type="button" value="Login" onclick="login()">
                    <input type="button" value="Cancel" onclick="ClearForm()">
                </form>
            <a href="./pages/signup.php">Sign Up</a>
            </div>
        </div>
        <script>
            function login(){
                var un=document.getElementById("un").value;
                var pass=document.getElementById("pass").value;
                if ((un=="")||(pass=="")){
                    alert("You must fill in the username and the password!");
                }else{
                    document.getElementById("login-form").submit();
                }

            }
            function ClearForm(){
                document.getElementById("un").value="";
                document.getElementById("pass").value="";
            }
        </script>
    </body>
</html>