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
    <div class='container'></div>
    <div class='container'></div>
</main>
<?php include 'footer.php';?>