<?php

include_once 'Includes/head.php';
?>


<div class="container">


    <form method="post" action="Includes/signup.inc.php" class="signup-form">
        <label for="username">نام کاربری :</label>
        <input type="text" name="username" id="username" placeholder="نام کاربری خود را وارد کنید">
        <label for="email">ایمیل :</label>
        <input type="email" name="email" id="email" placeholder="ایمیل خود را وارد کنید">
        <label for="password">رمز عبور :</label>
        <input type="password" name="password" id="password" placeholder="رمز عبور خود را وارد کنید">
        <label for="password-r">تکرار رمز عبور :</label>
        <input type="password" name="password-r" id="password-r" placeholder="رمز عبور خود را تکرار کنید">
        <button type="submit" value="send" name="submit">ثبت نام</button>


    </form>

    <h1 class="Error">
        <?php
        if (isset($_GET['error'])) {
            switch ($_GET['error']) {
                case 'empty':
                    echo "تمامی فیلدها الزامیست";
                    break;
                case 'invalidEmail':
                    echo "ایمیل نامعتبر میباشد";
                    break;
                case 'invalidUn':
                    echo "نام کاربری نامعتبر میباشد";
                    break;
                case "notMatch":
                    echo "رمز عبور یکسان نیست ";
                    break;
                case 'taken':
                    echo "نام کاربری قبلنا استفاده شده است";
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
