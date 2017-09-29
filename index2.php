<div> 
<?php
 echo "<table>";
$y=1;
for ($j=1;$j<10; $j++){
  echo '<tr>';
  for ($i=1; $i<10; $i++) {
	  echo '<td>';
	$y=$i*$j;
	echo "$i*$j=$y";
	 echo '</td>';
	
    }
	echo '</tr>';
}
echo "</table>"
?>"
</div>