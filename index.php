<?php
$name = 10;
echo gettype($name);
$name = "nirjhor";
echo "<br>";
echo gettype($name);

$name = [0, 1, 2, 3, 4, 23, 343, 23, 2, 2, 2];
echo "<br>";
echo gettype($name);

// print_r($name);

// echo "Welcome";
echo "<br>Welcone, " . $name[2] . "<br>";
echo "Welcone, " . '<h1>' . $name[0] . '</h1>';
?>


<ul>
    <?php
        for ($i = 0; $i < count($name); $i++) {
            echo "<li>$name[$i]</li>";
        }
    ?>
    
</ul>

<h1>Hello World</h1>

<h2>Learnign PHP</h2>


<p>Don't remove anything</p>