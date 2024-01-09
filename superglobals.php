superglobals = built-in special variables that are available in all scopes.<br>
they start with underscore (_).<br><br>
$GLOBALS = array of all the superglobals <br>
$_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIE, $_SESSION <br>
$_REQUEST: It's used to collect data sent with both GET and POST methods. This array contains data from $_GET, $_POST, and $_COOKIE. <br>
$_SESSION is available after invoking session_start()<br><br>

These special variables (superglobals) are automatically set by a web-request.<br>
In this example, value of few variables received by the PHP script: <br><br>

<li>GET variable ($GLOBALS['_GET']) = <?php var_dump( $GLOBALS['_GET'] ) ?></li>
<li>GET variable ($_GET) = <?php var_dump( $_GET ) ?></li>
<li>POST variable ($_POST) = <?php var_dump( $_POST ) ?></li>
<li>Request variable ($_REQUEST) = <?php var_dump( $_REQUEST ) ?></li>
<li>$GLOBALS variable ($GLOBALS) = <?php var_dump( $GLOBALS ) ?></li> <br>
<br><br><br>
