<?php include "menu.php" ?>

    <h2>Welcome</h2>
    <p>
        <?php
        session_start();
        echo 'Welcome '.$_SESSION['username'];
        ?>
    </p>

<?php include "footer.php" ?>