<?php

include 'functions.php';
$pdo = pdo_connect();

se();
$sem = sem_get(1234, 1);
if (sem_acquire($sem))  {
    if (isset($_GET['id'])&&isset($_GET['amount'])) {
        $data_pulled = $_GET['amount'];
        $stmt = $pdo->prepare('SELECT * FROM deposit WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        $deposit = $stmt->fetch(PDO::FETCH_ASSOC);
        if($deposit['amount'] >= $data_pulled){
            $d_now = $deposit['amount'] - $data_pulled;
            $stmt = $pdo->prepare('UPDATE deposit set amount= ? WHERE id = ?');
            $stmt->execute([$d_now, $_GET['id']]);
            echo "success\n";
        } else {
            die('Not enough amount');
        }
        
    } else {
        die ('No ID specified!');
    }
    sem_release($sem);
}


?>