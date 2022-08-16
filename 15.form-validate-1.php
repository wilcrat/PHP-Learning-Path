<html>
    <!--htmlspecialchars() function converts special characters to HTML entities. 
    This means that it will replace HTML characters like < and > with &lt; and &gt;. 
    This prevents attackers from exploiting the code by injecting HTML or Javascript code 
    (Cross-site Scripting attacks) in forms.-->
    <body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Name: <input type="text" name="name" id=""> <br>
    E-mail: <input type="email" name="email" id=""><br>
    Website: <input type="url" name="website" id=""><br>
    Comment: <textarea name="comment" id="" cols="30" rows="5"></textarea><br>
    <input type="radio" name="gender" value="Male">Male<br>
    <input type="radio" name="gender" value="Female">Female<br>
    <input type="submit" value="Submit">
    </form>
<?php echo $_POST['name'];?> <br>
<?php echo $_POST['email'];?> <br>
<?php echo $_POST['website'];?> <br>
<?php echo $_POST['comment'];?> <br>
<?php echo $_POST['gender'];?> <br>
    </body>
</html>