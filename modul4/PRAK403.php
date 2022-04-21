<html> 
	<head>
        <style>
            table, tr, td{
                border: solid black 1px;
				border-collapse: collapse;
				padding-inline-end: 15px;
            }
        </style>
    </head>
	<body>
		<?php
		$arr_nilai = [
			["no" => 1, "nama" => "Ridho", 
			"matkul" => [
				["nama_mk" =>"Pemrograman I", "sks" => 2], 
				["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
				["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], 
				["nama_mk" => "Arsitektur Komputer", "sks" => 3]
			]
			],
	
			["no" => 2, "nama" => "Ratna", 
			"matkul" => [
				["nama_mk" =>"Basis Data I", "sks" => 2], 
				["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
				["nama_mk" => "Kalkulus", "sks" => 3]
			]
			],
	
			["no" => 3, "nama" => "Tono", 
			"matkul" => [
				["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3], 
				["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
				["nama_mk" => "Komputasi Awan", "sks" => 3], 
				["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
			]
			]
		];

		for ($i=0; $i < count($arr_nilai); $i++) { 
			$jmlSks = 0;
			for ($j=0; $j < count($arr_nilai[$i]["matkul"]); $j++) { 
				$jmlSks += $arr_nilai[$i]["matkul"][$j]["sks"];
			}
			$arr_nilai[$i]["jmlSks"] = $jmlSks;
			if ($arr_nilai[$i]["jmlSks"] < 7) {
				$arr_nilai[$i]["keterangan"] = "<div style='background:#cc0000;'>Revisi KRS</div>";
			} else {
				$arr_nilai[$i]["keterangan"] = "<div style='background:#00cc00;'>Tidak Revisi</div>";
			}
		}
		?>
		
		<table>
			<tr style="background-color: grey; font-weight: bold;">
				<td>No</td>
				<td>Nama</td>
				<td>Mata Kuliah diambil</td>
				<td>SKS</td>
				<td>Total SKS</td>
				<td>Keterangan</td>
			</tr>
			<?php
				for ($i=0; $i < count($arr_nilai); $i++) {
					for ($j=0; $j < count($arr_nilai[$i]["matkul"]); $j++) { 
						echo "<tr>";
						if ($j == 0) {
							echo "<td>".$arr_nilai[$i]["no"]."</td>";
							echo "<td>".$arr_nilai[$i]["nama"]."</td>";
							echo "<td>".$arr_nilai[$i]["matkul"][$j]["nama_mk"]."</td>";
							echo "<td>".$arr_nilai[$i]["matkul"][$j]["sks"]."</td>";
							echo "<td>".$arr_nilai[$i]["jmlSks"]."</td>";
							echo "<td>".$arr_nilai[$i]["keterangan"]."</td>";
						} else {
							echo "<td></td>";
							echo "<td></td>";
							echo "<td>".$arr_nilai[$i]["matkul"][$j]["nama_mk"]."</td>";
							echo "<td>".$arr_nilai[$i]["matkul"][$j]["sks"]."</td>";
							echo "<td></td>";
							echo "<td></td>";
						}
						echo "</tr>";
					}
				}
			?>
		</table>
	</body>
</html>