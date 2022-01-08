<?php
include_once "Includes/head.php";
?>
<div class="container">
    <h1>
    <?php
    echo "خوش امدید".PHP_EOL.$_GET["user"];
    ?>
    </h1>

    <a href="Includes/logout.php"><button>خروج</button></a>
</div>


<?php
include_once "Includes/footer.php";
?>
