<?php include('header.php');?>

<?php 

$numbers = array_values($_POST);
$array_length = count($numbers);

    echo "<h1>"."Before Sort"."</h1>";

    for($i=0;$i<$array_length;$i++)
        {
            echo $numbers[$i]."<br>";
        }

    sort($numbers);

    echo "<h1>"."After Sort"."</h1>";

    for($i=0;$i<$array_length;$i++)
        {
            if (is_numeric($numbers[$i])) {
                echo "A number"."<br>";
                echo (intval( $numbers[$i] * 100 ) / 100)."<br>";
            } else {
                echo "Not a number"."<br>";
                echo $numbers[$i]."<br>";
            }
        }

echo '<br>';

?>

<a href="index.php">< Come back</a>

<?php include('footer.php');?>