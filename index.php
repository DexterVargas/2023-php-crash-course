
<?php
	echo "<h1>Hello lkajsdlkjaslkdjkjsakdjalsdkjWorld!</h1>";


$name = "Dexter Vargas";
echo $name;
var_dump($name);
echo '$name';
$arr = [1,2,3,41,5,'dex',true];
$arr1 = array (1,2,3,41,5,'dex',true);

var_dump($arr);
var_dump($arr1);
echo $arr[1];

$arrAssociative = [
	'lastname' => 'dexter',
	'lasname' => 'Vargas',
	'email' => 'mail.com'
];
$arrAssociative1 = [
	[
		'lastname' => 'dexter',
		'lasname' => 'Vargas',
		'email' => 'mail.com'
	],[
		'lastname' => 'asdasd',
		'lasname' => '46456456',
		'email' => 'sssssssmail.com'
	],[
		'lastname' => 'wwwww',
		'lasname' => '00000',
		'email' => 'mail.com'
	]
];

echo $arr[1];
var_dump($arrAssociative);
print_r( $arrAssociative1);
echo $arrAssociative1[1]['email'];

$t = date("D");
echo $t;

if (isset($_POST['submit'])) {
	echo "<p></p>" . $_POST['name'];
	echo "<p></p>";
	echo $_POST['age'];
	echo "<p></p>";
}

setcookie('names', 'Dexter', time() + 86400 *30);
if(isset($_COOKIE['names'])){
	echo $_COOKIE['names'];
}

?><a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Dex&age=50">CLICK ME</a>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<div>
		<label for="name">Name:</label>
		<input type="text" name="name" id="name">
	</div>
	<div>
		<label for="age">Age:</label>
		<input type="text" name="age" id="age">
	</div>
	<input type="submit" value="Submit" name = "submit">
</form>






