<?php 
	// var_dump($_POST);
 $kolom = '';
 $baris = '';
 $namakolom = '';
 $nilai = '';
 	if(isset($_POST['eksekusi1']))
	    {
	    	$kolom = $_POST['kolom'];
			$baris = $_POST['baris']; 
	    }
	
	if(isset($_POST['eksekusi2']))
	    {
			$namakolom = $_POST['namakolom'];
			$nilai = $_POST['nilai'];
	    }
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Soal 1</title>
</head>
<body>
<form action="" method="post">
	<ul>
		<li>
			<label for="baris">Inputkan Jumlah Baris</label>
			<input type="text" name="baris" id="baris">
		</li>
		<li>
			<label for="kolom">Inputkan Jumlah Kolom</label>
			<input type="text" name="kolom" id="kolom">
		</li>

	</ul>
	<button type="submit" name="eksekusi1"> coba eksekusi</button>
	
</form>
<?php if (isset($_POST['eksekusi1']) === true): ?>
	<form method="post" action="">
	<table>
			
			<?php for ($i = 1;$i <= $baris;$i++) : ?>
				<tr>
					<?php for($j = 1;$j <= $kolom;$j++): ?>
						<input type="hidden" name="namakolom[]" value="<?php echo $i.','.$j; ?>">
						<td><?php echo $i.','.$j; ?><input type="text" name="nilai[]"></td>
					<?php endfor; ?>
				</tr>
			<?php endfor; ?>
			
			</form>
			
		</table>
	<button type="submit" name="eksekusi2">eksekusi</button>
<?php endif ?>


<table>
	<?php if ($namakolom != ''): ?>
		<h1>hasil</h1>
		<?php $i = 0; ?>
		<?php foreach ($namakolom as $k ) : ?>	
			<tr>
				<td><?= $k ?> : <?= $nilai[$i]  ?></td>				
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	<?php else: ?>
		<tr>
			<td>data kosong</td>
		</tr>
	<?php endif ?>
		
		
</table>
</body>
</html>