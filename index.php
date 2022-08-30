<!DOCTYPE html>
<html>
    <head>
        <title>Netflix</title>
    </head>
    <body>
        <form action="router_aux.php" method="post">
            <input type="radio" name="page" value="login">
            <label>login</label></br>

            <input type="radio" name="page" value="outro">
            <label>outro</label></br>

            <input type="radio" name="page" value="home">
            <label>home</label></br>

            <input type="submit" value="IR">
        </form>
        </br>
        <?php
            include_once('./router.php');
        ?>
        <style>
            <?php
                include_once('./styles.php');
            ?>
        </style>
    </body>
</html>