<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    date_default_timezone_set('Asia/Kolkata');  // Set timezone to India/Chennai

    $email = trim($_POST['email']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = 'subscribers.txt';
        $entry = date("Y-m-d H:i:s") . " - " . $email . PHP_EOL;

        if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX)) {
            header('Location: index.php?success=1#newsletter');
            exit();
        } else {
            header('Location: index.php?error=1#newsletter');
            exit();
        }
    } else {
        header('Location: index.php?error=1#newsletter');
        exit();
    }
}
?>
