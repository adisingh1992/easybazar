<?php include 'header.php';
if(!empty($_SESSION['msg'])){
    echo "<script>alert('".$_SESSION[msg]."');</script>";
}
?>
        <div>
            <form action="register-process.php" method="post">
                <input type="text" placeholder="Username" name="uname" required/>
                <input type="text" placeholder="Full Name" name="fname" required/>
                <input type="email" placeholder="E-Mail" name="email" required/>
                <label for="dob">Date Of Birth</label><input type="month" name="dob" id="dob" required/>
                <input type="password" placeholder="Password" name="password" id="pass" required/>
                <input type="password" placeholder="Confirm Password" id="cpass" required/>
                <input type="number" placeholder="Mobile Number" name="mobile" maxlength="10" required/>
                <input type="text" placeholder="Address" name="address" required/>
                <input type="hidden" value="1" name="verify"/>
                <input type="submit" name="submit"/>
            </form>
        </div>
<?php include 'footer.php' ?>