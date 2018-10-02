<body bgcolor="maroon">
<?php
		echo "<table width=\"100%\" border=\"0\">";
		for ($i=0; $i < 27; $i++) { 

			echo "<tr>";
			for ($j=0; $j < 7; $j++) { 
				if(($j==0 && $i!=6 && $i!=13 && $i!=20) or ($j==6 && $i!=6 && $i!=13 && $i!=20) or ($j==1 && $i==3 or $j==1 && $i==10 or $j==1 && $i==24 or $j==1 && $i==17) or ($j==5 && $i==3 or $j==5 && $i==10 or $j==5 && $i==24 or $j==5 && $i==17) or
					($j==2 && $i==6 or $j==2 && $i==13 or $j==2 && $i==20) or ($j==4 && $i==6 or $j==4 && $i==13 or $j==4 && $i==20) or ($j==3 && $i==10 or $j==3 && $i==17)){
					echo "<td bgcolor='navy'>";
				echo "<table><tr><td>00 June<input type='checkbox'>&nbsp;? vs ? <input type='checkbox'>00:00</td></tr></table>";
				}else{
					echo "<td>";
					echo "&nbsp;";
				}
					
					echo "</td>";
			}
			echo "<tr>";
		}
		echo "</table>";


?>
</body>