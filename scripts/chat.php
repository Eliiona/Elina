<?php
$query=$pdo->query("SELECT * FROM chat");
if (isset($_SESSION['chat-user'])){
    $usr = $_SESSION['chat-user'];
} else{
    $usr = '';
}
$messages = $query->fetchAll();

if (isset($_POST['username']) && isset($_POST['message'])){
    $stmt = $pdo->prepare("INSERT INTO `chat`(`username`, `message`) VALUES (:username,:mess)");
    $stmt->execute([':username'=>$_POST['username'],':mess'=>$_POST['message']]);
    $_SESSION['chat-user']=$_POST['username'];
    header('Location: ?page=chat');
}
