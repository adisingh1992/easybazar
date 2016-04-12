<?php include 'header.php' ?>
        <div>
            <form action="login-process.php" method="post">
                <div>
                    <input type="text" placeholder="Enter Your Username" name="uname" required/>
                    <input type="password" placeholder="Enter Your Username" name="upass" required/>
                    <label for="urem">Remember Me</label><input type="checkbox" name="urem" id="urem"/>
                    <a href="register.php">New Here..!! Sign-Up Now</a>
                    <input type="submit"/>
                </div>                
            </form>
        </div>
<?php include 'footer.php' ?>