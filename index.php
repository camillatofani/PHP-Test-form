<?php include('header.php');?>

<h1>Enter 5 numbers and watch the magic!</h1>

<form name="numbers" action="order.php" onsubmit="return checkInp()" method="post">
    One*: <input type="text" name="one" required><br>
    Two*: <input type="text" name="two" required><br>
    Tree*: <input type="text" name="tree" required><br>
    Four*: <input type="text" name="four" required><br>
    Five*: <input type="text" name="five" required><br>
    <em class="required">*Required</em><br>
    <input type="submit" class="button" value="Shure?">
</form>

<script>
function checkInp()
{
  var x=document.forms["numbers"]["one"].value;
  var y=document.forms["numbers"]["two"].value;
  var k=document.forms["numbers"]["tree"].value;
  var j=document.forms["numbers"]["four"].value;
  var w=document.forms["numbers"]["five"].value;
  if (isNaN(x) || isNaN(y) || isNaN(k) || isNaN(j) || isNaN(w)) 
  {
    alert("Are you sure they are all numbers?");
    return false;
  }
}
</script>

<?php include('footer.php');?>