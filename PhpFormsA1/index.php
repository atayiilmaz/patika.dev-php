<!--

Kullanıcıdan sayı değeri alabileceğiniz bir form hazırlayın. //Done
Gelen sayı değerlerinin 3 ile bölümünden kalanın 0 olup olmadığını kontrol eden bir fonksiyon yazın.
Kullanıcıya girilen değerin 3 bölünebilirliğini, bölünemiyorsa bölünebilen ilk değeri kullanıcıya bildirin.
Boş değer gönderilirse değerin boş olmayacağını bildirin.

-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Form</title>
</head>
<body>

    <h1>Form 1</h1>
    <form method="post">
        <label for="label1">Number:</label>
        <input type="number" name="num" placeholder="Type your number">
        <button type="submit">Submit</button>

    </form>

</body>
</html>

<?php

error_reporting(E_ALL);

$num = $_POST["num"];
function remainderTester($num) {

    $message = '';

    $num == '' ? $message = "Number cannot be null!!" : (
    $num % 3 == 0 ? $message = "Number can divide by 3." :
        (($num+1) % 3 == 0 ? $message = "$num can not be divide by 3. The closest number can be divide by 3: " . $num + 1 :
            $message = "$num can not be divide by 3. The closest number can be divide by 3: " . $num - 1)
    );

    return $message;

}

echo remainderTester($num);

?>