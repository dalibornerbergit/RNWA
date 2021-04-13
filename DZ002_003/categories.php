<?php

$db = new mysqli("127.0.0.1", "root", "");
$s = $_REQUEST["s"];
if ($db) {
    $result = $db->select_db("rnwa") or die("Doslo je do problema prilikom odabira baze...");
    if (strlen($s) !== 0) {
        $s = strtolower($s);
        $result2 = $db->query("SELECT * FROM categories WHERE name LIKE '%$s%'") or die("Doslo je do problema prilikom izvrsavanja upita...");
    } else {
        $result2 = $db->query("SELECT * FROM categories ") or die("Doslo je do problema prilikom izvrsavanja upita...");
    }
    $n = $result2->num_rows;
    if ($n > 0) {
        echo "
        <div class='center'>
        <table>
            <tr>
            <th>ID</th>
            <th>Category</th>
            </tr>";
        while ($row = mysqli_fetch_array($result2)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "</tr>";
        }
        echo "</table><div>";
    } else {
        echo "Nema rezultata<br>";
    }
} else {
    echo "<br>Nije proslo spajanje<br>";
}

mysqli_close($db);
