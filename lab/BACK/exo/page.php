<?php
    session_start();
    if (isset ($_SESSION["pseudo"]) && isset($_SESSION["passeword"])) {
        ?>
        <p>Pseudo: <?php echo $_SESSION ["pseudo"]?></p>
            <p>Password: <?php echo $_SESSION ["password"]?></p>
            <?php
    }else {
        header('Location: index.php');
    }