<?php
    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/Food.php';
    require_once __DIR__ . '/classes/User.php';
    require_once __DIR__ . '/classes/RegisteredUser.php';
    require_once __DIR__ . '/classes/CreditCard.php';

    $food = new Food('carne', 15.25, 8, '2021-5-8', 'Gatto');

    $user = new User('gino', 'lino', 'gino.lino@gmail.com');
    $registeredUser = new RegisteredUser('pinco', 'pallo', 'pincopallo@gmail.com');

    try {
        $visa = new CreditCard('5876 5876 5876 5876', '2022-05-5', 'Visa', 'pinco', 'pallo', 963);
        $user->setCreditCard($visa);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    try {
        $mastercard = new CreditCard('4587 4587 4587 4587', '2022-07-11', 'Mastercard', 'pinco', 'pallo', 897);
        $user->setCreditCard($mastercard);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>