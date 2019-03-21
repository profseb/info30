<?php

$alunos = file("info30.txt");


$g = 4;

shuffle($alunos);

$grupos = array();

foreach ($alunos as $key => $value) {
	
	$grupos[$key/$g][] = $value;
	
}

echo "<ul>";
foreach($alunos as $key=>$item) {

	echo "<li><a href=\"https://$item.github.io\" target='_blank'>$item</a></li>";

}
echo "</ul>";
 

?>

<table width="80%" border="1" cellspacing="0" cellpadding="5">
	<?php foreach($grupos as $key=>$grupo) { ?>
	<tr>
		<th>Grupo 1</th>
		<th>Grupo 2</th>
		<th>Grupo 3</th>
		<th>Grupo 4</th>
		<th>Grupo 5</th>
		<th>Grupo 6</th>
		<th>Grupo 7</th>
	</tr>
	<tr>
		<td>Fulano 1</td>
		<td>Fulano 1</td>
		<td>Fulano 1</td>
		<td>Fulano 1</td>		
		<td>Fulano 1</td>		
		<td>Fulano 1</td>		
		<td>Fulano 1</td>		
	</tr>

	<?php } ?>

</table>