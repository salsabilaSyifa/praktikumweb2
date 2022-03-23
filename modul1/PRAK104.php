<html> 
	<head>
		<style type="text/css">
			table,th,td,tr{border: 1.5px solid black;}
			th{font-weight:bold; font-family: serif;}
			td{font-family: serif;}
		</style>
	</head>
	<body>
		<?php
			$produk = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
		?>
		<?php
		echo "<table>
				<th>Daftar Smartphone Samsung</th>";
				foreach($produk as $hasil)
				{
					echo "<tr>";
						echo "<td> {$hasil} </td>";
					echo "</tr>";
				}
		echo "</table>";
		?>
	</body>
</html>