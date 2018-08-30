<!DOCTYPE html> 
<html> 
	<head> 
		<title>Data Mahasiswa</title> 
	</head> 
<body> 
	<h2> DATA MAHASISWA </h2>
	<table border="1" style="border-collapse: collapse;"> 
		<tr style="background: grey"> 
			<th>No. Induk</th>
			<th>Nama</th> 
			<th>Alamat</th> 
			<th colspan="2">Aksi</th> 
		</tr> 
		<?php foreach ($data as $mahasiswa) {?>
		<tr> 
			<td><?php echo $mahasiswa['no_induk']; ?></td> 
			<td><?php echo $mahasiswa['nama']; ?></td> 
			<td><?php echo $mahasiswa['alamat']; ?></td> 
			<td>
				<a href="<?php echo base_url('index.php/helloworld/edit/'. $mahasiswa['no_induk'])?>"
				>Edit</a>
			</td>
			<td>
				<a href="<?php echo base_url('index.php/helloworld/hapus/'. $mahasiswa['no_induk'])?>">Hapus</a>
			</td>
		</tr> 
		<?php } ?> 		
 	</table> 
    <a href="<?php echo base_url()."index.php/helloworld/add_data";?>">Insert</a> 
</body> 
</html> 