<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=chalets', 'root', '');
    $stmt = $pdo->query('SELECT * FROM chalet');

    echo '<ul>';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo ' <li>' . $row['numchalet'] . ' - ' . $row['numcategorie'] . '</li>';
    }
    echo '</ul>';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
<style>
    ul {
        list-style: none;
        padding: 0;
    }

    li {
        text-align: center;
        background-color: blue;
        color: white;
        margin-bottom: 5px;
        padding: 10px;
        border-radius: 5px;
    }
</style>
       


