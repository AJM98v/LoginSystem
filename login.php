<?php

include_once 'Includes/head.php';
?>

<div class="container">
    <form method="post" action="Includes/login.inc.php" class="login-form">
        <label for="username">نام کاربری :</label>
        <input type="text" name="username" id="username" placeholder="نام کاربری / ایمیل خود را وارد کنید">

        <label for="password">رمز عبور :</label>
        <input type="password" name="password" id="password" placeholder="رمز عبور خود را وارد کنید">
        <button type="submit" value="send" name="submit">ورود</button>


    </form>

    <h1 class="Error">
        <?php
        if (isset($_GET['error'])) {
            switch ($_GET['error']) {
                case 'empty':
                    echo "تمامی فیلدها الزامیست";
                    break;
                case 'wrong':
                    echo "نام کاربری / رمز عبور اشتباه است";
                    break;
                case 'logout':
                    echo "خروج موفقیت امیز بود";
                    break;

                default:
                    echo "";
            }
        }
        ?>
    </h1>
</div>


<?php

include_once 'Includes/footer.php';
?>
