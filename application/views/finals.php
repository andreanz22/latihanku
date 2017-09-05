<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
</head>
<body style="background-image: url('<?php echo base_url('foto/bg.jpg');?>');">
	<div style="color: #ffd54f" align="center">
		<h2 >Congratulations</h2>
	</div>

	<?php
	if(isset($hasil))
	{
		?>
		<table align="center" border="0" style="color: #fafafa; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);">
			<tr align="center">
				<td><img style="height: 300px; width: 300px; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);" src="<?php echo base_url($hasil->foto);?>"></td>
			</tr>
			<tr align="center">
			
				<td><strong><?php echo $hasil->nama;?></strong></td>
			</tr>
			<tr align="center">
				<td><strong><?php echo $hasil->nrp;?></strong></td>
			</tr>
			<tr align="center">
				<td><strong><?php echo $hasil->suara?> Suara</strong></td>
			</tr>
		</table>
		<?php
	}
	?>

	<div style="color: #ffd54f;" align="center">
		<h2 >Ketua Hima Informatika Terpilih 2017-2018</h2>
	</div>
	<hr>


</body>
<footer>
  <p style="color: #cfd8dc;" align="center"><strong>Created By: ReNova &copy; &reg;</strong></p>
  <!-- <p>Contact information: <a href="mailto:someone@example.com">
  someone@example.com</a>.</p> -->
</footer>
</html>