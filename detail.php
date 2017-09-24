<?php
include 'lib/data-functions.php';
echo 'Hello ' . htmlspecialchars($_GET["itemid"]) . '!';
$item=get_data ($_GET["itemid"]);
var_dump($item);
?>

<html>
	<body>
		<table>
		<?php
	foreach ($item as $key=>$value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
		echo "<td>".$value."</td>";
		echo "</tr>";
	}
	?>
	</body>
</html>