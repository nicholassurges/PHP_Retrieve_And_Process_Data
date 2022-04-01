<?php
if(isset($_POST['submit']))
{
$user = $_POST['user'];
$type = $_POST['order_type'];
$toppings = $_POST['toppings'];
$size = $_POST['size'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Pizza</title>
<style>
.main{
border: 3px solid navy;
width: max-content;
padding: 10px;
width:460px
}
h1
{
color:navy;
}
</style>
</head>
<body>
<div class="main">
<h1>Process Pizza Form</h1>
<p>Customer Name: <?php echo $user; ?></p>
<p>Order Type: <?php echo $type;?></p>
<p>Pizza Size:<?php echo $size;?></p>
<p>Toppings:<br>
<?php
foreach($toppings as $topping)
echo $topping."<br>";
?>
</p>
</div>
</body>
</html>
<?php
}
?>