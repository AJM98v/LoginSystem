<?php

include_once "Includes/head.php";
?>
<?php if ($_GET['error'] === 'done'):?>
<div class="container">
    <h1>
        تبریک ! ثبت نام شما با موفقیت انجام شد
    </h1>
    <a href="login.php"><button>رفتن به صفحه ورود</button></a>
</div>
<?php else:
    echo "<h1>Some Things Wrong!</h1>"
    ?>
<?php endif; ?>
<?php
include_once 'Includes/footer.php';
?>