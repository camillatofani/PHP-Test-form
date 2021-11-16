<?php include('header.php');?>

<?php 

$numbers = array_values($_POST);
$array_length = count($numbers);
echo "<h1>"."Before Sort"."</h1>";

for($i=0;$i<$array_length;$i++)
{
echo $numbers[$i] ."<br>";
}

sort($numbers);
echo "<h1>"."After Sort"."</h1>";
for($i=0;$i<$array_length;$i++)
{
echo $numbers[$i]."<br>";
}

echo '<br>';

?>

<a href="index.php">< Come back</a>

<?php include('footer.php');?>