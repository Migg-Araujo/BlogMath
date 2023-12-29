<?php include 'header.php';?>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/login.css">
<main>
    <div class="login-area">
        <div class="sign-in-area">
                <h1>Sign In</h1>
                <form action="?" method="POST">
                    <input type="text" placeholder="Email" autocomplete="off" required name='email'>
                    <input type="password" placeholder="Password" autocomplete="off" required name='password'>
                    <a href="">Forget Your Password?</a>
                    <input type="submit" value="SIGN IN">
                </form>
        </div>
        <div class="sign-up-area">
            <h1>Sign Up</h1>
            <p>Don't have an account?</p>
            <button onclick="<?php echo "window.location.href = '".INCLUDE_PATH."signup'";?>">SIGN UP</button>
        </div>
    </div>
</main>
