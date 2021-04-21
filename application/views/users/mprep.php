
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>MPREP</title>
</head>
<body>
<h2><?= $name; ?></h2>
<h2><?= $age; ?>, <?= $location; ?></h2>
<h2><?=count($hobbies) . ' '?>Hobbies</h2>
<ul>
<?php for($i=0; $i<count($hobbies); $i++){ ?>
    <li><?= $hobbies[$i] ?></li>
<?php }?>
</ul>
</body>
</html>