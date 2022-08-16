<html>
    <body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="fname">
        <input type="password" name="pwd" id="">
        <input type="submit" value="Submit">
    </form>
    <?php echo $_POST['fname'];?>
    <?php echo $_POST['pwd'];?>

    <!--use GET also....It shows form content in the url....NOT SAFE--->
    </body>
</html>