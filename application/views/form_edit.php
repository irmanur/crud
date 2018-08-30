<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
</head>
<body>
	<table>
		<form method="post" action="<?php echo base_url()."index.php/helloworld/update_data"; ?>">
		<?php foreach($mhs as $d) {?>
		<tr>
				<td>Nomor Induk</td>
				<td>:</td>
				<td><input type="text" name="ni" value="<?php echo $d->no_induk ?>" readonly></td>
		</tr>
		<tr>
				<td>Nama</td>
				<td>:</td>
<td><input type="text" required name="nama" placeholder="Masukan Nama Anda" value="<?php echo $d->nama ?>"></td>
		</tr>
		<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea style="resize: none;" required name="alamat"><?php  echo $d->alamat ?></textarea></td>
		</tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
		</tr>
		<?php } ?>
		</form>
	</table>
</body>
</html>