
<?php
// Імітація обробки даних на сервері
if ($_POST) {
    $name = htmlspecialchars($_POST['username']);
    echo "Дані отримано! Привіт, $name. Ми не перезавантажили сторінку.";
}
?>