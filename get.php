<html>
    <body>
        Welcome <?php echo $_GET["username"]; ?> </br>
        Your blood group is: <?php echo $_GET["bloodgroup"]; ?>

        <br><br><br><br>
        <li>GET variable ($_GET) = <?php var_dump( $_GET ) ?></li>
        <li>POST variable ($_POST) = <?php var_dump( $_POST ) ?></li>
        <li>Request variable ($_REQUEST) = <?php var_dump( $_REQUEST ) ?></li>
        <li>$GLOBALS variable ($GLOBALS) = <?php var_dump( $GLOBALS ) ?></li> <br>
        <br><br><br>

    </body>
</html>