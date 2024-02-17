<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>
     <div style="text-align: center;">
    
<?php if(!empty($_SESSION["login"])); ?>
    <?php echo "Доброго вам сутка".$_SESSION["login"]; ?>
    <br>
    <a href=/logout.php>Выйти</a>
<?php else:
echo '<h2>Вы что хакер?<h2>';
echo 'a href="/"На главную</a>'9
?>   
    
    
    
    
<?php endif ?>
    </div>
    
</body>
</html>
