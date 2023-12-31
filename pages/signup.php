<?php
    include __DIR__.'/../config/sql/DBcreate.php';

    if(isset($_POST['email'])){
        $email = strtolower($conn->real_escape_string($_POST['email']));
        $password = password_hash(strtolower($conn->real_escape_string($_POST['password'])), PASSWORD_DEFAULT);
        $username = $conn->real_escape_string($_POST['username']);

        $sql = "SELECT * FROM USER_TABLE WHERE EMAIL LIKE '$email'";
        $sql_query = $conn->query($sql);

        if($sql_query->num_rows > 0){
            echo"<p class='msg-alert'>Email already Registered</p>";
        }else{
            $sql = "INSERT INTO USER_TABLE (EMAIL, PASSWORD, USERNAME) VALUES ('$email', '$password', '$username')";

            if ($conn->query($sql) === TRUE) {
                header("Location: login"); 
            }
        }
    }
?>

<?php include 'header.php';?>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/signup.css">
<main>
    <div class="login-area">
        <div class="close" onclick="window.location.href='<?php echo INCLUDE_PATH; ?>'"></div>
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
