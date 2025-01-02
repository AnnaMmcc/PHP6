<?php

$navigation = [
   "Home" => "home.php",
   "About us" => "about.php",
   "Contact" => "contact.php"
];


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Domaci Petlje</title>
</head>
<body>
    
<?php foreach($navigation as $page => $link) : ?>
<a href="<?php echo $link;?>"><?php echo $page;?></a> 
<?php endforeach; ?>

</body>
</html>

