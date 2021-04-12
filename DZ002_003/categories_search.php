<?php

// get the q parameter from URL
$s = $_REQUEST["s"];
$hint = "";
// lookup all hints from array if $q is different from ""
if ($s !== "") {
    $s = strtolower($s);
    $len = strlen($s);
    /*
	foreach($a as $name) {
        if (stristr($s, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }

	*/


    /**********************************************************/

    /**********************************************************/
    $db = new mysqli("127.0.0.1","root","");

    if($db) {
        $result = $db->select_db("rnwa") or die("Doslo je do problema prilikom odabira baze...");
        $result2 =$db->query("SELECT * FROM categories where name LIKE '%$s%'") or die("Doslo je do problema prilikom izvrsavanja upita...");
        $n=$result2->num_rows;
        if ($n > 0){
            while($myrow = mysqli_fetch_row($result2)){
                $hint .= "<div name=\"result\" id=\"" . $myrow[0] . "\">" . $myrow[1] . "</div>";
            }

        }
        else {
            echo "Nema rezultata<br>";
        }
    }
    else {
        echo "<br>Nije proslo spajanje<br>";
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;

