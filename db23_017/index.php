<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}
else
{
    $controller = 'pages';
    $action = 'home';
}
?>

<html>
    <head></head>
    <body>
        <?php echo "controller = ".$controller." , action = ".$action; ?>
        <br>[<a href="?controller=pages&action=home">Home</a>]
        [<a href="?controller=colors&action=index">colors</a>]
        [<a href="?controller=priceLists&action=index">priceLists</a>]
        [<a href="?controller=orderRecord&action=index">orderRecord</a>]</br>
        <?php require_once("routes.php"); ?>
    <body>
</html>