<?php require_once("../private/initialize.php"); ?>


<?php include( SHARED_PATH . "/public_header.php"); ?>
    <div class="wrapper">
        <div class="box1">
            <div class="box1content">
        <h1 style="text-align: center;">Login Here</h1>
        <form action="authenticate.php" method="post" id="loginform">
            
            <label>&ast;Email:</label><input type="text" name="Email"  id="Email"  onchange="validateEmail()" required><br>
            <label>&ast;Password: </label><input type="password" name="Password" id="Password" rows="4" cols="40"  required ></input> <br><br>

            <input type="submit" name="Submit" id="Submit" value="Login" >
        </form>

        <i><p style="text-align: center;">
            Don't have an account? <a href="register.php">Register Now!</a><br>
        </p></i>
        </div> <!-- box1content -->
        </div> <!-- box1 -->
    </div> <!-- wrapper -->
<?php include(SHARED_PATH . "/public_footer.php"); ?>