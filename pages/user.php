<?php include 'header.php';
if(!isset($_SESSION['user'])){
    header('Location: login');
}
?>
<script>
    var titleElement = document.querySelector('title');
    titleElement.innerText = "Math Blog | <?php echo $_SESSION['name']; ?>";
</script>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/user.css">
<main>
    <div class='container'>
        <h1>Your Profile</h1>
        <img src="<?php echo INCLUDE_PATH; ?>/src/user-white.svg"/>
        <p>Name: Lorem Ipsum</p>
        <p>Username: Lorem</p>
        <p>Email: Lorem Ipsum@gmail.com</p>

        <button onclick="window.location.href='<?php echo INCLUDE_PATH;?>profile'">EDIT</button>
    </div>
    <div class='container'>
    <h1>Your Post</h1>
    
        <p>Post: 0</p>
        <p>Views: 0</p>
        <p>Likes: 0</p>
        <p>Followers: 0</p>

        <button>POSTS</button>
    </div>
</main>
<?php include 'footer.php';?>