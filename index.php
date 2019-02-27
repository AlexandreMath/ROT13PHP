<?php
require 'src/ROT13.php';
$rot = new ROT13();
if(!empty($_POST['convert'])){
    $convert = htmlentities($_POST['convert']);
    $word = $rot->encrypt($convert);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/UWCSS.css">
    <title>ROT13</title>
</head>
<body>
    <main class="uw-container uw-row">
        <div class="uw-container uw-blue uw-margin-top">
            <h2>ROT13 Form</h2>
        </div>
        <form action="" method="post" class="uw-container uw-margin-top">
            <label>Word to convert</label>
            <input id="convert" class="uw-input uw-border" type="text" name="convert">
            <button type="submit" class="uw-btn uw-blue uw-margin-top">Encrypt</button>
        </form>
    </main>
    <div class="uw-container uw-row uw-margin-left">
        <p>Votre mot encrypté : </p>
        <h3><?php if(!empty($word)){
                echo $word;
            }
        ?>
        </h3>
    </div>
</body>
</html>