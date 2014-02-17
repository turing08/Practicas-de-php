<?php
	$n=1;
	$i=1;
	$total=1;
	while($n<=12)
	{
		echo "%%%%%% TABLA DEL NUMERO: ",$n," %%%%%% <br /> \n";
		$i=1;
		while($i<=12)
		{
			
			echo $n, " * ",$i," = ",$total =$n *$i,"<br/>";
			$i+=1;
		}
		echo "<br/>";
		$n+=1;
		
	}
?>	
