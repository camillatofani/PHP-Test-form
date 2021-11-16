<?php include('header.php');?>

<h1>Enter 5 numbers and watch the magic!</h1>

<h3>Rules:</h3>
<p>Decimals must be separated with "." and not with a ","</p>

<br>

<form name="numbers" action="order.php" onsubmit="return checkInp()" method="post">
    One*: <input type="text" name="one" required><br>
    Two*: <input type="text" name="two" required><br>
    Tree*: <input type="text" name="tree" required><br>
    Four*: <input type="text" name="four" required><br>
    Five*: <input type="text" name="five" required><br>
    <em class="required">*Required</em><br>
    <input type="submit" class="button" value="Let's go!">
</form>

<?php include('footer.php');?>