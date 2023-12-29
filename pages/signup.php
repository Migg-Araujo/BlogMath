<?php include 'header.php';?>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/signup.css">
<main>
    <div class="login-area">
        <div class="sign-up-area">
                <h1>Create Account</h1>
                <form action="?" method="POST">
                    <input type="text" placeholder="Username" autocomplete="off" required name='username'>
                    <input type="text" placeholder="Email" autocomplete="off" required name='email'>
                    <input type="password" placeholder="Password" autocomplete="off" required name='password'>
                    <input type="submit" value="SIGN UP">
                </form>
        </div>
        <div class="sign-in-area">
            <h1>Sign In</h1>
            <p>Already have an account?</p>
            <button onclick="<?php echo "window.location.href = '".INCLUDE_PATH."login'";?>">SIGN IN</button>
        </div>
    </div>
</main>