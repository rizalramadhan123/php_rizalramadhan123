<?php         
	require "soal3koneksi.php";

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Soal 3</title>
</head>
<body>
    <h2>Soal 3</h2>
    <h3>Form Pencarian</h3>
 
	<form action="" method="post">
		<label>Cari :</label>
		<input type="text" name="cari">
		<input type="submit" value="Cari">
	</form>
	<?php 
		if(isset($_POST['cari'])){
			$cari = $_POST['cari'];
			
		}
	?>
    <table cellpadding="1" cellspacing="1" border="1">
        <thead>
            <tr>
                <td>Nama</td>
                <td>jumlah</td>
                
            </tr>
        </thead>
        

       
	       <?php
	        if(isset($_POST['cari'])){
				$cari = $_POST['cari'];

				$query = mysqli_query($kon, "SELECT hobi, count(hobi) as jumlah FROM hobi WHERE hobi LIKE '".$cari."' GROUP BY hobi ORDER BY jumlah DESC;");					
			}else{
				$query = mysqli_query($kon, "SELECT hobi, count(hobi) as jumlah FROM hobi GROUP BY hobi ORDER BY jumlah DESC;");		
			}
		      
	   		 

	        while ($data = mysqli_fetch_array($query)) {
	        ?>	
	            <tr>
	                <td><?= $data['hobi'] ?></td>
	                <td><?= $data['jumlah'] ?></td>
	            </tr>
	        <?php } ?>

    </table>
</body>
</html>