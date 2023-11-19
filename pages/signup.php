<html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/form.css">
    </head>
    <body>
        <div class="center1">
            <div>
                <form action="../BE/signupfrm.php" method="POST" name="signup-form">
                    <label for="un">First Name</label>
                    <br>
                    <input type="text" name="firstname" class="txtfield">
                    <br>
                    <label for="un">Last Name</label>
                    <br>
                    <input type="text" name="lastname" class="txtfield">
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
                var fn=mForm.elements["firstname"].value;
                var ln=mForm.elements["lastname"].value;
                var pass=mForm.elements["pass"].value;
                var confPass=mForm.elements["confirmPassword"].value;
                var sex=mForm.elements["sex"].value;
                var date=mForm.elements["dt"].value;
                console.log("fn:"+fn);
                console.log("ln:"+ln);
                console.log("pass:"+pass);
                console.log("confPass:"+confPass);
                console.log("sex:"+sex);
                console.log("date:"+date);
                
                if ((fn=="")||(ln=="")||(pass=="")||(confPass=="")||(date=="")) {
                    alert("Please fill all fields.");
                } else if ((pass!=confPass)) {
                    alert("Passwords must be equal.");
                } else {
                    mForm.submit();
                }
           
            }
            function ClearForm(){
                var mForm=document.querySelector("form[name='signup-form']");
                mForm.elements["firstname"].value="";
                mForm.elements["lastname"].value="";
                mForm.elements["pass"].value="";
                mForm.elements["confirmPassword"].value="";
                mForm.elements["sex"].value="m";
                mForm.elements["dt"].value="00/00/0000";
            }
        </script>
    </body>
</html>