<?php
include 'lib/data-functions.php';
$something = get_index();	
var_dump ($something);
?>

<html>
<body>
	<ul>
	<?php
	foreach ($something as $key=>$value) {
		echo "<li>";
		echo "<a href=\"detail.php?itemid=".$key."\">".$value."</a>";
		echo "</li>";
	}
		?>
	</ul>
</body>
</html>