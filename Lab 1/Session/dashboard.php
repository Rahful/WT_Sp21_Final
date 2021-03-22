<?php
    session_start();
?>
<html>
    <body>
        <h1>Welcome My Page <?php echo $_SESSION["user"];?></h1>
    </body>

</html>