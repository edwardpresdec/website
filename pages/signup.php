<html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/form.css">
    </head>
    <body>
        <div class="center1">
            <div>
                <form action="../BE/signupfrm.php" method="POST" name="signup-form">
                    <label for="un">User Name</label>
                    <br>
                    <input type="text" name="username" class="txtfield">
                    <br>
                    <label for="un">Full Name</label>
                    <br>
                    <input type="text" name="fullname" class="txtfield">
                    <br>
                    <label for="pass">Password</label>
                    <br>
                    <input type="password" name="pass" class="txtfield">
                    <br>
                    <label for="pass">Confirm Password</label>
                    <br>
                    <input type="password" name="confirmPassword" class="txtfield">
                    <br><br>
                    <input type="radio" name="sex" checked id="r-male" value="m">
                    <label for="r-male">Male</label>
                    <input type="radio" name="sex" id="r-female" value="f">
                    <label for="r-female">Female</label>
                    <br><br>
                    <label for="dt_picker">Date of Birth</label><br>
                    <input type="date" name="dt" id="dt_picker">
                    <br><br>
                    <input type="button" value="Sign Up" class="mButton" onclick="SignUp()">
                    <input type="button" value="Cancel" class="mButton" onclick="ClearForm()">
                </form>
            </div>
        </div>
        <script>
            function SignUp(){
                var mForm=document.querySelector("form[name='signup-form']");
                var usr=mForm.elements["username"].value;
                var fn=mForm.elements["fullname"].value;
                var pass=mForm.elements["pass"].value;
                var confPass=mForm.elements["confirmPassword"].value;
                var sex=mForm.elements["sex"].value;
                var date=mForm.elements["dt"].value;
                
                if ((usr=="")||(fn=="")||(pass=="")||(confPass=="")||(date=="")) {
                    alert("Please fill all fields.");
                } else if ((pass!=confPass)) {
                    alert("Passwords must be equal.");
                } else {
                    mForm.submit();
                }
           
            }
            function ClearForm(){
                var mForm=document.querySelector("form[name='signup-form']");
                mForm.elements["username"].value="";
                mForm.elements["fullname"].value="";
                mForm.elements["pass"].value="";
                mForm.elements["confirmPassword"].value="";
                mForm.elements["sex"].value="m";
                mForm.elements["dt"].value="00/00/0000";
            }
        </script>
    </body>
</html>