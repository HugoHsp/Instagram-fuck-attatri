<?php
if(isset($_GET["id"]) && !empty($_GET["id"])){
    $insuser = $pdo->prepare('insert into friend (idAbonne, idAmi, dateAbonnement) values (?, ?, NOW())');
    $insuser->execute([$_SESSION["id"], $_GET["id"]]);
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>