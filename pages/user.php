<?php include 'header.php';?>
<script>
    var titleElement = document.querySelector('title');
    titleElement.innerText = "Math Blog | <?php echo $_SESSION['name']; ?>";
</script>
<main></main>
<?php include 'footer.php';?>