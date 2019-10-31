<center>
    <main>
        <div class="container">
            <section class="section-default">
                <h1>Signup</h1>
                <form action="files/functions/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username" style="width:50%">
                    <input type="text" name="mail" placeholder="E-mail" style="width:50%">
                    <input type="Password" name="pwd" placeholder="Password" style="width:50%">
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password" style="width:50%"><br/>
                    <button type="submit" class="signupbtn" name="signup-submit">Signup</button>

                </form>
            </section>
        </div>
    </main>
</center>

<?php
require "footer.php";
?>