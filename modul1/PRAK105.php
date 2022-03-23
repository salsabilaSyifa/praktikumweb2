<html> 
	<head>
		<style type="text/css">
			table,th,td,tr{border: 1.5px solid black;}
			th{padding-top: 20px; padding-bottom: 20px; 
                background-color:red; font-size:x-large; 
                font-weight:bold; font-family: serif;}
			td{font-family: serif;}
		</style>
	</head>
	<body>
		<?php
        $produk = [
            "S22" => "Samsung Galaxy S22",
            "S22+" => "Samsung Galaxy S22+",
            "A03" => "Samsung Galaxy A03",
            "XC5" => "Samsung Galaxy Xcover 5",];
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