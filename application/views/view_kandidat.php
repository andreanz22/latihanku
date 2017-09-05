<!DOCTYPE html>
<html>
<head>
	<title>Kandidat</title>
	<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
</head>
<body style="background-color: #cfd8dc">
	<button style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); float: right;" type="button" onclick="myFunction()" class="button button5">Close Vote</button>
	<div style="color: #c62828" align="center">
		<h2 >Pemilihan Ketua Hima Informatika 2017 </h2>
	</div>
	<table align="center" border="0">
		<hr>
		<tr>
			<td>
				<a href="<?php echo site_url('vote/pilih/1');?>"><img style="height: 300px; width: 300px; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);" src="<?php echo base_url('foto/cimot.jpg');?>"></a>
			</td>
			<td>&nbsp;&nbsp;&nbsp;</td>
			<td>
				<a href="<?php echo site_url('vote/pilih/2');?>"><img style="height: 300px; width: 300px; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);" src="<?php echo base_url('foto/hu.jpg');?>"></a>
			</td>
		</tr>
		<tr align="center" style="">
			<td style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);">
				<strong>Timoti Setiadi</strong> 
			</td>
			<td>&nbsp;&nbsp;&nbsp;</td>
			<td style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);">
				<strong>Robby Michael G</strong>
			</td>
		<tr align="center" style="">
			<td >
				<a href="<?php echo site_url('vote/kurang/1');?>"><button style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);" type="submit"  class="button">Undo</button></a>
			</td>
			<td>&nbsp;&nbsp;&nbsp;</td>
			<td >
				<a href="<?php echo site_url('vote/kurang/2');?>"><button style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);" type="submit"  class="button">Undo</button></a>
			</td>
		</tr>
		<tr align="center">
			<td>
				<strong>31115004</strong> 
			</td>
			<td>&nbsp;&nbsp;&nbsp;</td>
			<td>
				<strong>31115019</strong>
			</td>
		</tr>
		<tr align="center" style="background-color: #e0e0e0">
			<td>
				<strong><?php echo $suara1;?></strong> 
			</td>
			<td>&nbsp;&nbsp;&nbsp;</td>
			<td>
				<strong><?php echo $suara2;?></strong>
			</td>
		</tr>

		<tr align="center" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);">
			<td ><a href="<?php echo site_url('vote/pilih/4');?>"><button style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);" type="submit"  class="button button3">Golput</button></a></td>

			<td colspan="1"><strong style="color: red"><?php echo $suara3;?></strong></td>

			<td ><a href="<?php echo site_url('vote/kurang/4');?>"><button style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);" type="submit"  class="button button5">Undo Golput</button></a></td>
		</tr>
		<tr >
			<td>
			</td>
		</tr>
	</table>
	<script>
                        function myFunction(gg) {
                            var x;
                            if (confirm("Apakah Yakin Ingin Menutup Penghitungan Suara??") == true) {
                                window.location.assign("<?php echo site_url('Vote/close_vote');?>")
                            } else {

                            }
                        }
                        </script>
</body>
</html>