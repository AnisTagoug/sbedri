<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }
</style>
<button class="open-button" onclick="openForm()">Login</button>
<div class="form-popup" id="myForm">
    <?php
    if (isset($message)) {
        echo '<label class="text-danger">' . $message . '</label>';
    }
    ?>
    <form action="resources/loginproc.php" class="form-container" method="POST">
        <h1>Login</h1>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <p>If you don't have an account <a href="register.php" style="color:dodgerblue">Sign Up</a> Here.</p>


        <button type="submit" class="btn">Login</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
</div>