<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Github Hacking</title>
</head>
<body>



<h1 style="text-align:center">Hint: tryhack.ogs.abc</h1>

<form method="POST">
    <input name="password" />
    <input type="submit" value="ยืนยัน" />
</form>

<?php 

    if($_POST["password"] == "isEasyHacking") {
        ?>
            <h1 style="color:green">Hack สำเร็จ! รหัสผ่านคือ isEasyHacking</h1>
        <?php
    }

?>
    
</body>
</html>