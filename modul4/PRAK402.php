<html> 
	<head>
        <style>
            table, tr, td{
                border: solid black 1px;
				border-collapse: collapse;
				padding: 15px;
            }
        </style>
    </head>
	<body>
		<?php
		$arr_nilai = [
			["nama" => "Andi", "nim" => "2101001", "nilaiUTS" => 87, "nilaiUAS" => 65],
			["nama" => "Budi", "nim" => "2101002", "nilaiUTS" => 76, "nilaiUAS" => 79],
			["nama" => "Tono", "nim" => "2101003", "nilaiUTS" => 50, "nilaiUAS" => 41],
			["nama" => "Jessica", "nim" => "2101004", "nilaiUTS" => 60, "nilaiUAS" => 75],
		];

		for ($i=0; $i < count($arr_nilai); $i++) { 
			$arr_nilai[$i]["nilaiAkhir"] = $arr_nilai[$i]["nilaiUTS"] * 0.4 + $arr_nilai[$i]["nilaiUAS"] * 0.6;

			if ($arr_nilai[$i]["nilaiAkhir"] >= 80) {
				$arr_nilai[$i]["huruf"] = 'A';
			}
			else if ($arr_nilai[$i]["nilaiAkhir"] >= 70) {
				$arr_nilai[$i]["huruf"] = 'B';
			}
			else if ($arr_nilai[$i]["nilaiAkhir"] >= 60) {
				$arr_nilai[$i]["huruf"] = 'C';
			}
			else if ($arr_nilai[$i]["nilaiAkhir"] >= 50) {
				$arr_nilai[$i]["huruf"] = 'D';
			}
			else {
				$arr_nilai[$i]["huruf"] = 'E';
			}
		}
		?>
		
		<table>
			<tr style="background-color: grey; font-weight: bold;">
				<td>Nama</td>
				<td>NIM</td>
				<td>Nilai UTS</td>
				<td>Nilai UAS</td>
				<td>Nilai Akhir</td>
				<td>Huruf</td>
			</tr>

			<?php
			for ($i=0; $i < count($arr_nilai); $i++) { 
				echo "<tr>";
				echo "<td>".$arr_nilai[$i]["nama"]."</td>";
				echo "<td>".$arr_nilai[$i]["nim"]."</td>";
				echo "<td>".$arr_nilai[$i]["nilaiUTS"]."</td>";
				echo "<td>".$arr_nilai[$i]["nilaiUAS"]."</td>";
				echo "<td>".$arr_nilai[$i]["nilaiAkhir"]."</td>";
				echo "<td>".$arr_nilai[$i]["huruf"]."</td>";
				echo "</tr>";
			}       
			?>
		</table>
	</body>
</html>