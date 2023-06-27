<?php
$nilai = 79;
if ($nilai < 40){
	echo "Nilai anda $nilai (E), Anda Tidak LULUS";
}
if ($nilai >= 40 && $nilai <43.75){
	echo "Nilai anda $nilai (D), Anda Tidak LULUS";
}
if ($nilai >= 43.75 && $nilai < 51.24){
	echo "Nilai anda $nilai (D+), Anda Tidak LULUS";
}
if ($nilai >= 51.25 && $nilai < 54.99){
	echo "Nilai anda $nilai (C-), Anda LULUS";
}
if ($nilai >= 55 && $nilai < 57.49){
	echo "Nilai anda $nilai (C), Anda LULUS";
}
if ($nilai >= 57.50 && $nilai < 62.49){
	echo "Nilai anda $nilai (C+), Anda LULUS";
}
if ($nilai >= 62.50 && $nilai < 64.99){
	echo "Nilai anda $nilai (B-), Anda LULUS";
}
if ($nilai >= 65 && $nilai < 68.74){
	echo "Nilai anda $nilai (B), Anda LULUS";
}
if ($nilai >= 68.75 && $nilai < 76.24){
	echo "Nilai anda $nilai (B+), Anda LULUS";
}
if ($nilai >= 76.25 && $nilai < 79.99){
	echo "Nilai anda $nilai (A-), Anda LULUS";
}
if ($nilai >= 80 && $nilai < 100){
	echo "Nilai anda $nilai (A), Anda LULUS";
}
?>
&nbsp;&nbsp;<br>
&nbsp;&nbsp;<br>
&nbsp;&nbsp;<br>

<?php
$tinggi=5;
$spasi = $tinggi -1;
$bintang =1;

		for ($i = 1; $i <= $tinggi; $i++) { 
			for ($j = 1; $j <= $spasi; $j++) { 
				echo "&nbsp;&nbsp;&nbsp;";
			}

			for ($j = 1; $j <= $bintang; $j++) { 
				echo "* ";
			}

			echo "<br>";
			$spasi--;
			$bintang += 2;
		}
?>	